<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>{{$resume->name}} {{$resume->last_name}} Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url({{asset("pdf/2nd/noise.jpg")}}); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>

<body>

    <div id="page-wrap">

        <img width="200" height="200" src="{{asset("storage/images/$resume->image")}}" alt="{{$resume->name}} {{$resume->last_name}}" id="pic" />

        <div id="contact-info" class="vcard">

            <!-- Microformats! -->

            <h1 class="fn">{{$resume->name}} {{$resume->last_name}}</h1>

            <p>
                Cell: <span class="tel">{{$resume->mobile}}</span><br />
                Email: <a class="email" href="mailto:{{$resume->email}}">{{$resume->email}}</a>
            </p>
        </div>

        <div id="objective">
            <p>
      {{$resume->about}}
            </p>
        </div>

        <div class="clear"></div>

        <dl>
            <dd class="clear"></dd>

            <dt>Education</dt>
            <dd>
                @foreach($education as $edu)
                <h2>{{$edu->uni_name}}</h2>
                <p><strong>Major:</strong>{{$edu->uni_major}}<br />
                   <strong>City:</strong> {{$edu->uni_city}}</p>
                @endforeach
            </dd>

            <dd class="clear"></dd>

            <dt>Skills</dt>
            <dd>
                <div style="float: left; margin: 10px;">
                <h2>Languages</h2>
                @foreach($skills_language as $language)
                <p><b>{{$language->language_name}}</b>
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


                </p>
                @endforeach
                    <h2>Honors</h2>
                    @foreach($skills_honors as $honor)
                        <p><b>{{$honor->honor_title}}</b>
                            <br>


                            {{$honor->honor_month}}&nbsp;{{$honor->honor_year}}

                        </p>
                    @endforeach
                </div>
                <div style="float: right;">
                    <h2>Working Experiences</h2>
                    @foreach($skills_exp as $work_exp)
                        <p><b>{{$work_exp->ex_name}}</b>
                            <br>
                            @for($i=1;$i<=$work_exp->ex_state;$i++)
                                &#9733;
                            @endfor


                        </p>
                    @endforeach

                    <h2>Certificates</h2>
                    @foreach($skills_degrees as $degree)
                        <p><b>

                                @if($degree->degree_type==1)
                                    Language
                                @elseif($degree->degree_type==2)
                                    SoftWare
                                @else
                                    Other
                                @endif

                            </b>


                            <br>
                            {{$degree->degree_title}} From
                            &nbsp;{{$degree->degree_uni}}&nbsp;{{$degree->degree_month}}&nbsp;{{$degree->degree_year}}


                        </p>
                    @endforeach
                </div>










            </dd>

            <dd class="clear"></dd>

            <dt>Experience</dt>
            <dd>
                @foreach($work_ex as $work)
                <h2>{{$work->work_title}} <span>in {{$work->work_center}} {{$work->work_center_title}} - {{$work->work_startm}} {{$work->work_starty}} - {{$work->work_endm}} {{$work->work_endy}}</span></h2>
                <ul>
                    <li>{{$work->work_semat}}</li>
                    <li>{{$work->work_city}}</li>
                    <li>{{$work->work_how}}</li>

                </ul>

                @endforeach
            </dd>

            <dd class="clear"></dd>

            <dt>Works</dt>
            @foreach($samples as $sample)
            <dd><div style="margin:20px">
                    <a href="http://{{$sample->project_link}}" title="{{$sample->project_title}}">{{$sample->project_title}}</a>
                    <br>
                    Description:  {{$sample->project_content}}
                    <br>
                    Web Site:  {{$sample->project_link}}
                </div></dd>
            @endforeach

            <dd class="clear"></dd>

            <dt>Researches</dt>
            @foreach($researchs as $research)
            <dd><div style="margin:20px">
                    <a href="http://{{$research->research_link}}" title="{{$research->research_title}}">{{$research->research_title}}</a>
                    <br>
                    Publisher:{{$research->research_author}}
                    <br>
                    Description: {{$research->research_content}}
                    <br>
                    Web Site:  {{$research->research_link}}
                </div></dd>
            @endforeach
            <dd class="clear"></dd>
        </dl>

        <div class="clear"></div>

    </div>

</body>

</html>
