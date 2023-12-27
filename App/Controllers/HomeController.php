<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController
{
    private $contacatModel;
    public function __construct()
    {

        $this->contacatModel = new Contact;
    }
    public function index()
    {

        $data = [
            'contacts' => $this->contacatModel->getAll()
        ];
        view('home.index', $data);
    }
}
