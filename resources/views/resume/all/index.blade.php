
<!DOCTYPE html>

<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <link rel="icon" type="image/png" href="{{asset("pdf/6th/favicon-.png")}}">

    <title>{{$resume->name}} {{$resume->last_name}} Resume </title>
    <meta name="description" content="{{$resume->name}} {{$resume->last_name}} Resume | {{$resume->about}}">


    <link href="{{asset("pdf/6th/Fonts000.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("pdf/6th/all00000.css")}}" />

    <link href="{{asset("pdf/6th/DefaultR.css")}}" rel="stylesheet">

    <script src="{{asset("pdf/6th/jquery00.js")}}"></script>
    <script src="{{asset("pdf/6th/less0000.js")}}"></script>
    <link href="{{asset("css/01font-a.css")}}" rel="stylesheet">


    <link href="{{asset("pdf/6th/Template.css")}}" rel="stylesheet" />

    <script>
        var options = {
            templateId: 14,
            newVars: {
                "@main_font_size": "23px",
                "@main_color": "#fbd22b",
                "@base_vertical_space": "15px",
                "@font_name": "IRANSans"
            },
            templateName: "Template11"
        };
    </script>
    <style>
        .lgbox:before {
            height: calc(100% - 268px) !important;
        }
    </style>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

<body>


<style>
    body, html {
        -ms-text-size-adjust: none;
        -moz-text-size-adjust: none;
        -o-text-size-adjust: none;
        -webkit-text-size-adjust: none;
    }
</style>






<script>
    var changeLanguage = function (ele) {
        var value = ele.options[ele.selectedIndex].value;
        var query = '', res, loc = location.href;
        if (loc.indexOf('?') > 0) {
            query = loc.substring(loc.indexOf('?'), loc.length);
        }
        if (loc.indexOf('?') > 0) {
            loc = loc.substring(0, loc.indexOf('?'));
        }
        if (loc.indexOf('/fa') > 0 || loc.indexOf('/Fa') > 0 || loc.indexOf('/FA') > 0) {
            res = loc.replace('/fa', '/' + value);
        }
        else if (loc.indexOf('/en') > 0 || loc.indexOf('/En') > 0 || loc.indexOf('/EN') > 0) {
            res = loc.replace('/en', '/' + value);
        }
        else {
            res = loc + '/' + value;
        }
        location.href = res + query;
    }
</script>
<style>
    select::-ms-expand {
        display: none;
    }

    @media screen and (min-width:0\0) {
        select {
            background: none\9;
            padding: 5px\9;
        }
    }

    @media only screen and (max-width: 576px) {
        select.change-lang {
            display: inline-block;
            width: 70px;
            padding: 5px;
            font-size: 11px;
            margin: 11px 5px;
            border: none;
            height: 34px;
            background: transparent;
            color: black;
            position: absolute;
            z-index: 999;
            border-radius: 4px;
            border: 1px solid #bebebe;
        }
    }
</style>    <link href="{{asset("pdf/6th/credit-h.css")}}" rel="stylesheet" />
<header>
    <a href="https://werbungseiten.de/">
        <img src="{{asset("storage/images/Logowerbung.png")}}" width="125" />
    </a>
</header>




