<?php

namespace App\Core\Routing;


use \App\Core\Request;
use App\Middleware\Contract\GlobalMiddleware;




class Router
{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = '\App\Controllers\\';

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        #run middleware here
        $this->run_global_middlware();
        $this->run_route_middlware();
    }
    private function run_global_middlware()
    {
        $global_middleware = new GlobalMiddleware();
        $global_middleware->handle();
    }
    private function run_route_middlware()
    {
        $middlware = $this->current_route['middleware'];
        foreach ($middlware as $middlware_class) {
            $middlware_obj = new $middlware_class;
            $middlware_obj->handle();
        }
    }

    public function findRoute(Request $request)
    {
        foreach ($this->routes as $route) {
            if (!in_array($request->method(), $route['methods'])) {
                return false;
            }
            if ($this->regex_matched($route)) {
                return $route;
            }
        }
        return null;
    }
    public function regex_matched($route)
    {
        global $request;
        $pattern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route['uri']) . "$/";
        $result = preg_match($pattern, $this->request->uri(), $matches);
        if (!$result) {
            return false;
        }
        foreach($matches as $key => $value){
            if(!is_int($key)){
                $request->add_route_param($key,$value);
            }
        }
        return true;
    }
    public function dispatch404()
    {
        header('HTTP/1.0 404 Not Found');
        view('errors.404');
        die();
    }

    public function run()
    {
        #405: invalid request method 

        #404 : uri not exists
        if (is_null($this->current_route))
            $this->dispatch404();
        $this->dispatch($this->current_route);
    }

    private function dispatch($route)
    {
        $action = $route['action'];
        #action : null
        if (is_null($action) || empty($action)) {
            return;
        }

        #action : clousure 
        if (is_callable($action)) {
            $action();
            // call_user_func($action);
        }

        #action : Controller@method
        if (is_string($action)) {
            $action = explode('@', $action);
        }
        #action : ['Controller', 'method']
        if (is_array($action)) {
            $class_name = self::BASE_CONTROLLER .  $action[0];
            $method = $action[1];
            if (!class_exists($class_name))
                throw new \Exception("Class $class_name Not Exists!");

            $controller = new $class_name();
            if (!method_exists($controller, $method))
                throw new \Exception("method $method Not Exists in class $class_name");
            $controller->{$method}();
        }
    }
}
