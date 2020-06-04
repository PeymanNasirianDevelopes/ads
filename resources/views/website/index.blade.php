<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- <base href="/">-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Template Basic Images Start-->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="{{asset("storage/images/Logowerbung.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("storage/images/Logowerbung.png")}}">
    <!-- Template Basic Images End-->
    <!-- Custom Browsers Color Start-->
    <meta name="theme-color" content="#000">
    <!-- Fonts-->
    <link href="{{asset("css/website/css00000.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/website/jquery00.css")}}">
    <link rel="stylesheet" href="{{asset("css/website/main0000.css")}}">
    <title>{{$resume->name}} {{$resume->last_name}}</title>
    <meta name="description" content="">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
  <body>
    <div class="alx-scroll-wrap">
      <!--Content STARTs-->
      <div id="alx-preloader">
        <div class="cssload-thecube">
          <div class="cssload-cube cssload-c1"></div>
          <div class="cssload-cube cssload-c2"></div>
          <div class="cssload-cube cssload-c4"></div>
          <div class="cssload-cube cssload-c3"></div>
        </div>
      </div>
      <header>
        <div class="alx-logo"><a target="_blank" href="https://werbungseiten.de/"><img class="alx-logo__dark" src="{{asset("storage/images/Logowerbung.png")}}" alt="logo"><img class="alx-logo__white" src="{{asset("storage/images/Logowerbung.png")}}" alt="Logowerbung"></a></div>
        <div class="alx-right-wrap">
          <div class="alx-social-links">
            <ul>
                @foreach($social_links  as $link)
              <li><a target="_blank" href="http://{{$link->address}}"><i class="fa @if($link->name=="instagram") fa-instagram @elseif($link->name=="twitter") fa-twitter @elseif($link->name=="facebook") fa-facebook @elseif($link->name=="linkedin") fa-linkedin @elseif($link->name="telegram") fa-telegram @endif" ></i></a></li>
         @endforeach
            </ul>
          </div><a class="alx-burger" href=""><span></span></a>
        </div>
      </header>
      <div id="alx-pagepiling">
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bgr.jpg")}}" data-tooltipsection="First screen">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="alx-heading alx-text-center">
                  <h1 class="alx-heading__title" style=" text-transform: uppercase;">{{$resume->name}} {{$resume->last_name}}</h1>
                  <div class="alx-heading__pretitle">{{$resume->expert}}</div>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>

                </div>

              </div>
              <div class="col-lg-6 offset-lg-1"></div>
            </div>
          </div>
          <canvas class="alx-canvas" id="pretty-bg"></canvas>
        </section>
        <section class="alx-vertical-middle alx-dark-section pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bgd1.jpg")}}">
          <div class="alx-vertical-heading"><i class="fa fa-question-circle-o"></i>Who i’m</div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-12">
                <div class="alx-person-image alx-dots-style"><img class="img-responsive alx-tilt" src="{{asset("storage/images/$resume->image")}}" alt="">
                  <h3 class="alx-person-image__title alx-text-center">{{$resume->expert_year}} Years of Experience</h3>
                </div>
              </div>
              <div class="col-lg-6 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">About Me</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">{{$resume->about}}</div>
                  <div class="alx-heading__pretitle alx-style" data-style="margin-top: 20px"><i class="fa fa-envelope"></i>{{$resume->email}}</div>
                </div><a class="alx-btn alx-btn-primary" href="#page8">Become my client</a>
              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bg2.jpg")}}" data-tooltipsection="Second screen">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <div class="alx-heading__pretitle"><i class="fa fa-diamond"></i>My Specializations</div>
                  <h2 class="alx-heading__title">Demands List</h2>
                  <div class="alx-heading__zigzag">

                  </div>
                  <div class="alx-heading__description" style="text-transform: capitalize">This is Some of My Requests for job and education </div>
                </div><a class="alx-btn" href="#page8">Start a project</a>
              </div>
              <div class="col-lg-6 offset-lg-1">
                <div class="alx-services alx-dots-style" data-interval="7000">
                  <div class="alx-services__container">


@if($job)
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-dollar"></i>
                          <h4 class="alx-services__item__title">Looking for Job</h4>
                        </div>
                        <div class="alx-services__item__description" style="text-transform: capitalize">Im looking for a job in abroad with good a salery </div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-dollar"></i></div>
                      </div>
                    </div>