<div class="container">
    <div class="contact-info">
        <div class="name-job-desc">
            <table>
                <tr>
                    <td width="60%">
                        <div class="user-image" style="background-image:url({{asset("storage/images/$resume->image")}})"></div>
                        <h1 style="text-transform: uppercase">{{$resume->name}} {{$resume->last_name}}</h1>
                        <div style="margin: 20px;" class="other-infos not-drag">

                            <div class="basic__birthday">
                                <span>Date of Birth:</span>
                                <span>{{$resume->date_birth}}</span>
                            </div>

                            <div class="basic__marital">

                                <span>{{$resume->maried}}</span>
                            </div>


                        </div>
                    </td>
                    <td width="40%">
                        <div dir="ltr" style="text-align: left !important;" class="infoo info" data-section="Contact">
                            <div class="infoo-head">
                                <label>Contacts</label>
                            </div>

                            <div class="contact-item contact__email">
                <span>
                    <i class="fa fa-envelope"></i>
                </span>
                                <span>Email:</span>
                                <span>{{$resume->email}}</span>
                            </div>

                            <div class="contact-item contact__mobile">
                <span>
                    <i class="fa fa-phone"></i>
                </span>
                                <span>Mobile:</span>
                                <span style="unicode-bidi:embed" dir="ltr">{{$resume->mobile}}</span>
                            </div>
                            <div class="contact-item contact__phone">
                <span>
                    <i class="fa fa-home"></i>
                </span>
                                <span>Phone:</span>
                                <span>{{$resume->name}}</span>
                            </div>
                            <div class="contact-item contact__website">
                <span>
                    <i class="fa fa-globe"></i>
                </span>
                                <span>وب سایت:</span>
                                <span>www.cvbuilder.me</span>
                            </div>
                            <div class="contact-item contact__city">
                <span>
                    <i class="fa fa-map-marker"></i>
                </span>
                                <span>Address:</span>
                                <span>{{$resume->address}}</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row" style="height:calc(100% - 175px)">
        <div style="text-align: left !important;" class="lgbox col-wide sortable-cv-items">



            <div class="property-item education__list" data-section="Education">
                <div class="property-item_head">
            <span>
                <i class="fa fa-graduation-cap"></i>
            </span>
                    <label>Education</label>

                </div>
                <div class="property-item_body">
                    <ul class="history multi-line">
                        @foreach($education as $edu)
                            <li>
                                <h2 class="subtitle">{{$edu->uni_major}}</h2>
                                <h3 class="subtitle">{{$edu->uni_gerayesh}}</h3>
                                <h3 class="subtitle">{{$edu->uni_name}}<label>{{$edu->uni_city}}</label></h3>
                                <label class="date">{{$edu->uni_inyear}}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="property-item experience__list" data-section="Experience">
                <div class="property-item_head">
            <span>
                <i class="fa fa-toolbox"></i>
            </span>
                    <label>Experiences</label>
                </div>
                <div class="property-item_body">
                    <ul class="history multi-line">
                        @foreach($work_ex as $work)

                            <li class="66832">
                                <h2 class="subtitle">{{$work->work_title}} </h2>
                                <h3 class="subtitle">
                                    {{$work->work_center}} {{$work->work_center_title}}
                                </h3>
                                <label class="date">Start in: {{$work->work_startm}} {{$work->work_starty}}</label>
                                ------
                                @if($work->in_work)
                                    <label class="date">Working</label>
                                @else

                                    <label class="date">{{$work->work_endm}} {{$work->work_endy}}</label>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="property-item certificate__list" data-section="Certificate">
                <div class="property-item_head">
            <span>
                <i class="fa fa-tasks"></i>
            </span>
                    <label>Certificates</label>

                </div>
                <div class="property-item_body">
                    <ul class="history one-line">

                        @foreach($skills_degrees as $degree)
                            <li>
                                @if($degree->degree_type==1)
                                    Language
                                @elseif($degree->degree_type==2)
                                    SoftWare
                                @else
                                    Other
                                @endif
                                <h2 class="subtitle bidirectional">Title: {{$degree->degree_title}}</h2>
                                <h3 class="subtitle">Istitude: {{$degree->degree_uni}}</h3>
                                <label class="date"><label class="text-date">Date:</label> {{$degree->degree_month}}&nbsp;{{$degree->degree_year}}</label>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>





            <div class="property-item project__list" data-section="Project">
                <div class="property-item_head">
            <span>
                <i class="fa fa-thumb-tack"></i>
            </span>
                    <label>Projects</label>

                </div>
                <div class="property-item_body">
                    <ul class="history one-line">

                        @foreach($samples as $sample)
                            <li>
                                <h2 class="subtitle bidirectional">
                                    {{$sample->project_title}}</h2>
                                <h3 class="subtitle">Employer: {{$sample->project_employee}} </h3>
                                <label class="date"><label class="text-date">Date:</label>{{$sample->project_month}} {{$sample->project_year}}</label>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>













        </div>
        <div  style="text-align: left !important;" class="smbox col-narrow sortable-cv-items">


            <div class="property-item skill__list" data-section="Skill">
                <div class="property-item_head">
            <span>
                <i class="fa fa-lightbulb"></i>
            </span>
                    <label>Skills</label>
                </div>
                <div class="property-item_body">
                    <div class="bar-progress item-row w0">
                        <ul class="history">

                            @foreach($skills_exp as $xp)
                                @if(($xp->ex_name)!="0")
                                    <li>
                            <span>
                                <label>{{$xp->ex_name}}</label>
                                    <label class="grade">
                                        <small>@php
                                                $exstate=($xp->ex_state)*20;
                    echo $exstate
                                            @endphp%</small>

                                    </label>
                            </span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>


            <div class="property-item language__list" data-section="Language">
                <div class="property-item_head">
            <span>
                <i class="fa fa-globe-americas"></i>
            </span>
                    <label>Languages</label>
                </div>
                <div class="property-item_body">
                    <div class="item-row w4">
                        <ul class="history">



                            @foreach($skills_language as $language)
                                @if(($language->language_name)!="0")
                                    <li>
                                        <h2 class="subtitle language-item">{{$language->language_name}}</h2>
                                        <span>
                                    <label>Reading</label>
                                    <label class="grade">
                                          @for($i=1;$i<=5;$i++)
                                            @if($language->language_read<$i)
                                                <i><span id="freelancer" class="far fa-star"></span></i>
                                            @else
                                                <i  class=tik><span id="freelancer" class="far fa-star"></span></i>
                                            @endif
                                        @endfor

                                    </label>
                                </span>
                                        <span>
                                    <label>Writing</label>
                                    <label class="grade">
                                          @for($i=1;$i<=5;$i++)
                                            @if($language->language_write<$i)
                                                <i><span id="freelancer" class="far fa-star"></span></i>
                                            @else
                                                <i  class=tik><span id="freelancer" class="far fa-star"></span></i>
                                            @endif
                                        @endfor

                                    </label>
                                </span>
                                        <span>
                                    <label>Listening</label>
                                    <label class="grade">
                                          @for($i=1;$i<=5;$i++)
                                            @if($language->language_listen<$i)
                                                <i><span id="freelancer" class="far fa-star"></span></i>
                                            @else
                                                <i  class=tik><span id="freelancer" class="far fa-star"></span></i>
                                            @endif
                                        @endfor

                                    </label>
                                </span>
                                        <span>
                                    <label>Speaking</label>
                                    <label class="grade">
                                          @for($i=1;$i<=5;$i++)
                                            @if($language->language_speak<$i)
                                                <i><span id="freelancer" class="far fa-star"></span></i>
                                            @else
                                                <i  class=tik><span id="freelancer" class="far fa-star"></span></i>
                                            @endif
                                        @endfor

                                    </label>
                                </span>
                                    </li>
                                @endif
                            @endforeach

                        </ul>

                    </div>

                </div>
            </div>





        </div>
    </div>
