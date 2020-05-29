<?php

namespace App\Http\Controllers;

use App\BaseInfo;
use App\Degree;
use App\Education;
use App\EducationGo;
use App\Experience;
use App\Honor;
use App\Job;
use App\Language;
use App\Migration_student;
use App\MigrationJob;
use App\Research;
use App\Sample;
use App\SocialNet;
use App\WorkEx;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
            $userSocialNet=$request->UserSocialNets;
            foreach ($UserSocialNetsaddress as $index=>$socialNetsaddress){

                 SocialNet::make($socialNetsaddress,$userSocialNet[$index],$id);
             }

            }

        $EducationInfosFieldOfStudys= $request->EducationInfosFieldOfStudy;
        $EducationInfosBranch= $request->EducationInfosBranch;
        $EducationInfosUnderGraduateInstitudeType= $request->EducationInfosUnderGraduateInstitudeType;
        $EducationInfosEducationInstitudeTitle= $request->EducationInfosEducationInstitudeTitle;
        $EducationInfosGrade= $request->EducationInfosGrade;
        $EducationInfosCountryId= $request->EducationInfosCountryId;
        $EducationInfosProvinceId= $request->EducationInfosProvinceId;

        $EducationInfosProvinceTitle= $request->EducationInfosProvinceTitle;
        $EducationInfosCityTitle= $request->EducationInfosCityTitle;
        $EducationInfosEntranceYear= $request->EducationInfosEntranceYear;
        $EducationInfosGraduateYear= $request->EducationInfosGraduateYear;


        $EducationInfosEducationLevels=$request->EducationInfosEducationLevel;


        foreach ($EducationInfosEducationLevels as $index => $EducationInfosEducationLevel){
            if($EducationInfosProvinceId){
                $province=$EducationInfosProvinceId[$index] ?? 0;
            }
            else{
                $province=0;
            }

            if($EducationInfosGraduateYear){
                $education = [
                    "uni_magta"=>$EducationInfosEducationLevels[$index] ?? 0,
                    "uni_major"=> $EducationInfosFieldOfStudys[$index] ?? 0,
                    "uni_gerayesh"=> $EducationInfosBranch[$index] ?? 0,
                    "uni_type"=> $EducationInfosUnderGraduateInstitudeType[$index] ?? 0,
                    "uni_name"=> $EducationInfosEducationInstitudeTitle[$index] ?? 0,
                    "uni_average"=> $EducationInfosGrade[$index] ?? 0,
                    "uni_country"=> $EducationInfosCountryId[$index] ?? 0,
                    "uni_province"=> $province ?? 0,
                    "uni_province_title"=> $EducationInfosProvinceTitle[$index] ?? 0,
                    "uni_city"=> $EducationInfosCityTitle[$index] ?? 0,
                    "uni_inyear"=> $EducationInfosEntranceYear[$index] ?? 0,
                    "uni_outyear"=> $EducationInfosGraduateYear[$index] ?? 0,
                    "uni_instudy"=> 0,
                    "base_info_id"=>$id
                ];
            }
            else{
                $studing= $request->studing;
                $education = [
                    "uni_magta"=>$EducationInfosEducationLevels[$index] ?? 0,
                    "uni_major"=> $EducationInfosFieldOfStudys[$index] ?? 0,
                    "uni_gerayesh"=> $EducationInfosBranch[$index] ?? 0,
                    "uni_type"=> $EducationInfosUnderGraduateInstitudeType[$index] ?? 0,
                    "uni_name"=> $EducationInfosEducationInstitudeTitle[$index] ?? 0,
                    "uni_average"=> $EducationInfosGrade[$index] ?? 0,
                    "uni_country"=> $EducationInfosCountryId[$index] ?? 0,
                    "uni_province"=> $province ?? 0,
                    "uni_province_title"=> $EducationInfosProvinceTitle[$index] ?? 0,
                    "uni_city"=> $EducationInfosCityTitle[$index] ?? 0,
                    "uni_inyear"=> $EducationInfosEntranceYear[$index] ?? 0,
                    "uni_outyear"=> $EducationInfosGraduateYear[$index] ?? 0,
                    "uni_instudy"=> $studing[$index] ?? 0,
                    "base_info_id"=>$id
                ];
            }

        Education::create($education);

        }
