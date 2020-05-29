<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = ['id'];
    public static function make($data,$id){

        $social=new self;
        $social->base_info_id=$id;
        Education::make($data);
    }
}
