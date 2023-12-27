<?php
#front conroller

include "bootsrap/init.php";
//$result = $userModel->sum('id', ['id[>]' => 8]);
//var_dump($result);
////
//$productModel = new Product();
//var_dump($productModel->getAll());
// for($i = 1; $i <= 7; $i++){
//     $productModel->create([
//         "title" => "Product-$i",
//         "price" => rand(1,100) * 1000
//     ]);
// }
echo "<pre>";
// var_dump($productModel->getAll());

echo "</pre>";
 $router = new \App\Core\Routing\Router();
 $router->run();

