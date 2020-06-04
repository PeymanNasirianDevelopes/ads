<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public static function base_info(){
        return request()->validate([
            "name"=>"string | between:4,100 | required ",
            "last_name"=>"string | required ",
            "gender"=> "string | nullable ",
            "maried"=> "string | nullable ",
            "military"=> "string | nullable ",
            "date_birth"=> "string | nullable ",
            "email"=> "string | nullable ",
            "phone"=> "string | nullable ",
            "mobile"=> "string | nullable ",
            "website"=> "string | nullable ",
            "country"=> "string | nullable ",
            "province"=> "string | nullable ",
            "city"=> "string | nullable ",
            "address"=> "string | nullable ",
            "about"=> "string | nullable ",
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",


        ]);

    }
    public static function contact(){
        return request()->validate([
            "name"=>"string | between:4,100 | required ",
            "email"=>"email | required ",
            "message"=> "string | nullable ",
            "base_info_id"=> "integer | nullable ",



        ]);

    }
}
