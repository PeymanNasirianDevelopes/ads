<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>{{$resume->name}} {{$resume->last_name}} Resume</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
	<link rel="stylesheet" type="text/css" href="{{asset("pdf/3rd/resume.css")}}" media="all" />

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">

		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>{{$resume->name}} {{$resume->last_name}}</h1>
					<h2>{{$resume->about}}</h2>
                    <br>
                    <h3>Email:<a href="mailto:{{$resume->email}}">{{$resume->email}}</a></h3>
                    <h3>Phone:{{$resume->mobile}}</h3>
                    <h3>Website:{{$resume->website}}</h3>

				</div>
                <img width="200" height="200" class="portrait" src="{{asset("storage/images/$resume->image")}}" alt="{{$resume->name}} {{$resume->last_name}}" />

				<div class="yui-u">
					<div class="contact-info">
						<h3><a id="pdf" href="#">Download PDF</a></h3>

					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">



					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2>Languages</h2>
                                    @foreach($skills_language as $language)
									<p>Language:{{$language->language_name}}
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
                                        @endfor</p>
                                <br>
                                    @endforeach


								</div>


								<div class="talent">
									<h2>Certificates</h2>
                                    @foreach($skills_degrees as $degree)
									<p>                  @if($degree->degree_type==1)
                                           <b>Language</b>
                                        @elseif($degree->degree_type==2)
                                           <b>SoftWare</b>
                                        @else
                                          <b>Other</b>
                                        @endif
                                        <br>
                                        {{$degree->degree_title}} From
                                        &nbsp;{{$degree->degree_uni}}&nbsp;{{$degree->degree_month}}&nbsp;{{$degree->degree_year}}</p>
                                    @endforeach
								</div>
                            <div class="talent">
                                <h2>Working Experiences</h2>
                                @foreach($skills_exp as $work_exp)
                                    <p>{{$work_exp->ex_name}}
                                        @for($i=1;$i<=$work_exp->ex_state;$i++)
                                            &#9733;
                                        @endfor	 </p>
                                @endforeach
<br>
                                <h2>Honors</h2>
                                @foreach($skills_honors as $honor)
                                    <p> {{$honor->honor_title}}

                                        {{$honor->honor_month}}&nbsp;{{$honor->honor_year}}
                                    </p>
                                @endforeach
                            </div>

						</div>
					</div><!--// .yui-gf -->



					<div class="yui-gf">

						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
                            @foreach($work_ex as $work)
							<div class="job">
								<h2>{{$work->work_title}}</h2>
								<h3>{{$work->work_center}} {{$work->work_center_title}}</h3>
                                @if($work->in_work)
                                    <h4>{{$work->work_startm}} {{$work->work_starty}} - in work</h4>
                                @else
                                    <h4>{{$work->work_startm}} {{$work->work_starty}} - {{$work->work_endm}} {{$work->work_endy}}</h4>
                                @endif
								<p>{{$work->description}} </p>
							</div>
                            @endforeach


						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->



                    <div class="yui-gf">

                        <div class="yui-u first">
                            <h2>Experience</h2>
                        </div><!--// .yui-u -->

                        <div class="yui-u">
                            @foreach($samples as $sample)
                                <div class="job">
                                    <h2> <a href="http://{{$sample->project_link}}" title="{{$sample->project_title}}">{{$sample->project_title}}</a></h2>
                                    <h3>{{$work->work_center}} {{$work->work_center_title}}</h3>

                                    <p>   Description :  {{$sample->project_content}}</p>
                                    <p>    Web Site :  {{$sample->project_link}}</p>
                                </div>
                            @endforeach


                        </div><!--// .yui-u -->
                    </div>

                    <div class="yui-gf">

                        <div class="yui-u first">
                            <h2>Researches</h2>
                        </div><!--// .yui-u -->

                        <div class="yui-u">
                            @foreach($researchs as $research)
                                <div class="job">
                                    <h2>    <a href="http://{{$research->research_link}}" title="{{$research->research_title}}">{{$research->research_title}}</a></h2>
                                    <h3>{{$work->work_center}} {{$work->work_center_title}}</h3>

                                    <p>          <br>
                                        Publisher:{{$research->research_author}}
                                        <br>
                                        Description: {{$research->research_content}}
                                        <br>
                                        Web Site:  {{$research->research_link}}</p>

                                </div>
                            @endforeach


                        </div><!--// .yui-u -->
                    </div>






					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
                        @foreach($education as $edu)
						<div class="yui-u">

							<h2>{{$edu->uni_name}}</h2>
							<h3>{{$edu->uni_city}}  <strong>         @if($edu->uni_instudy)
                                        <h3>{{$edu->uni_inyear}} - in study</h3>
                                    @else
                                        <h3>{{$edu->uni_inyear}} - {{$edu->uni_outyear}}</h3>
                                    @endif</strong> </h3>
						</div>
                        @endforeach
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>{{$resume->name}} {{$resume->last_name}} Resume &mdash; <a href="mailto:{{$resume->email}}">{{$resume->email}}</a> &mdash; {{$resume->mobile}}</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