@endif

    @if($educationgo)
        <div class="alx-services__item">
            <div class="alx-services__item__wrap">
                <div class="alx-services__item__main"><i class="fa fa-university"></i>
                    <h4 class="alx-services__item__title">Continue Education</h4>
                </div>
                <div class="alx-services__item__description" style="text-transform: capitalize">i want to continue my major and become Graduated </div>
                <div class="alx-services__item__opacityicon"><i class="fa fa-university"></i></div>
            </div>
        </div>

    @endif
    @if($migration_student)
        <div class="alx-services__item">
            <div class="alx-services__item__wrap">
                <div class="alx-services__item__main"><i class="fa fa-globe"></i>
                    <h4 class="alx-services__item__title">study in Abroad</h4>
                </div>
                <div class="alx-services__item__description" style="text-transform: capitalize">i want to Immigration to study in abroad </div>
                <div class="alx-services__item__opacityicon"><i class="fa fa-globe"></i></div>
            </div>
        </div>

    @endif
    @if($migration_job)
        <div class="alx-services__item">
            <div class="alx-services__item__wrap">
                <div class="alx-services__item__main"><i class="fa fa-rss"></i>
                    <h4 class="alx-services__item__title">Work on Abroad</h4>
                </div>
                <div class="alx-services__item__description" style="text-transform: capitalize">i want to Immigration to Work on abroad</div>
                <div class="alx-services__item__opacityicon"><i class="fa fa-rss"></i></div>
            </div>
        </div>

    @endif


                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-dark-section alx-bg-img" data-image="{{asset("storage/images/bgd3.jpg")}}">
          <div class="alx-vertical-heading"><i class="fa fa-code"></i>What i do</div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">My Skills</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">I do my job well and on time - is unshakable principle is more important than which can not be even money.<br><strong>Just check my portfolio and let's work together!</strong></div>
                </div>
                <div class="alx-skills-list">
                  <ul>
                    <li><span>01</span>Languages</li>
                    <li><span>02</span>Skills</li>


                  </ul>
                </div>
              </div>
              <div class="col-lg-5 offset-lg-2 align-self-center">
<h5 style="color:#CCCCCC">Languages</h5>
                  @foreach($skills_language as $language)
                      @if(($language->language_name)!="0")
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">{{$language->language_name}}</div>

                    <div class="alx-skills__count">@php
                        $languageskill= ($language->language_read + $language->language_write + $language->language_listen + $language->language_speak)*5;
echo $languageskill;

                    @endphp
                    </div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="@php echo $languageskill; @endphp%"></div>
                  </div>
                </div>
                      @endif
                  @endforeach


                  <h5 style="color:#CCCCCC">Skills</h5>
                  @foreach($skills_exp as $xp)
                      @if(($xp->ex_name)!="0")
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">{{$xp->ex_name}}</div>
                    <div class="alx-skills__count">@php
                            $exstate=($xp->ex_state)*20;