if($ExperiencesInfosJobCategoryId=$request->ExperienceInfosJobCategoryId){
    $ExperiencesInfosJobCategoryId=$request->ExperienceInfosJobCategoryId;
    $ExperienceInfosJobTitle= $request->ExperienceInfosJobTitle;
    $ExperienceInfosEmployerType= $request->ExperienceInfosEmployerType;
    $ExperienceInfosCompanyName= $request->ExperienceInfosCompanyName;
    $ExperienceInfosEmploymentType= $request->ExperienceInfosEmploymentType;
    $ExperienceInfosJobLevel= $request->ExperienceInfosJobLevel;
    $ExperienceInfosCountryId= $request->ExperienceInfosCountryId;
    $ExperienceInfosProvinceId= $request->ExperienceInfosProvinceId;
    $ExperienceInfosProvinceTitle= $request->ExperienceInfosProvinceTitle;
    $ExperienceInfosCityTitle= $request->ExperienceInfosCityTitle;
    $ExperienceInfosStartingMonth= $request->ExperienceInfosStartingMonth;
    $ExperienceInfosStartingYear=$request->ExperienceInfosStartingYear;
    $ExperienceInfosFinishingMonth=$request->ExperienceInfosFinishingMonth;
    $ExperienceInfosFinishingYear=$request->ExperienceInfosFinishingYear;



    foreach ($ExperiencesInfosJobCategoryId as $index => $ExperienceInfosJobCategoryId){
        if($ExperienceInfosProvinceId){
            $province=$ExperienceInfosProvinceTitle[$index];
        }
        else{
            $province=0;
        }

        if($ExperienceInfosFinishingMonth){
            $workexp = [
                "work_title"=>$ExperiencesInfosJobCategoryId[$index] ?? 0,
                "work_semat"=> $ExperienceInfosJobTitle[$index] ?? 0,
                "work_center_title"=> $ExperienceInfosEmployerType[$index] ?? 0,
                "work_center"=> $ExperienceInfosCompanyName[$index] ?? 0,
                "work_how"=> $ExperienceInfosEmploymentType[$index] ?? 0,
                "work_state"=> $ExperienceInfosJobLevel[$index] ?? 0,
                "work_country"=> $ExperienceInfosCountryId[$index] ?? 0,
                "work_province"=> $province ?? 0,
                "work_province_title"=> $ExperienceInfosProvinceTitle[$index] ?? 0,
                "work_city"=> $ExperienceInfosCityTitle[$index] ?? 0,
                "work_startm"=> $ExperienceInfosStartingMonth[$index] ?? 0,
                "work_starty"=> $ExperienceInfosStartingYear[$index] ?? 0,
                "work_endm"=> $ExperienceInfosFinishingMonth[$index] ?? 0,
                "work_endy"=> $ExperienceInfosFinishingYear[$index] ?? 0,
                "in_work"=> 0,
                "base_info_id"=>$id
            ];
        }
        else{
            $workexp = [
                "work_title"=>$ExperiencesInfosJobCategoryId[$index] ?? 0,
                "work_semat"=> $ExperienceInfosJobTitle[$index] ?? 0,
                "work_center_title"=> $ExperienceInfosEmployerType[$index] ?? 0,
                "work_center"=> $ExperienceInfosCompanyName[$index] ?? 0,
                "work_how"=> $ExperienceInfosEmploymentType[$index] ?? 0,
                "work_state"=> $ExperienceInfosJobLevel[$index] ?? 0,
                "work_country"=> $ExperienceInfosCountryId[$index] ?? 0,
                "work_province"=> $province ?? 0,
                "work_province_title"=> $ExperienceInfosProvinceTitle[$index] ?? 0,
                "work_city"=> $ExperienceInfosCityTitle[$index] ?? 0,
                "work_startm"=> $ExperienceInfosStartingMonth[$index] ?? 0,
                "work_starty"=> $ExperienceInfosStartingYear[$index] ?? 0,
                "in_work"=> 1,
                "base_info_id"=>$id
            ];
        }

        WorkEx::create($workexp);

    }


}


        if($LanguageInfosLanguageNames=$request->LanguageInfosLanguageName){
            $LanguageInfosLanguageNamew=$request->LanguageInfosLanguageName;
            $LanguageInfosReadingLevel=$request->LanguageInfosReadingLevel;
            $LanguageInfosWritingLevel= $request->LanguageInfosWritingLevel;
            $LanguageInfosListeningLevel= $request->LanguageInfosListeningLevel;
            $LanguageInfosSpeakingLevel= $request->LanguageInfosSpeakingLevel;




            foreach ($LanguageInfosLanguageNames as $index => $LanguageInfosLanguageName){



                    $language = [
                        "language_name"=>$LanguageInfosLanguageNamew[$index] ?? 0,
                        "language_read"=> $LanguageInfosReadingLevel[$index] ?? 0,
                        "language_write"=> $LanguageInfosWritingLevel[$index] ?? 0,
                        "language_listen"=> $LanguageInfosListeningLevel[$index] ?? 0,
                        "language_speak"=> $LanguageInfosSpeakingLevel[$index] ?? 0,

                        "base_info_id"=>$id
                    ];


                Language::create($language);

            }


        }

        if($SkillInfosSkillNames=$request->SkillInfosSkillName){
            $SkillInfosSkillNamew=$request->SkillInfosSkillName;
            $SkillInfosLevel=$request->SkillInfosLevel;





            foreach ($SkillInfosSkillNames as $index => $SkillInfosSkillName){



                $exp = [
                    "ex_name"=>$SkillInfosSkillNamew[$index] ?? 0,
                    "ex_state"=> $SkillInfosLevel[$index] ?? 0,


                    "base_info_id"=>$id
                ];


                Experience::create($exp);

            }


        }

        if($CertificateInfosCertificateTypes=$request->CertificateInfosCertificateType){
            $CertificateInfosCertificateTypew=$request->CertificateInfosCertificateType;
            $CertificateInfosTitle=$request->CertificateInfosTitle;
            $CertificateInfosInstitude= $request->CertificateInfosInstitude;
            $CertificateInfosMonth= $request->CertificateInfosMonth;
            $CertificateInfosYear= $request->CertificateInfosYear;




            foreach ($CertificateInfosCertificateTypes as $index => $CertificateInfosCertificateType){



                $certificate = [
                    "degree_type"=>$CertificateInfosCertificateTypew[$index] ?? 0,
                    "degree_title"=> $CertificateInfosTitle[$index] ?? 0,
                    "degree_uni"=> $CertificateInfosInstitude[$index] ?? 0,
                    "degree_month"=> $CertificateInfosMonth[$index] ?? 0,
                    "degree_year"=> $CertificateInfosYear[$index] ?? 0,

                    "base_info_id"=>$id
                ];


                Degree::create($certificate);

            }


        }

        if($HonorInfosTitles=$request->HonorInfosTitle){
            $HonorInfosTitlew=$request->HonorInfosTitle;
            $HonorInfosMonth=$request->HonorInfosMonth;
            $HonorInfosYear= $request->HonorInfosYear;





            foreach ($HonorInfosTitles as $index => $HonorInfosTitle){



                $honor = [
                    "honor_title"=>$HonorInfosTitlew[$index] ?? 0,
                    "honor_month"=> $HonorInfosMonth[$index] ?? 0,
                    "honor_year"=> $HonorInfosYear[$index] ?? 0,


                    "base_info_id"=>$id
                ];


                Honor::create($honor);

            }


        }

        if($ResearchInfosPublishTypes=$request->ResearchInfosPublishType){
            $ResearchInfosPublishTypew=$request->ResearchInfosPublishType;
            $ResearchInfosTitle=$request->ResearchInfosTitle;
            $ResearchInfosPublisher= $request->ResearchInfosPublisher;
            $ResearchInfosLinkUrl= $request->ResearchInfosLinkUrl;
            $ResearchInfosMonth= $request->ResearchInfosMonth;
            $ResearchInfosYear= $request->ResearchInfosYear;
            $ResearchInfosDescription= $request->ResearchInfosDescription;





            foreach ($ResearchInfosPublishTypes as $index => $ResearchInfosPublishType){



                $res = [
                    "research_type"=>$ResearchInfosPublishTypew[$index] ?? 0,
                    "research_title"=> $ResearchInfosTitle[$index] ?? 0,
                    "research_author"=> $ResearchInfosPublisher[$index] ?? 0,
                    "research_link"=>$ResearchInfosLinkUrl[$index] ?? 0,
                    "research_month"=> $ResearchInfosMonth[$index] ?? 0,
                    "research_year"=> $ResearchInfosYear[$index] ?? 0,
                    "research_content"=> $ResearchInfosDescription[$index] ?? 0,


                    "base_info_id"=>$id
                ];


                Research::create($res);

            }


        }
        if($ProjectInfosTitles=$request->ProjectInfosTitle){
            $ProjectInfosTitlew=$request->ProjectInfosTitle;
            $ProjectInfosFor=$request->ProjectInfosFor;
            $ProjectInfosLinkUrl= $request->ProjectInfosLinkUrl;
            $ProjectInfosMonth= $request->ProjectInfosMonth;
            $ProjectInfosYear= $request->ProjectInfosYear;
            $ProjectInfosDescription= $request->ProjectInfosDescription;






            foreach ($ProjectInfosTitles as $index => $ProjectInfosTitle){



                $project = [

                    "project_title"=> $ProjectInfosTitlew[$index] ?? 0,
                    "project_employee"=> $ProjectInfosFor[$index] ?? 0,
                    "project_link"=>$ProjectInfosLinkUrl[$index] ?? 0,
                    "project_month"=> $ProjectInfosMonth[$index] ?? 0,
                    "project_year"=> $ProjectInfosYear[$index] ?? 0,
                    "project_content"=> $ProjectInfosDescription[$index] ?? 0,


                    "base_info_id"=>$id
                ];


                Sample::create($project);

            }


        }
        if($RecruitmentInfoJobApplications=$request->RecruitmentInfoJobApplication){
            $RecruitmentInfoJobCategoryId=$request->RecruitmentInfoJobCategoryId;
            $RecruitmentInfoJobTitle=$request->RecruitmentInfoJobTitle;
            $RecruitmentInfoEmploymentType= $request->RecruitmentInfoEmploymentType;
            $RecruitmentInfoMinAverageSalary= $request->RecruitmentInfoMinAverageSalary;
            $states= $request->states;

                $city="";
                foreach ($states as $state){
                    $city.=$state.",";
                }


                $job = [

                    "job_group"=> $RecruitmentInfoJobCategoryId?? 0,
                    "job_title"=> $RecruitmentInfoJobTitle ?? 0,
                    "job_how"=>$RecruitmentInfoEmploymentType ?? 0,
                    "job_income"=> $RecruitmentInfoMinAverageSalary ?? 0,
                    "job_city"=> $city ?? 0,

                    "base_info_id"=>$id
                ];


                Job::create($job);




        }


        if($RecruitmentInfoImmigrationForStudy=$request->RecruitmentInfoImmigrationForStudy){

            $RecruitmentInfoEducationLevel=$request->RecruitmentInfoEducationLevel;
            $RecruitmentInfoFieldOfStudy= $request->RecruitmentInfoFieldOfStudy;

            $states1=$request->states1;

            $country="";
            foreach ($states1 as $state1){
                $country.=$state1.",";
            }


            $migrate_st = [

                "migration_country"=> $country?? 0,
                "migration_magta"=> $RecruitmentInfoEducationLevel ?? 0,
                "migration_major"=>$RecruitmentInfoFieldOfStudy ?? 0,


                "base_info_id"=>$id
            ];


            Migration_student::create($migrate_st);




        }


        if($RecruitmentInfoImmigrationForWork=$request->RecruitmentInfoImmigrationForWork){



            $states2=$request->states2;

            $country1="";
            foreach ($states2 as $state2){
                $country1.=$state2.",";
            }


            $migrate_job = [

                "mijob_country"=> $country1?? 0,



                "base_info_id"=>$id
            ];


            MigrationJob::create($migrate_job);




        }
        if($RecruitmentInfoContinueEducation=$request->RecruitmentInfoContinueEducation){






            $edu_go = [

                "edu_uni"=> $request->RecruitmentInfoInstitudeType?? 0,



                "base_info_id"=>$id
            ];


            EducationGo::create($edu_go);




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
