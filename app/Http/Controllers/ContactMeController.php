<?php

namespace App\Http\Controllers;

use App\ContactMe;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;

class ContactMeController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=ValidationController::contact();

         ContactMe::create($data);


    }


    public function show(ContactMe $contactMe)
    {
        //
    }


    public function edit(ContactMe $contactMe)
    {
        //
    }


    public function update(Request $request, ContactMe $contactMe)
    {
        //
    }


    public function destroy(ContactMe $contactMe)
    {
        //
    }
}