</div>


<style>
    .click-to-build-cv > div {
        font-weight: bold;
        font-size: 18px;
        margin: 5px 0 10px;
    }
</style>

<script>
    $('a.call-to-action').click(function (event) {
        event.preventDefault();
        var urlParams = new URLSearchParams(window.location.search);
        var template = urlParams.get('template');
        if (template) {
            setCookie('PreviewTemplate', template);
        }
        document.location = '/builder';
    });
</script>
<script>
    setTimeout(function () {
        document.querySelector('.click-to-build-cv').style.display = 'block';
    }, 5000);
</script>

<link href="{{asset("pdf/6th/gmodal00.css")}}" rel="stylesheet" />
<style>
    ul.gModal-features {
        width: 75%;
        margin-right: auto;
        margin-left: auto;
    }

    @media only screen and (max-width: 576px) {
        ul.gModal-features {
            width: 90%;
        }
    }
</style>

<script>
    var features = {
        hasMouseout: true,
        hasScroll: false,
        hasTimeout: true,
        scrollItem: '',
        timoeout: 8000};
</script>
<script src="{{asset("pdf/6th/gmodal00.js")}}" type="text/javascript"></script>

<style>
    .page-watermark {
        left: calc(50% - 350px);
        display: none;
        position: absolute;
        font-size: 96px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        opacity: 0.5;
        font-weight: bold;
        color: #969696;
        z-index: 0;
    }
