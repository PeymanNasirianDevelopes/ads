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
        <div class="alx-logo"><a href="https://werbungseiten.de/"><img class="alx-logo__dark" src="{{asset("storage/images/Logowerbung.png")}}" alt="logo"><img class="alx-logo__white" src="{{asset("storage/images/Logowerbung.png")}}" alt="Logowerbung"></a></div>
        <div class="alx-right-wrap">
          <div class="alx-social-links">
            <ul>
              <li><a href=""><i class="fa fa-instagram"></i></a></li>
              <li><a href=""><i class="fa fa-dribbble"></i></a></li>
              <li><a href=""><i class="fa fa-github"></i></a></li>
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
                  <h3 class="alx-person-image__title alx-text-center">6 Years of Experience</h3>
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
                  <h2 class="alx-heading__title">My Best Services</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">In my work I using a variety of techniques and instruments like: HTML5, CSS3, Jquery, Responsive Design, Bootstrap Framework. I'm using the latest technologies and the latest trends in web development.</div>
                </div><a class="alx-btn" href="#page8">Start a project</a>
              </div>
              <div class="col-lg-6 offset-lg-1">
                <div class="alx-services alx-dots-style" data-interval="7000">
                  <div class="alx-services__container">
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-film"></i>
                          <h4 class="alx-services__item__title">Video Editor</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-film"></i></div>
                      </div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-camera-retro"></i>
                          <h4 class="alx-services__item__title">Photograther</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-camera-retro"></i></div>
                      </div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-diamond"></i>
                          <h4 class="alx-services__item__title">Designer</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-diamond"></i></div>
                      </div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-feed"></i>
                          <h4 class="alx-services__item__title">Manager</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-feed"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="alx-services__container">
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-wordpress"></i>
                          <h4 class="alx-services__item__title">WordPress</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-wordpress"></i></div>
                      </div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-css3"></i>
                          <h4 class="alx-services__item__title">CSS&HTML</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-css3"></i></div>
                      </div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-opencart"></i>
                          <h4 class="alx-services__item__title">OpenCart</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-opencart"></i></div>
                      </div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa fa-connectdevelop"></i>
                          <h4 class="alx-services__item__title">Support</h4>
                        </div>
                        <div class="alx-services__item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto magni eligendi eveniet veritatis.</div>
                        <div class="alx-services__item__opacityicon"><i class="fa fa-connectdevelop"></i></div>
                      </div>
                    </div>
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
                    <li><span>01</span>WordPress Intergation</li>
                    <li><span>02</span>PSD TO HTML RESPONSIVE</li>
                    <li><span>03</span>SEO OPTIMIZATION</li>
                    <li><span>04</span>Fully Responsive design</li>
                    <li><span>05</span>Promo Pages Designs</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-5 offset-lg-2 align-self-center">
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">Logo / Branding</div>
                    <div class="alx-skills__count">80%</div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="80%"></div>
                  </div>
                </div>
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">Coding</div>
                    <div class="alx-skills__count">90%</div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="90%"></div>
                  </div>
                </div>
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">WordPress</div>
                    <div class="alx-skills__count">70%</div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="70%"></div>
                  </div>
                </div>
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">HTML5 / CSS3</div>
                    <div class="alx-skills__count">60%</div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="60%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="{{asset("storage/images/bgl3.jpg")}}">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="alx-heading">
                  <div class="alx-heading__pretitle"><i class="fa fa-money"></i>25$ my hourly rate</div>
                  <h2 class="alx-heading__title">Prices</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="alx-price">
                  <div class="alx-price__title">PROMO WEBSITES DESIGN</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
                <div class="alx-price">
                  <div class="alx-price__title">CORPORATE WEBSITES DESIGN</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
                <div class="alx-price">
                  <div class="alx-price__title">WEB SERVICES DESIGN</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 offset-lg-2 align-self-end">
                <div class="alx-price">
                  <div class="alx-price__title">E-COMMERCE DESIGN</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
                <div class="alx-price">
                  <div class="alx-price__title">SKETCHING & USER FLOW</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
                <div class="alx-price">
                  <div class="alx-price__title">HOMEPAGE DESIGN</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
                <div class="alx-price">
                  <div class="alx-price__title">INNER PAGE DESIGN</div>
                  <div class="alx-price__price"><span>From</span>
                    <p>900$</p>
                  </div>
                </div>
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
                <li data-filter=".alx-f-branding">Branding</li>
                <li data-filter=".alx-f-web">Web</li>
                <li data-filter=".alx-f-graphic">Graphic</li>
                <li data-filter=".alx-f-logo">Logo</li>
                <li data-filter=".alx-f-photography"> Photography</li>
              </ul>
            </div>
            <div class="alx-portfolio-items alx-layout-isotope alx-isotope-gap" data-grid="4">
              <div class="alx-isotope-item alx-f-branding alx-f-photography">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/1.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/1.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>CREATIVE WEB DESIGN</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-graphic">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/1.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/2.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>NEW SITE DESIGN</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-web">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/2.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/3.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>COMPANY LOGO MOCKUP</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-logo alx-f-photography">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/3.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/3.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>NEW SITE DESIGN</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-branding">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/5.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/5.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>SIMPLE CURVES</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-web">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/6.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/6.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>MODERN APPROACH</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-branding">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/7.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/7.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>BRUSHES PRESET</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
              <div class="alx-isotope-item alx-f-graphic alx-f-web alx-f-photography">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a class="alx-img-gallery" href="{{asset("storage/images/8.jpg")}}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="{{asset("storage/images/8.jpg")}}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>INSPIRABLE WEBSITE</h4>
                    <p>Creative</p>
                  </div>
                </div>
              </div>
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
                </div><a class="alx-btn alx-btn-primary" href="">become my client</a>
              </div>
              <div class="col-lg-6 offset-lg-1">
                <div class="alx-services alx-services__partners alx-dots-style" data-interval="7000">
                  <div class="alx-services__container">
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner0.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner2.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner3.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner4.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner5.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner6.png")}}" alt=""></div>
                    </div>
                  </div>
                  <div class="alx-services__container">
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner6.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner0.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner2.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner4.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner5.png")}}" alt=""></div>
                    </div>
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="{{asset("storage/images/partner3.png")}}" alt=""></div>
                    </div>
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
                    <p>+754-554-54-34</p>
                  </div>
                </div>
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-envelope"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Email me</h5><a href="mailto:brainiaktheme@gmail.com">Office@domian.com</a>
                  </div>
                </div>
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-home"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Address</h5>
                    <p>445 Mount Eden Road, Mount</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <form class="alx-contact-form" action="">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="alx-input-group">
                        <input name="name" type="text" required placeholder="Your Name *"><i class="fa fa-user-o"></i>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="alx-input-group">
                        <input name="name" type="email" required placeholder="Your Email *"><i class="fa fa-at"></i>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="alx-input-group">
                        <textarea name="name" rows="6" required placeholder="Message *"></textarea><i class="fa fa-commenting-o"></i>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
      <hr>
      <div class="alx-sidebar-menu">
        <ul>
          <li><a href="#page1">Home</a></li>
          <li><a href="#page2">About</a></li>
          <li><a href="#page3">Services</a></li>
          <li><a href="#page4">Skills</a></li>
          <li><a href="#page5">Prices</a></li>
          <li><a href="#page6">Portfolio</a></li>
          <li><a href="#page7">Reviews</a></li>
          <li><a href="#page8">Clients</a></li>
          <li><a href="#page9">Contact</a></li>
        </ul>
      </div>
      <div class="alx-social-links__2">
        <ul>
          <li><a href=""><i class="fa fa-twitter"></i></a></li>
          <li><a href=""><i class="fa fa-instagram"></i></a></li>
          <li><a href=""><i class="fa fa-facebook"></i></a></li>
          <li><a href=""><i class="fa fa-github"></i></a></li>
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
  </body>
</html>

