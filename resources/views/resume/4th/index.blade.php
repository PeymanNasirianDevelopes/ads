<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{{$resume->name}} {{$resume->last_name}} Resume</title>
  <meta name="author" content="{{$resume->name}} {{$resume->last_name}} Resume">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Simonetta:400,900|Balthazar">
  <link rel="stylesheet" type="text/css" href="{{asset("pdf/4th/styles.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("pdf/4th/responsive.css")}}">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
</head>

<body>
	<div style="margin: 0 auto;" id="w" itemscope itemtype="http://schema.org/Person">
		<header class="clearfix">
			<div id="info">
				<h1><span itemprop="name">{{$resume->name}} {{$resume->last_name}} Resume</span></h1>
				<h3><span itemprop="jobTitle">{{$resume->about}}</span></h3>
				<small itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                    <small>Email:<a href="mailto:{{$resume->email}}">{{$resume->email}}</a></small>
				</small>

                <small>Phone : {{$resume->mobile}}</small>

				<small><a href="http://{{$resume->website}}" itemprop="url">My WebSite</a> </small>
			</div>

			<div id="photo">
				<img width="200" height="200" src="{{asset("storage/images/$resume->image")}}" alt="{{$resume->name}} {{$resume->last_name}}" itemprop="image" />
			</div>
		</header>



		<section id="skills" class="clearfix" itemscope itemtype="http://schema.org/ItemList">
			<h2 itemprop="name">Skillset</h2>
			<section id="skills-left">
				<h4 itemprop="about">Language</h4>
				<ul>
                    @foreach($skills_language as $language)
                        <li>{{$language->language_name}}
                            <br>
                            R :
                            @for($i=1;$i<=$language->language_read;$i++)
                                &#9733;
                            @endfor
                            <br>
                            W:
                            @for($i=1;$i<=$language->language_write;$i++)
                                &#9733;
                            @endfor
                            <br>
                            L:
                            @for($i=1;$i<=$language->language_listen;$i++)
                                &#9733;
                            @endfor
                            <br>
                            S:
                            @for($i=1;$i<=$language->language_speak;$i++)
                                &#9733;
                            @endfor
                        </li>
                    @endforeach

				</ul>
			</section>

			<section id="skills-right">
				<h4 itemprop="about">Certificates</h4>
				<ul>
                    @foreach($skills_degrees as $degree)

                        <li>
                            @if($degree->degree_type==1)
                                <strong>Language</strong>
                            @elseif($degree->degree_type==2)
                                <strong>SoftWare</strong>
                            @else
                                <strong>    Other</strong>
                            @endif
                            <br>
                            {{$degree->degree_title}} From
                            &nbsp;{{$degree->degree_uni}}&nbsp;{{$degree->degree_month}}&nbsp;{{$degree->degree_year}}
                        </li>
                    @endforeach
				</ul>
			</section>
            <section id="skills-left">
                <h4 itemprop="about">Work Experiences</h4>
                <ul>
                    @foreach($skills_exp as $work_exp)
                        <li>{{$work_exp->ex_name}}
                            @for($i=1;$i<=$work_exp->ex_state;$i++)
                                &#9733;
                            @endfor
                        </li>
                    @endforeach

                </ul>
            </section>

            <section id="skills-right">
                <h4 itemprop="about">Honors</h4>
                <ul>
                    @foreach($skills_honors as $honor)

                        <li>
                            {{$honor->honor_title}}

                            {{$honor->honor_month}}&nbsp;{{$honor->honor_year}}
                        </li>
                    @endforeach
                </ul>
            </section>
		</section>

		<section id="education">
			<h2>Past Education</h2>

			<p>           @foreach($education as $edu)


                        @if($edu->uni_instudy)
                            <small>{{$edu->uni_inyear}} - in study</small>
                        @else
                            <small>{{$edu->uni_inyear}} - {{$edu->uni_outyear}}</small>
            @endif
          {{$edu->uni_name}}
                <span>{{$edu->uni_city}}</span>
                <em>{{$edu->uni_major}}</em>


    @endforeach
    </p>
		</section>

		<section id="experience">
			<h2>Works</h2>
            @foreach($samples as $sample)
			<p>  <a href="http://{{$sample->project_link}}" title="{{$sample->project_title}}">{{$sample->project_title}}</a>
                <br>
                Description:  {{$sample->project_content}}
                <br>
                Web Site:  {{$sample->project_link}}
            </p>

            @endforeach
		</section>

        <section id="experience">
            <h2>Experiences</h2>
            @foreach($work_ex as $work)
                <p>              @if($work->in_work)
                    <h3>{{$work->work_startm}} {{$work->work_starty}} - in work</h3>
                @else
                    <h3>{{$work->work_startm}} {{$work->work_starty}} - {{$work->work_endm}} {{$work->work_endy}}</h3>
                @endif
                <h3>{{$work->work_center}} {{$work->work_center_title}} <br />
                    <em>{{$work->work_title}}</em></h3>
                </p>

            @endforeach
        </section>

		<section id="articles">
			<h2>Researches</h2>

            @foreach($researchs as $research)
			<p itemscope itemtype="http://schema.org/Article">
			<span itemprop="name">
		 <a href="http://{{$research->research_link}}" title="{{$research->research_title}}">{{$research->research_title}}</a></span>
                <br>
                Publisher:{{$research->research_author}}
                <br>
                Description: {{$research->research_content}}
                <br>
                Web Site:  {{$research->research_link}}</p>

            @endforeach
        </section>

	</div>
</body>
</html>
