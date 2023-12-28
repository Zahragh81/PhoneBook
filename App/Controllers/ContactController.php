<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Utilities\Validation;

class ContactController
{
    private $contacatModel;
    public function __construct()
    {

        $this->contacatModel = new Contact();
    }
    public function add()
    {
        global $request;
        $data['alreadyExists'] = false;
        #check if contact number already exists
        $count = $this->contacatModel->count(['mobile' => $request->input('mobile')]);
        if ($count) {
            $data['alreadyExists'] = true;
            view_die('contact.add-result', $data);
        }
        if (!Validation::is_valid_email($request->input('email'))) {
            $data = ['success' => false, 'message' => 'Invalid Eamil Address'];
            view_die('contact.add-result', $data);
        }
        #create new Contact
        $contact_id = $this->contacatModel->create([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
        ]);
        $data['contact_id'] = $contact_id;
        $data['success'] = true;
        $data['message'] = "Contact with id $contact_id Created Successsfully";

        view('contact.add-result', $data);
    }
}
