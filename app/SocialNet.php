<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNet extends Model
{
    protected $guarded = ['id'];
    public static function make($socialNetsaddress,$userSocialNet,$id){

        $social=new self;
        $social->name=$userSocialNet;
        $social->address=$socialNetsaddress;
        $social->base_info_id=$id;
        $social->save();
    }
}