echo $exstate
                            @endphp</div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="@php echo $exstate @endphp%"></div>
                  </div>
                </div>
                      @endif
                  @endforeach


              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bgl3.jpg")}}">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="alx-heading">

                  <h2 class="alx-heading__title">Certificates</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                </div>


                  @foreach($skills_degrees as $degree)
                    @if($degree->degree_title!="0")
                <div class="alx-price">
                  <div class="alx-price__title">{{$degree->degree_title}}</div>
                  <div class="alx-price__price"><span>{{$degree->degree_month}}</span>
                    <p>{{$degree->degree_year}}</p>
                  </div>
                </div>
                      @endif
                  @endforeach


              </div>


                <div class="col-lg-5">
                    <div class="alx-heading">

                        <h2 class="alx-heading__title">Achievement</h2>
                        <div class="alx-heading__zigzag">
                            <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                                <g>
                                    <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                                </g>
                            </svg>
                        </div>
                    </div>
                    @foreach($skills_honors as $honor)
                        @if($honor->honor_title!="0")
                    <div class="alx-price">
                        <div class="alx-price__title">{{$honor->honor_title}}</div>
                        <div class="alx-price__price"><span>{{$honor->honor_month}}</span>
                            <p>{{$honor->honor_year}}</p>
                        </div>
                    </div>
                        @endif

                    @endforeach

                </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-dark-section alx-bg-img" data-image="{{asset("storage/images/bgd3.jpg")}}">
          <div class="alx-vertical-heading"><i class="fa fa-rocket"></i>My Latest best Works</div>
          <div class="container">
            <div class="col-lg-12">
              <ul class="alx-portfolio-control alx-portfolio__nav alx-text-left">
                <li class="alx-active" data-filter="*">All</li>
                  @foreach($samples as $sample)
                      @if($sample->project_title!="0")
                <li data-filter=".{{$sample->project_class}}">{{$sample->project_title}}</li>
                      @endif

                  @endforeach
              </ul>
            </div>
            <div class="alx-portfolio-items alx-layout-isotope alx-isotope-gap" data-grid="4">

                @foreach($samples as $sample)
                    @if($sample->project_title!="0")
              <div class="alx-isotope-item {{$sample->project_class}} alx-f-photography">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/$sample->project_picture")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/$sample->project_picture")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>{{$sample->project_title}}</h4>
                    <p>{{$sample->project_link}}</p>
                  </div>
                </div>
              </div>
                    @endif

                @endforeach









            </div>
          </div>
        </section>

        <section class="alx-vertical-middle alx-dark-section pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bgd5.jpg")}}">
          <div class="alx-vertical-heading"><i class="fa fa-heart-o"></i>Expensive</div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">My Clients</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">I'm seize every opportunity to develop long term business partnerships with companies who are leaders in their sector. I'm work closely with our network partners in order to deliver the best solutions available to our clients.</div>
                </div><a class="alx-btn alx-btn-primary" href="#page8">become my client</a>
              </div>
              <div class="col-lg-6 offset-lg-1">
                <div class="alx-services alx-services__partners alx-dots-style" data-interval="7000">
                  <div class="alx-services__container">

                      @foreach($work_ex as $client)
                          @if($client->work_title)
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/$client->work_picture")}}" alt=""></div>
                    </div>
                          @endif
                      @endforeach
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bgl5.jpg")}}">
          <div class="alx-vertical-heading"><i class="fa fa-bell-o"></i>Contact with me</div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">Say Hello</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-phone"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Call Me Anytime</h5>
                    <p>{{$resume->phone}}</p>
                  </div>
                </div>
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-envelope"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Email me</h5><a href="mailto:{{$resume->email}}">{{$resume->email}}</a>
                  </div>
                </div>
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-home"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Address</h5>
                    <p>{{$resume->address}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <form id="my_form" action="{{url("resume/contact_form/create")}}" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="alx-input-group">
                          @csrf
                          <input type="hidden" name="base_info_id" value="{{$resume->id}}" />
                        <input name="name" type="text" required placeholder="Your Name *"><i class="fa fa-user-o"></i>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="alx-input-group">
                        <input name="email" type="email" required placeholder="Your Email *"><i class="fa fa-at"></i>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="alx-input-group">
                        <textarea name="message" rows="6" required placeholder="Message *"></textarea><i class="fa fa-commenting-o"></i>
                      </div>
                      <div class="alx-success-msg hide">
                        <p>Message has been send successfully</p>
                      </div>
                      <input class="alx-btn" type="submit" value="Send a Massage">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="alx-copyright">
        <p><span>©</span>Werbungseiten 2020</p>
      </div>
    </div>
    <!--Content END-->
    <aside class="alx-aside-sidebar alx-aside-sidebar__dark alx-bg-img" id="alx-sidebar" data-image="{{asset("storage/images/bg2_blur.jpg")}}">
      <div class="alx-lang-change">
        <ul>

        </ul>
      </div><a class="alx-burger alx-burger__open" href=""><span></span></a>
      <div class="alx-sidebar-widget">
        <h5>HELLO THERE!</h5><img class="img-responsive" src="{{asset("storage/images/$resume->image")}}" alt="">
        <p>{{$resume->about}}</p>
      </div>
      <hr>
      <div class="alx-sidebar-menu">
        <ul>
          <li><a href="#page1">Home</a></li>
          <li><a href="#page2">About</a></li>
          <li><a href="#page3">Demands</a></li>
          <li><a href="#page4">Skills</a></li>
          <li><a href="#page5">Certificates / Achievements</a></li>
          <li><a href="#page6">Portfolio</a></li>
          <li><a href="#page7">Clients</a></li>
          <li><a href="#page8">Contact</a></li>

        </ul>
      </div>
      <div class="alx-social-links__2">
        <ul>
            @foreach($social_links  as $link)
                <li><a target="_blank" href="http://{{$link->address}}"><i class="fa @if($link->name=="instagram") fa-instagram @elseif($link->name=="twitter") fa-twitter @elseif($link->name=="facebook") fa-facebook @elseif($link->name=="linkedin") fa-linkedin @elseif($link->name="telegram") fa-telegram @endif" ></i></a></li>
            @endforeach
        </ul>
      </div>
      <div class="alx-copyright">© Werbungseiten 2020. All Rights Resevered<br>
          Kopieren Sie alle Informationen von der Website Werbungseiten Strafverfolgung </div>
    </aside>
    <div class="alx-aside-sidebar__overlay"></div>
    <!--Libs-->

    <script src="{{asset("js/website/pace0000.js")}}"></script>
    <script src="{{asset("js/website/jquery00.js")}}"></script>
    <script src="{{asset("js/website/jquery01.js")}}"></script>
    <script src="{{asset("js/website/waypoint.js")}}"></script>
    <script src="{{asset("js/website/match-he.js")}}"></script>
    <script src="{{asset("js/website/jquery02.js")}}"></script>
    <script src="{{asset("js/website/imageslo.js")}}"></script>
    <script src="{{asset("js/website/isotope0.js")}}"></script>
    <script src="{{asset("js/website/animate-.js")}}"></script>
    <script src="{{asset("js/website/tilt0000.js")}}"></script>
    <script src="{{asset("js/website/slick000.js")}}"></script>
    <script src="{{asset("js/website/particle.js")}}"></script>
    <script src="{{asset("js/website/readmore.js")}}"></script>
    <script src="{{asset("js/website/fluidWav.js")}}"></script>
    <!--Use scripts-->
    <script src="{{asset("js/website/common00.js")}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        documentRoot = '{{url('/')}}';
        $("#my_form").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = new FormData(this); //Creates new FormData object
            $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
            }).done(function(response){ //
                swal("Thank You!", "Your Message has been sent!", "success");
            });
        });

    </script>
  </body>
</html>

