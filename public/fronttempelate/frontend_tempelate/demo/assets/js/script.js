/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function() {

	"use strict";

	var Popular = {
		init: function() {
			this.Basic.init();  
		},

		Basic: {
			init: function() {

				this.preloader();
				this.BackgroundImage();
				this.Animation();
				this.GallerySlider(); 
				this.CounterUp(); 
				this.GalleryPopup();
				this.VideoPopup(); 
				this.StickyMenu();
				this.NavScroll(); 
				this.ReviewSlider();


			},
			preloader: function (){
				$(window).on('load', function() {
					var preLoder = $("#preloader");
       	 			preLoder.fadeOut(0);
				});
			},

			BackgroundImage: function (){
				$('[data-background]').each(function() {
					$(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
				});
			},

            Animation: function (){
				if($('.wow').length){
					new WOW({
						offset: 100,
						mobile: true
					}).init()
				}
			},

			GallerySlider: function (){
				$(".gallery-slider").slick({
					autoplay: true,
					arrows: false,
					slidesToShow: 3,
					dots: true,
					speed: 2000,
					responsive: [
						{
						  breakpoint: 1024,
						  settings: {
							slidesToShow: 2,
						  }
						},
						{
							breakpoint: 768, 
							settings: {
								slidesToShow: 1,
							}
						}
					]
				}); 
			},
			
			CounterUp: function (){
				$(window).on("load", function(){
					$(".counterup").counterUp({
						time: 1500,
					});
				});
			},
 

			GalleryPopup: function (){
				$('.gallery-img .overlay').each(function() { 
					$(this).magnificPopup({
						delegate: 'a',
						type: 'image',
						gallery: {
						  enabled:true
						}
					});
				});
			},
			
			VideoPopup: function (){
				$(".video-column a").magnificPopup({
					type: 'iframe', 
					iframe: {
						patterns: {
						  youtube: {
							index: 'youtube.com/', 
							id: 'v=',
							src: 'https://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
						  },
						  vimeo: {
							index: 'vimeo.com/',
							id: '/',
							src: '//player.vimeo.com/video/%id%?autoplay=1'
						  },
						  gmaps: {
							index: '//maps.google.',
							src: '%id%&output=embed'
						  }
						},
						srcAction: 'iframe_src', 
					}
				}); 
			}, 

			StickyMenu: function (){



				jQuery(window).on('scroll', function() {
					if (jQuery(window).scrollTop() > 250) {
						jQuery('.main-header-area').addClass('sticky-on')
					} else {
						jQuery('.main-header-area').removeClass('sticky-on')
					}
				})
				$('.str-open_mobile_menu').on("click", function() {
					$('.str-mobile_menu_wrap').toggleClass("mobile_menu_on");
				});
				$('.str-open_mobile_menu').on('click', function () {
					$('body').toggleClass('mobile_menu_overlay_on');
				});
				if($('.str-mobile_menu li.dropdown ul').length){
					$('.str-mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
					$('.str-mobile_menu li.dropdown .dropdown-btn').on('click', function() {
						$(this).prev('ul').slideToggle(500);
					});
				}
			}, 

			NavScroll: function (){
				//Desktop Menu 
				$(".main-navigation-area li a").each(function(){
					$(this).on("click", function(e){
						e.preventDefault();
						var offsetPos = $(this.hash).offset().top;
						$("body,html").animate({
							scrollTop: offsetPos,
						}, 1500);
					});
				});

				//Mobile Menu 
				$(".str-mobile-navigation li a").each(function(){
					$(this).on("click", function(e){
						e.preventDefault();
						var offsetPos = $(this.hash).offset().top;
						$("body,html").animate({
							scrollTop: offsetPos,
						}, 1500);
					});
				});
			}, 

			//Review Slider 
			ReviewSlider: function (){
				$(".review-slider").slick({
					slidesToShow: 1,
					autoplay: false, 
					speed: 1000,
					prevArrow: '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
					nextArrow: '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',

				}); 
			}

		}	
	}
	jQuery(document).ready(function (){
		Popular.init();
	});

})();