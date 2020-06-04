<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function index(){
        return view("website.mail.demo");
    }
}
