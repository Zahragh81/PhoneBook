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

        $data = [
            'contacts' => $this->contacatModel->getAll()
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