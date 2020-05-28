
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>رزومه ساز</title>
    <meta name="description" content="resume for all"/>


        <link rel="stylesheet" href="{{asset("css/material.css")}}">
        <noscript><link rel="stylesheet" href="{{asset("css/material.css")}}"></noscript>
        <link href="{{asset("css/ghpages-.css")}}" rel="stylesheet" />
        <link href="{{asset("css/font-awe.css")}}" rel="stylesheet" />
        <link href="{{asset("css/00bootst.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/01font-a.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/00select.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/03zcss00.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/04style0.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/0style00.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/0toastr0.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/jquery-u.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/jquery-v.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset("css/materiam.css")}}" rel="stylesheet" type="text/css"/>

        <link rel="apple-touch-icon" sizes="180x180" href="http://cvbesaz.com/public/style_barbiq/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="index_files/favicon-.png">
        <link rel="icon" type="image/png" sizes="16x16" href="index_files/favicon0.png">
        <link rel="manifest" href="http://cvbesaz.com/public/style_barbiq/images/site.webmanifest">
        <link rel="mask-icon" href="http://cvbesaz.com/public/style_barbiq/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!--@RenderSection("Canonical", false)-->






        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>




<link href="{{asset("css/selectiz.css")}}" rel="stylesheet" />

<div class="container">
    <br />
    <div class="row">
        <div class="cv-lang-actionbar center">
            <a class="button button--blue no-pointer"  id="createnew" href="">ساخت رزومه جدید</a>
            <!--            <a class="button button--blue button--hollow" href="http://cvbesaz.com/builder/en">رزومه انگلیسی</a>-->
            <!--            @*<a id="guideTour" class="button button--blue left" href="#!">راهنما</a>*@-->
            <!--            @*<div class="progress">
                                <div class="determinate" id="score" style="width: 0%"></div>
                            </div>*@-->
            <div class="progress-resume center">
                <h4>درصد تکمیل رزومه شما</h4>
                <div id="circle">
                    <strong></strong>
                </div>
            <!--                @ if (User.Identity.IsAuthenticated)
                {
             ?   if iduser is set this show else hidden=>with var-->

                    <!--                <a href="/Resume/fa/aa039611-aab7-465c-bf9b-7a6d7a0bf7fa" target="_blank">نمونه</a>-->
            </div>
        </div>

        <div class="col-sm-12">
            <form action="{{url("resume/create")}}" id="builderForm" method="post" enctype="multipart/form-data">
                <!--                <ul class="stepper parallel horizontal" dir="@(culture == "fa" ? "rtl" : "ltr")">-->
                <ul class="stepper parallel horizontal" dir="rtl">
@csrf
    @include("parts.base_info")
    @include("parts.education")
    @include("parts.work")
    @include("parts.skills")
    @include("parts.projects")
    @include("parts.end")


                </ul>



            </form>



        </div>

    </div>


</div>


<div class="navigation-form">

</div>

<style>

    .autocomplete-suggestions {
        border: 1px solid #999;
        background: #FFF;
        overflow: auto;
        margin-top: -8px;
    }

    .autocomplete-suggestion {
        padding: 2px 5px;
        white-space: nowrap;
        overflow: hidden;
    }

    .autocomplete-selected {
        background: #F0F0F0;
    }

    .autocomplete-suggestions strong {
        font-weight: normal;
        color: #3399FF;
    }

    .autocomplete-group {
        padding: 2px 5px;
    }

    .autocomplete-group strong {
        display: block;
        border-bottom: 1px solid #000;
    }
</style>

<div style="clear: both"></div>
<footer class="page-footer">
    <div class="container">
        <div class="col s12">
            <ul class="footer-list">
                <li><a href="">درباره ما</a></li>
                <li><a href="">تماس با ما</a></li>
                <li><a href="">نمونه رزومه</a></li>

            </ul>
        </div>
        <div class="col s12">
            <ul class="footer-list">
                <!--                <li><a href="#!"><i class="fa fa-linkedin icon-fa fa-3x"></i></a></li>
                                <li><a href="#!"><i class="fa fa-google-plus icon-fa fa-3x"></i></a></li>                -->
            </ul>
        </div>

    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row m0">
                <p class="col s12 text-lighten-4 right-align m0 center">

                    CopyRight Tablighha.com
                </p>
            </div>
        </div>
    </div>
</footer>
<p id="back-top">

    <a href="" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>



<script type='text/javascript'>
    var pagesrendered =[];
    var siteurl="{{url("/")}}";
    var pagename=""
    var isuser=""
    var sdvideourl="url";
    var hdvideourl="url";
    var packid=""
    var pdfurl="";
    var lessonidg="";
    var sessionidg="";
    var frvid="0";
    var loadjagoolak=0;
    var needrender=''
    var gsearch='',gmode='-1';
    var ggameid='';
</script><script src="{{asset("js/000jquer.js")}}"></script>
<script src="{{asset("js/00bootst.js")}}"></script>
<script src="{{asset("js/01materi.js")}}"></script>
<script src="{{asset("js/05aos000.js")}}"></script>
<script src="{{asset("js/06zindex.js")}}"></script>
<script src="{{asset("js/07pdfmak.js")}}"></script>
<script src="{{asset("js/07vfs_fo.js")}}"></script>
<script src="{{asset("js/002js000.js")}}"></script>
<script src="{{asset("js/003js000.js")}}"></script>
<script src="{{asset("js/00form00.js")}}"></script>
<script src="{{asset("js/01circle.js")}}"></script>
<script src="{{asset("js/03google.js")}}"></script>
<script src="{{asset("js/03js0000.js")}}"></script>
<script src="{{asset("js/03select.js")}}"></script>
<script src="{{asset("js/04jquery.js")}}"></script>
<script src="{{asset("js/04select.js")}}"></script>
<script src="{{asset("js/05jquery.js")}}"></script>
<script src="{{asset("js/06toastr.js")}}"></script>
<script src="{{asset("js/07zjs000.js")}}"></script>


</body>
</html>

<!-- This document saved from http://cvbesaz.com/builder -->
