<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController
{
    private $contacatModel;
    public function __construct()
    {

        $this->contacatModel = new Contact();
    }
    public function index()
    {
        global $request;
        $where = ['ORDER' => ["created_at" => "DESC"]];
        $search_keyword = $request->input('s');
        if (!is_null($request->input('s'))) {
            $where['OR'] = [
                "name[~]" => $search_keyword,
                "mobile[~]" => $search_keyword,
                "email[~]" => $search_keyword,
            ];
        }
        $contacts = $this->contacatModel->get('*', $where);
        $data = [
            'contacts' => $contacts,
            'search_keyword' => $search_keyword
        ];
        view('home.index', $data);
    }
}


        // $faker = \Faker\Factory::create();


        // for ($i = 0; $i < 1000; $i++) {
        //     $this->contacatModel->create([
        //         'name' => $faker->name(),
        //         'mobile' =>  $faker->phoneNumber(),
        //         'email' => $faker->email(),
        //     ]);
        // }