</style>

<script>
    var fullHeight = function (measure) {
        var height = document.querySelector(".container").offsetHeight;
        var colwide = document.querySelector(".col-wide");
        var colnarrow = document.querySelector(".col-narrow");
        var oneColLayout = document.querySelector(".one-col-layout");
        var head = document.querySelector(".contact-info");

        if (oneColLayout != null) {
            height = oneColLayout.offsetHeight;
        }
        else {
            if (measure) {
                var colNarrowMeasuredHeight = measureHeight('.col-narrow');
                var colWideMeasuredHeight = measureHeight('.col-wide');

                if (colWideMeasuredHeight > colNarrowMeasuredHeight) {
                    height = colWideMeasuredHeight;
                } else {
                    height = colNarrowMeasuredHeight;
                }
            }
            else {
                if (colwide.offsetHeight > colnarrow.offsetHeight) {
                    height = colwide.offsetHeight;
                } else {
                    height = colnarrow.offsetHeight;
                }

            }
        }

        if (head != null) height += head.offsetHeight;

        var height_mm = height / 3.7795275591 - 5;
        //var height_mm = (height * 25.4) / 96 - 0;

        height_mm = Math.ceil(height_mm / 297) * 297 - 1;
        document.querySelector(".container").style.height = height_mm + "mm";

        $('div.page-indicator,div.page-watermark').remove();
        var pages = Math.ceil(height_mm / 297);
        for (var i = 0; i < pages; i++) {
            var top = i * 297;
            $('<div data-page="' + (i + 1) + '" class="page-indicator"></div>').appendTo('.container').css({ top: top + 'mm' });
        }

    };
    function measureHeight(selector) {
        var height = 0;
        $(selector).children().each(function () {
            height += $(this).height() + parseInt($(this).css('paddingBottom')) + parseInt($(this).css('paddingTop'));
        })
        return height;
    }
</script>
<script>
    function webHeightAdjust() {
        var height = document.querySelector(".container").offsetHeight;
        var colwide = document.querySelector(".col-wide");
        var colnarrow = document.querySelector(".col-narrow");
        var oneColLayout = document.querySelector(".one-col-layout");
        var head = document.querySelector(".contact-info");
        if (oneColLayout != null) {
            height = oneColLayout.offsetHeight;
        }
        else {
            if (colwide.offsetHeight > colnarrow.offsetHeight) {
                height = colwide.offsetHeight;
            } else {
                height = colnarrow.offsetHeight;
            }
        }
        if (head != null) height += head.offsetHeight;
        var height_mm = height * 25.4 / 96 + 15;
        document.querySelector(".container").style.height = height_mm + "mm";
    }
</script>


<div style="font-size: 13px !important; color: #0b0b0b" class="footer">
    Created with <i class="fa fa-heart" aria-hidden="true"></i> By
    <a href="https://werbungseiten.de/">
        Werbungseiten.de
    </a>
</div>
<style>
    .container {
        box-shadow: 0 0 6px -2px #000;
        margin: 0 auto;
        margin-top: 40px;
        margin-bottom: 50px;
        min-height: 297mm;
    }
</style>
<script src="{{asset("pdf/6th/template.js")}}"></script>
<script>
    window.onload = function () {
        setTimeout(function () {
            webHeightAdjust();
        }, 800);
    }
</script>
<script async>
    var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
    if (!mobile) {
        (function (s, u, m, o, j, v) { j = u.createElement(m); v = u.getElementsByTagName(m)[0]; j.async = 1; j.src = o; j.dataset.sumoSiteId = 'e2a3c8eb01dd914a33cb2632bc2f1bed8daa48f8f04a3d24057d538b082b200c'; v.parentNode.insertBefore(j, v) })(window, document, 'script', '//load.sumo.com/');
    }
</script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{asset("pdf/6th/js000000.js")}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-101108363-3');
</script>


</body>
</html>

