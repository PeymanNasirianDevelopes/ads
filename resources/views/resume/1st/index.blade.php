<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8;charset=utf-8" />
<title>{{$resume->name}} {{$resume->last_name}} Resume</title>
<link type="text/css" rel="stylesheet" href="{{asset("pdf/1st/blue0000.css")}}" />
<link type="text/css" rel="stylesheet" href="{{asset("pdf/1st/print000.css")}}" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css")}}" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css")}}" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="{{asset("pdf/1st/jquery-1.js")}}"></script>
<script type="text/javascript" src="{{asset("pdf/1st/jquery00.js")}}"></script>
<script type="text/javascript" src="{{asset("pdf/1st/cufon000.js")}}"></script>
<script type="text/javascript" src="{{asset("pdf/1st/scrollTo.js")}}"></script>
<script type="text/javascript" src="{{asset("pdf/1st/myriad00.js")}}"></script>
<script type="text/javascript" src="{{asset("pdf/1st/jquery01.js")}}"></script>
<script type="text/javascript" src="{{asset("pdf/1st/custom00.js")}}"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="{{asset("storage/images/$resume->image")}}" alt="John Smith" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">{{$resume->name}} {{$resume->last_name}} <br />
              <span>Interactive Designer</span></h1>
            <ul>
              <li class="ad">{{$resume->address}}</li>
              <li class="mail">{{$resume->email}}</li>
              <li class="tel">{{$resume->mobile}}</li>
              <li class="web">{{$resume->website}}</li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="" title="Download .pdf"><img src="{{asset("pdf/1st/icn-save.jpg")}}" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="{{asset("pdf/1st/icn-prin.jpg")}}" alt="" /></a></li>
              <li><a class='north' id="contact" href="http://elemisfreebies.com/ed/demos/resume/contact/index.html" title="Contact Me"><img src="{{asset("pdf/1st/icn-cont.jpg")}}" alt="" /></a></li>
              <li><a class='north' href="" title="Follow me on Twitter"><img src="{{asset("pdf/1st/icn-twit.jpg")}}" alt="" /></a></li>
              <li><a class='north' href="" title="My Facebook Profile"><img src="{{asset("pdf/1st/icn-face.jpg")}}" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
          <p>{{$resume->about}}</p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUCATION</h2>
            @foreach($education as $edu)

          <div class="content">
              @if($edu->uni_instudy)
                  <h3>{{$edu->uni_inyear}} - in study</h3>
                  @else
                  <h3>{{$edu->uni_inyear}} - {{$edu->uni_outyear}}</h3>
              @endif
            <p>{{$edu->uni_name}} <br />
                <span>{{$edu->uni_city}}</span>
              <em>{{$edu->uni_major}}</em></p>
          </div>

            @endforeach
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>EXPERIENCE</h2>

            @foreach($work_ex as $work)

          <div class="content">
              @if($work->in_work)
            <h3>{{$work->work_startm}} {{$work->work_starty}} - in work</h3>
              @else
                  <h3>{{$work->work_startm}} {{$work->work_starty}} - {{$work->work_endm}} {{$work->work_endy}}</h3>
                  @endif
            <p>{{$work->work_center}} {{$work->work_center_title}} <br />
              <em>{{$work->work_title}}</em></p>

          </div>
            @endforeach

        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Languages</h3>
            <ul class="skills">
                @foreach($skills_language as $language)
              <li>{{$language->language_name}}
                  <br>
Reading:
              @for($i=1;$i<=$language->language_read;$i++)
                      &#9733;
                  @endfor
                  <br>
                  Writing:
                  @for($i=1;$i<=$language->language_write;$i++)
                      &#9733;
                  @endfor
                  <br>
                  Listening:
                  @for($i=1;$i<=$language->language_listen;$i++)
                      &#9733;
                  @endfor
                  <br>
                  Speaking:
                  @for($i=1;$i<=$language->language_speak;$i++)
                      &#9733;
                  @endfor
              </li>
                @endforeach
            </ul>
          </div>
          <div class="content">
            <h3>Working Experiences</h3>
            <ul class="skills">
                @foreach($skills_exp as $work_exp)
              <li>{{$work_exp->ex_name}}
                  @for($i=1;$i<=$work_exp->ex_state;$i++)
                      &#9733;
                  @endfor
              </li>
                @endforeach

            </ul>
          </div>

            <div class="content">
                <h3>Certificates</h3>
                <ul class="skills">
                    @foreach($skills_degrees as $degree)

                        <li>
                            @if($degree->degree_type==1)
                                Language
                                @elseif($degree->degree_type==2)
                                SoftWare
                            @else
                                Other
                                @endif
<br>
                            {{$degree->degree_title}} From
                   &nbsp;{{$degree->degree_uni}}&nbsp;{{$degree->degree_month}}&nbsp;{{$degree->degree_year}}
                        </li>
                    @endforeach

                </ul>
            </div>
@foreach($skills_honors as $honor)
@if($honor)
            <div class="content">
                <h3>Honors</h3>
                <ul class="skills">
                    @foreach($skills_honors as $honor)

                        <li>
                            {{$honor->honor_title}}

          {{$degree->degree_month}}&nbsp;{{$degree->degree_year}}
                        </li>
                    @endforeach

                </ul>
            </div>


    @endif
            @endforeach
        </div>



        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
                @foreach($samples as $sample)

        		<li><div style="margin:20px">
                    <a href="http://{{$sample->project_link}}" title="{{$sample->project_title}}">{{$sample->project_title}}</a>
                <br>
                        Description:  {{$sample->project_content}}
                    <br>
                        Web Site:  {{$sample->project_link}}
                    </div>
                </li>

                @endforeach
            </ul>
        </div>

          <div class="entry">
              <h2>Researches</h2>
              <ul class="works">
                  @foreach($researchs as $research)

                      <li><div style="margin:20px">
                              <a href="http://{{$research->research_link}}" title="{{$research->research_title}}">{{$research->research_title}}</a>
                              <br>
                              Publisher:{{$research->research_author}}
                              <br>
                              Description: {{$research->research_content}}
                              <br>
                            Web Site:  {{$research->research_link}}
                          </div>
                      </li>

                  @endforeach
              </ul>
          </div>
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>

<!-- This document saved from http://elemisfreebies.com/ed/demos/resume/ -->
