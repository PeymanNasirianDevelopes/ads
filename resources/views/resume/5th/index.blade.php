<!DOCTYPE html>
<html>
<head>
<title>{{$resume->name}} {{$resume->last_name}} Resume</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8">

<link type="text/css" rel="stylesheet" href="{{asset("pdf/5th/style.css")}}">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
            <img width="200" height="200" src="{{asset("storage/images/$resume->image")}}" alt="{{$resume->name}} {{$resume->last_name}}" itemprop="image" />
		</div>

		<div id="name">
			<h1 class="quickFade delayTwo">{{$resume->name}} {{$resume->last_name}}</h1>
			<h2 class="quickFade delayThree">{{$resume->about}}</h2>
		</div>

		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="mailto:{{$resume->email}}" target="_blank">{{$resume->email}}</a></li>
				<li>w: <a href="http://{{$resume->website}}">{{$resume->website}}</a></li>
				<li>m: {{$resume->mobile}}</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div id="mainArea" class="quickFade delayFive">



		<section>
			<div class="sectionTitle">
				<h1>Works</h1>
			</div>

			<div class="sectionContent">
                @foreach($samples as $sample)
				<article>
					<h2>   <a href="http://{{$sample->project_link}}" title="{{$sample->project_title}}">{{$sample->project_title}}</a></h2>
					<p >              <br>
                    Description:  {{$sample->project_content}}
                    <br>
                    Web Site:  {{$sample->project_link}}</p>

				</article>
                @endforeach

			</div>
			<div class="clear"></div>
		</section>


        <section>
            <div class="sectionTitle">
                <h1>Experience</h1>
            </div>

            <div class="sectionContent">
                @foreach($work_ex as $work)
                    <article>
                        @if($work->in_work)
                            <h3>{{$work->work_startm}} {{$work->work_starty}} - in work</h3>
                        @else
                            <h3>{{$work->work_startm}} {{$work->work_starty}} - {{$work->work_endm}} {{$work->work_endy}}</h3>
                        @endif
                        <p>{{$work->work_center}} {{$work->work_center_title}} <br />
                            <em>{{$work->work_title}}</em></p>

                    </article>
                @endforeach

            </div>
            <div class="clear"></div>
        </section>

		<section>
			<div class="sectionTitle">
				<h1> Skills</h1>
			</div>

			<div class="sectionContent">
                <h2>Languages</h2>
				<ul class="keySkills">
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


            <div class="sectionContent">
                <h2>Working Experiences</h2>
                <ul class="keySkills">
                    @foreach($skills_exp as $work_exp)
                        <li>{{$work_exp->ex_name}}
                            @for($i=1;$i<=$work_exp->ex_state;$i++)
                                &#9733;
                            @endfor
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="sectionContent">
                <h2>Certificates</h2>
                <ul class="keySkills">
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

            <div class="sectionContent">
                <h2>Honors</h2>
                <ul class="keySkills">
                    @foreach($skills_honors as $honor)

                        <li>
                            {{$honor->honor_title}}

                            {{$honor->honor_month}}&nbsp;{{$honor->honor_year}}
                        </li>
                    @endforeach
                </ul>
            </div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>

			<div class="sectionContent">

                @foreach($education as $edu)
				<article>
					<h2>{{$edu->uni_type}}</h2>
					<p class="subDetails">{{$edu->uni_name}}</p>
					<p>{{$edu->uni_gerayesh}}</p>
                    @if($edu->uni_instudy)
                        <h5>{{$edu->uni_inyear}} - in study</h5>
                    @else
                        <h5>{{$edu->uni_inyear}} - {{$edu->uni_outyear}}</h5>
                    @endif
				</article>
                    <br>
                    <br>

                @endforeach
			</div>
			<div class="clear"></div>
		</section>


        <section>
            <div class="sectionTitle">
                <h1>Researches</h1>
            </div>

            <div class="sectionContent">
                @foreach($researchs as $research)
                    <article>

                        <p>  <a href="http://{{$research->research_link}}" title="{{$research->research_title}}">{{$research->research_title}}</a> <br />
                            <em> Publisher:{{$research->research_author}}</em>


                            <br>
                            Description: {{$research->research_content}}
                            <br>
                            Web Site:  {{$research->research_link}}</p>

                    </article>
                @endforeach

            </div>
            <div class="clear"></div>
        </section>

	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
