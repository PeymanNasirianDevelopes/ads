<?php

namespace App\Http\Controllers;

use App\BaseInfo;
use App\SocialNet;
use Illuminate\Http\Request;

class BaseInfoController extends Controller
{

    public function index()
    {
        return view("index");
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        $data=ValidationController::base_info();
        $data['date_birth']= $request->year . "/". $request->month . "/". $request->day;
        if ($image=$request->image){

                $data['image']=do_upload($image);

        }
        $create= BaseInfo::create($data);
        $id=$create->id;
        if ($UserSocialNetsaddress=$request->UserSocialNetsaddress){
            foreach ($UserSocialNetsaddress as $socialNetsaddress){
             foreach ($UserSocialNets=$request->UserSocialNetsaddress as $userSocialNet){
                 SocialNet::make($socialNetsaddress,$userSocialNet,$id);
             }

            }
        }


        dd("ok");

    }


    public function show(BaseInfo $baseInfo)
    {
        //
    }


    public function edit(BaseInfo $baseInfo)
    {
        //
    }


    public function update(Request $request, BaseInfo $baseInfo)
    {
        //
    }

    public function destroy(BaseInfo $baseInfo)
    {
        //
    }
}
