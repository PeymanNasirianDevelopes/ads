<?php

namespace App\Http\Controllers;

use App\BaseInfo;
use App\Degree;
use App\Education;
use App\EducationGo;
use App\Experience;
use App\Honor;
use App\Language;
use App\Research;
use App\Sample;
use App\WorkEx;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index1($id){

        $resume = BaseInfo::where('id',$id)->first();
        $education=Education::all()->where('base_info_id',$id);
        $work_ex=WorkEx::all()->where('base_info_id',$id);
        $skills_language=Language::all()->where('base_info_id',$id);
        $skills_exp=Experience::all()->where('base_info_id',$id);
        $skills_degrees=Degree::all()->where('base_info_id',$id);
        $skills_honors=Honor::all()->where('base_info_id',$id);
        $samples=Sample::all()->where('base_info_id',$id);
        $researchs=Research::all()->where('base_info_id',$id);



        return view("resume.1st.index")->with(compact("resume","education","work_ex","skills_language","skills_exp","skills_degrees","skills_honors","samples","researchs"));
    }

    public function index2($id){
        $resume = BaseInfo::where('id',$id)->first();
        $education=Education::all()->where('base_info_id',$id);
        $work_ex=WorkEx::all()->where('base_info_id',$id);
        $skills_language=Language::all()->where('base_info_id',$id);
        $skills_exp=Experience::all()->where('base_info_id',$id);
        $skills_degrees=Degree::all()->where('base_info_id',$id);
        $skills_honors=Honor::all()->where('base_info_id',$id);
        $samples=Sample::all()->where('base_info_id',$id);
        $researchs=Research::all()->where('base_info_id',$id);



        return view("resume.2nd.index")->with(compact("resume","education","work_ex","skills_language","skills_exp","skills_degrees","skills_honors","samples","researchs"));
    }
    public function index3($id){
        $resume = BaseInfo::where('id',$id)->first();
        $education=Education::all()->where('base_info_id',$id);
        $work_ex=WorkEx::all()->where('base_info_id',$id);
        $skills_language=Language::all()->where('base_info_id',$id);
        $skills_exp=Experience::all()->where('base_info_id',$id);
        $skills_degrees=Degree::all()->where('base_info_id',$id);
        $skills_honors=Honor::all()->where('base_info_id',$id);
        $samples=Sample::all()->where('base_info_id',$id);
        $researchs=Research::all()->where('base_info_id',$id);



        return view("resume.3rd.index")->with(compact("resume","education","work_ex","skills_language","skills_exp","skills_degrees","skills_honors","samples","researchs"));
    }
    public function index4($id){
        $resume = BaseInfo::where('id',$id)->first();
        $education=Education::all()->where('base_info_id',$id);
        $work_ex=WorkEx::all()->where('base_info_id',$id);
        $skills_language=Language::all()->where('base_info_id',$id);
        $skills_exp=Experience::all()->where('base_info_id',$id);
        $skills_degrees=Degree::all()->where('base_info_id',$id);
        $skills_honors=Honor::all()->where('base_info_id',$id);
        $samples=Sample::all()->where('base_info_id',$id);
        $researchs=Research::all()->where('base_info_id',$id);



        return view("resume.4th.index")->with(compact("resume","education","work_ex","skills_language","skills_exp","skills_degrees","skills_honors","samples","researchs"));
    }
    public function index5($id){
        $resume = BaseInfo::where('id',$id)->first();
        $education=Education::all()->where('base_info_id',$id);
        $work_ex=WorkEx::all()->where('base_info_id',$id);
        $skills_language=Language::all()->where('base_info_id',$id);
        $skills_exp=Experience::all()->where('base_info_id',$id);
        $skills_degrees=Degree::all()->where('base_info_id',$id);
        $skills_honors=Honor::all()->where('base_info_id',$id);
        $samples=Sample::all()->where('base_info_id',$id);
        $researchs=Research::all()->where('base_info_id',$id);



        return view("resume.5th.index")->with(compact("resume","education","work_ex","skills_language","skills_exp","skills_degrees","skills_honors","samples","researchs"));
    }
    public function index6($id){
        $resume = BaseInfo::where('id',$id)->first();
        $education=Education::all()->where('base_info_id',$id);
        $work_ex=WorkEx::all()->where('base_info_id',$id);
        $skills_language=Language::all()->where('base_info_id',$id);
        $skills_exp=Experience::all()->where('base_info_id',$id);
        $skills_degrees=Degree::all()->where('base_info_id',$id);
        $skills_honors=Honor::all()->where('base_info_id',$id);
        $samples=Sample::all()->where('base_info_id',$id);
        $researchs=Research::all()->where('base_info_id',$id);



        return view("resume.6th.index")->with(compact("resume","education","work_ex","skills_language","skills_exp","skills_degrees","skills_honors","samples","researchs"));
    }


}
