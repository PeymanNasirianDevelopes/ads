"use strict";
(function($) { 

	$(window).on('load',function () {
		$('#alx-preloader').delay(1000).fadeOut('slow');
		alx_services_height($('.alx-services'));
		
	});

	$(document).ready(function(){

		alx_dark_body($('#alx-pagepiling'));
		/*-------------------------------------
		Disable Vertical Align for Sections
		-------------------------------------*/
		$('section').each(function(){

			var item = $(this).children('.container, .container-fluid').outerHeight(),
				ths = $(this),
				window_page = $(window).height()-100;
			
			ths.children('.container, .container-fluid').css('height', +item);
	
			if(window_page < item){
				ths.removeClass('alx-vertical-middle');
			}
		})
	});

	/*-------------------------------------
	Start functions
	-------------------------------------*/
	alx_skill(); // ---- Skills

	
	/*-------------------------------------
		Drag images restagt
	-------------------------------------*/
	$('img, a').on('dragstart', function(event) { event.preventDefault(); });

	/*-------------------------------------
	 	Burger
	 -------------------------------------*/
	 $('.alx-burger').each(function(){
		$(this).on('click', function(e){
			e.preventDefault();
			$(this).toggleClass('on');
		})
	});

	/*-------------------------------------
	Particles
	-------------------------------------*/

	$('.alx-particles').each(function(){

		var ths = $(this),
			dotsColor = $(this).attr('data-dotscolor'),
			linesColor = $(this).attr('data-linescolor');

		ths.particleground({
			dotColor: dotsColor,
			lineColor: linesColor,
			parallaxMultiplier: 5,
			particleRadius: 8,
			proximity: 130,
			density: 10000
		});

	});

	////
	function alx_dark_body(index_var){

		//Dark section change body class
		var section = index_var.find('.alx-dark-section');

		var body = $('body'),
			dark_class = 'alx-darked-wrap';

			if( section.hasClass('active')){
				body.addClass(dark_class);
			}else{
				body.removeClass(dark_class);
			};
	}

	/*-------------------------------------
	 	Page Piling
	 -------------------------------------*/
	 $(function (){
		 var wrap = $('#alx-pagepiling');

		 wrap.pagepiling({
			loopBottom: true,
			scrollingSpeed: 200,
			easing: 'Clip',
			fitToSection: false,
			autoScrolling: false,
			anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9'],
			verticalCentered: false,
			sectionSelector: 'section',
			onLeave: function(index, nextIndex, direction){
				//Skills add class to activation anmation
				$('.pp-section').find('.alx-skills').removeClass('alx-skill-viewport')
				$('.pp-section.active').find('.alx-skills').addClass('alx-skill-viewport')

				if($('.pp-section.active').find('.alx-skills').length){
					alx_skill();
				}else{
					$('.pp-section').find('.alx-skills').find('.alx-skills__bar').css('width', '0');
				}

				alx_dark_body(wrap);
	
			},
			afterRender: function(){
				alx_dark_body($(wrap));
			}
			
		});

	
	
		//arrows
		var up = $('.alx-pp-arrows-up'),
			down = $('.alx-pp-arrows-down');

		up.on('click', function(){
			$.fn.pagepiling.moveSectionUp();
		});
		down.on('click', function(){
			$.fn.pagepiling.moveSectionDown();
		});

	});

	
	/*-------------------------------------
	 Portfolio control
	 -------------------------------------*/
	 $(function() {
		if ($(".alx-portfolio-control").length) {
			$('.alx-portfolio-control li').on('click', function () {
		
				var filter = $(this).attr('data-filter');
				$('.alx-portfolio-control li').removeClass('alx-active');
				$(this).addClass('alx-active');
				
				
				$('.alx-layout-isotope').isotope({
					filter: filter,
					masonry: {
						transitionDuration: '0.8s',
						percentPosition: true,
					}
					
				});
				return false;
			});
		}
	});

	
	/*-------------------------------------
	 Masonry
	 -------------------------------------*/
	$(function(){

		var section = $('.alx-layout-isotope');


		section.imagesLoaded().done(function(){
			section.isotope({
				itemSelector: '.alx-isotope-item',
				masonry: {
					columnWidth: '.alx-isotope-item'
				},
				transitionDuration: '0.8s',
				percentPosition: true
			});
		});

		$(window).on('resize', function() {
			section.isotope();
		}).trigger('resize');

	});

	$('.alx-img-gallery').magnificPopup({
		type:'image',
		mainClass: 'mfp-fade',
		gallery:{enabled:true}
	});

	/*-------------------------------------
		E-mail Ajax Send
	-------------------------------------*/
	$('.alx-contact-form:nth-child(1n)').on('submit',function() {
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			th.trigger("reset");
			th.find('.alx-success-msg').slideToggle('slow');
			setTimeout(function() {
				// Done Functions
				th.find('.alx-success-msg').slideToggle('hide');
			}, 3000);
		});
		return false;
	});
	

	/*-------------------------------------
		Testimonials
	-------------------------------------*/
	$.fn.alx_testimonials = function() {
        $(this).each(function() {
            var $dots = $(this).find('.alx-slider__nav__dots');
            var $arrows = $(this).find('.alx-slider__nav');
            var $next = $arrows.children(".alx-slider__nav__next");
			var $prev = $arrows.children(".alx-slider__nav__prev");

			var $slick_slider = $(this).children(".alx-testimonials__slides");
			
            $slick_slider.not('.slick-initialized').slick({
                dots: true,
                appendDots: $dots,
                dotsClass: 'dots',
                // autoplay: true,
                autoHeight: true,
                infinite: true,
                cssEase: 'linear',
				adaptiveHeight: true,
				slidesToShow: 2,
  				slidesToScroll: 1,
                prevArrow: $prev,
				nextArrow: $next,
				customPaging : function(slider, i) {
					var thumb = $(slider.$slides[i]).data(),
						slides = i + 1;
						if( i < 9 ){
							return '<button>0'+slides+'</button>';
						}else{
							return '<button>'+slides+'</button>';
						}
					},
				responsive: [
					{
						breakpoint: 810,
							settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							// infinite: false,
							dots: true,
							arrows: false

						}
					},
				]
			});

        });
    };

	$('.alx-testimonials').alx_testimonials();

	$('.alx-testimonials__item__text > p').readmore({
		collapsedHeight: 60
	});

	

	/*-------------------------------------
		Skills
	-------------------------------------*/
	function alx_skill_viewport() {
		$('.alx-skill-viewport').each(function(){
			var $ths_out = $(this).find('.alx-skills__body'),
				$ths_in = $(this).find('.alx-skills__bar');
	
	
			$ths_in.waypoint(function (dir) {
				if (dir === "down") {
					$ths_in.css('width', $ths_in.attr('data-skills'))
	
				}
				else {
					$ths_in.css('width', '0');
				}
				}, {
					offset: "90%"
				});
		});
	}
	function alx_skill() {
		$('.alx-skill-viewport').each(function(){
			var $ths_out = $(this).find('.alx-skills__body'),
				$ths_in = $(this).find('.alx-skills__bar');
				$ths_in.css('width', $ths_in.attr('data-skills'))
		});
	}
	
	
	
	
	/*-------------------------------------
	 	Side Bar
	 -------------------------------------*/
	 $(function() {

		var $toggleSidebar = $(".alx-burger"),
			$body = $('body'),
			$sidebar = $(".alx-aside-sidebar"),
			$sidebarOverlay = $(".alx-aside-sidebar__overlay"),
			$sidebarClose = $('#alx-sidebar').children(".alx-burger"),
			$sidebarMnuLink = $('#alx-sidebar').children(".alx-sidebar-menu").find('a'),
			$sedibarOpened = false;

		function alx_sidebar_close(){
			$body.removeClass('alx-aside-sidebar__openoverlay');
			$sidebar.removeClass('alx-aside-sidebar__open');
			$toggleSidebar.removeClass('on');
		}

		$toggleSidebar.on('click', function(e) {
			if(!$sedibarOpened){
				e.preventDefault();
				$body.toggleClass('alx-aside-sidebar__openoverlay');
				$sidebar.toggleClass('alx-aside-sidebar__open');
			}
			$sedibarOpened = true;
			// return false;
		});

		$sidebarOverlay.on('click', function(e){
			if($sedibarOpened) {
				e.preventDefault();
				alx_sidebar_close();
			}
			$sedibarOpened = false;
		});


		// 	media close sidebar on click to link menu
		if (window.matchMedia('(max-width: 767px)').matches) {
			$sidebarMnuLink.on('click', function(e){
				if($sedibarOpened) {
					alx_sidebar_close();
				}
				$sedibarOpened = false;
			});
		}
		
		$sidebarClose.on('click', function(e) {
			if($sedibarOpened) {
				e.preventDefault();
				alx_sidebar_close();
				$sedibarOpened = false;
			}
		});
		
	});

	/*-------------------------------------
	Inline styles
	 -------------------------------------*/
	$('.alx-style').each(function() {
		var styles = $(this).attr('data-style');
		if(styles){
			$(this).attr('style', '' +styles);
		}
	});

	/*-------------------------------------
	 Background function
	 -------------------------------------*/
	 $.fn.alx_background_image = function() {
		$(this).each(function() {
			var url = $(this).attr('data-image');
			if(url){
				$(this).css('background-image', 'url(' + url + ')');
			}
		});
	};
	$('.alx-bg-img').alx_background_image();

	/*-------------------------------------
	Servisec changes
	 -------------------------------------*/

	$('.alx-services').each(function(){

		var ths = $(this),
			interval = ths.attr('data-interval');

		ths.addClass('run');
	
		$(this).mouseover(function() {
			$(this).removeClass('run');
		}).mouseout(function() {
			$(this).addClass('run');
		});

		alx_services_height(ths)

		$(window).on('resize', function() {
			alx_services_height(ths)
		}).trigger('resize');
		
	
		

	ths.find('.alx-services__container').eq(0).addClass('alx-active');

	setInterval(blockAnimate, interval)

	function blockAnimate() {
		if(ths.hasClass('run')){
			var length = ths.find('.alx-services__container').length - 1;
			ths.find('.alx-services__container').each(function(index) {
			if($(this).hasClass('alx-active') && index != length) {
				$(this).removeClass('alx-active').next('.alx-services__container').addClass('alx-active');
				return false;
			} else if (index == length) {
				$(this).removeClass('alx-active');
				ths.find('.alx-services__container').eq(0).addClass('alx-active');
				return false;
			}
		});
		}
		 
	};
		
	});

	/*-------------------------------------
	 	MatchHeight
	 -------------------------------------*/
	 $('.alx-services__item__wrap').matchHeight({
		property: 'height'
	});


	/*-------------------------------------
	 	Height css for services container
	 -------------------------------------*/
	function alx_services_height(container) {
		container.each(function(){
			var container = $(this),

			height = container.find('.alx-services__container').outerHeight();

			container.css('height', + height)

		})
	}


})(jQuery);
