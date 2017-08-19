(function($) {

	'use strict';

	new WOW().init();

	/*-----------------------------------------------------------------------------------*/
	/* Document Ready
	/*-----------------------------------------------------------------------------------*/
	function animateIt() {
	
		//Animations
		setTimeout(function(){$('#header.animated').addClass('fadeInDown')},360); 

	}

	if($('#preloader')[0]) {
	$(window).load(function() { 
		$('#status').fadeOut(); 
		$('#preloader').delay(350).fadeOut('fast'); 
		$('body').delay(350).css({'overflow':'visible'});
		animateIt();
	});
	}

	var windowWidth = $(window).width();
	if(windowWidth < 769){
		$(document).ready(function() {
			$(".sub-menu-triger").click(function() {
				$("#primary-menu ul.sm-clean").toggleClass( "menu-active" );
				$("#header").toggleClass( "header-expanded" );
			});

			var $mainMenuState = $('#main-menu-state');
			  if ($mainMenuState.length) {
				// animate mobile menu
				$mainMenuState.change(function(e) {
				  var $menu = $('.sm-clean');
				  if (this.checked) {
					$menu.hide().slideDown(250, function() { $menu.css('display', ''); });
				  } else {
					$menu.show().slideUp(250, function() { $menu.css('display', ''); });
				  }
				});
				// hide mobile menu beforeunload
				$(window).bind('beforeunload unload', function() {
				  if ($mainMenuState[0].checked) {
					$mainMenuState[0].click();
				  }
				});
			}
		});
	}
	if(windowWidth < 768){

		var headHeight = $('#header.header-expanded').height();
		var headHeightEx = $('#header').outerHeight();
		if($('.fixed-footer')[0]) {
			if (document.querySelector(".footer").classList.contains("fixed-footer")) {
				$(".footer").css('margin-top', headHeightEx + headHeightEx);
			}
		}
	}

	$(document).ready(function() {
		//Smart Menus
		$('.sm.sm-clean').smartmenus({
			mainMenuSubOffsetX: -1,
			mainMenuSubOffsetY: 4,
			subMenusSubOffsetX: 7,
			subMenusSubOffsetY: -5
		});


		$('a.scroll-to-target').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

	$(".mobile-menu").click(function() {
		$("#primary-menu ul.sm-clean").toggleClass( "menu-active" );
	});

	$(".burger-7").click(function() {
		$(".header-style-7-wrap .menu-wrapper").addClass( "wrap-active" );
	});
	$(".close-btn").click(function() {
		$(".header-style-7-wrap .menu-wrapper").removeClass( "wrap-active" );
	});

	if($('.hero-section')[0]) {
		if (document.querySelector(".hero-section").classList.contains("overlap-header")) {
			$("#header").addClass('has-overlaped');
		}
	}

	/*$('#showMenu').click(function(){
		$(this).toggleClass('open');
	});*/

	/*-----------------------------------------------------------------------------------*/
	/* Header Styles 2 & Header Style 3
	/*-----------------------------------------------------------------------------------*/

	jQuery(document).ready(function($){
		var isLateralNavAnimating = false;
		
		//open/close lateral navigation
		$('.cd-nav-trigger').on('click', function(event){
			event.preventDefault();
			//stop if nav animation is running 
			if( !isLateralNavAnimating ) {
				if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
				
				$('body').toggleClass('navigation-is-open');
				$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					//animation is over
					isLateralNavAnimating = false;
				});
			}
		});
	});

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	function mandalaHeaderTwoContentSpacing() {
		var contentWrapperTwo = $('.header-style-2 #content');
		var footerWrapperTwo = $('.header-style-2 #footer');
		var menuWrapperTwo = $('.header-style-2 #cd-nav .primary-menu .inner');
		var headerWidthTwo = $('.header-style-2 #header').width();
		
			menuWrapperTwo.css('padding-left', headerWidthTwo + 100);
			contentWrapperTwo.css('padding-left', headerWidthTwo);
			footerWrapperTwo.css('padding-left', headerWidthTwo);
	}

	function mandalaHeaderThreeContentSpacing() {
		var contentWrapperThree = $('.header-style-3 #content');
		var footerWrapperThree = $('.header-style-3 #footer');
		var menuWrapperThree = $('.header-style-3 #cd-nav .contact-info .inner');
		var headerWidthThree = $('.header-style-3 #header').width();
		
			menuWrapperThree.css('padding-right', headerWidthThree + 100);
			contentWrapperThree.css('padding-right', headerWidthThree);
			footerWrapperThree.css('padding-right', headerWidthThree);
	}

	function mandalaFullscreen() {
		var contentWrapper = $('.error404 #content-wrapper .outer');
		var headerWrapper = $('.error404 #header').height();
		var footerWrapper = $('.error404 #footer').height();
		
			contentWrapper.css('height', windowHeight - headerWrapper - footerWrapper);
	}

	function mandalaHeroScreen() {
		var heroSelector = $('.hero-section.fit-to-screen');

		heroSelector.css('width', windowWidth);
		heroSelector.css('height', windowHeight);
	}

	window.onload = function() {
		mandalaHeaderTwoContentSpacing();
		mandalaHeaderThreeContentSpacing();
		mandalaFullscreen();
		mandalaHeroScreen();
	};

	window.onresize = function() {
		mandalaHeaderTwoContentSpacing();
		mandalaHeaderThreeContentSpacing();
		mandalaFullscreen();
		mandalaHeroScreen();
	};

	$(window).load(function(){
		var container = $('.blog .blog-section');

		// Infinite Scroll
		container.infinitescroll({
		loading: {
		finishedMsg: 'There is no more',
		img: "../wp-content/themes/mandala/img/loader.gif",
		msgText: 'loading',
		speed: 'normal'
			},

		state: {
		isDone: false
		},
			navSelector  : '#load-more-loop', 
			nextSelector : '#load-more-loop a', 
			itemSelector : '.blog .blog-section article',

		});

		container.infinitescroll('unbind');
		  $("#load-infinite-loop").click(function(){
				container.infinitescroll('retrieve');
				return false;
		});

		//infinite grid
		var container2 = $('.grid-template');
		container2.infinitescroll({
		loading: {
		finishedMsg: 'There is no more',
		img: '../wp-content/themes/mandala/img/loader.gif',
		msgText: 'loading',
		extraScrollPx: 300,
		speed: 'normal'
			},

		state: {
		isDone: false
		},
			navSelector  : '#load-more-loop-grid-temp', 
			nextSelector : '#load-more-loop-grid-temp a', 
			itemSelector : '.grid-item',

		},
		function( gridAnjay ) {
			var t = setTimeout( function(){ var mixerGrid = mixitup('#MixItUp1'); mixerGrid.forceRefresh(); }, 100 );
			$('#MixItUp1').css('margin-bottom', 0);
		});

		container2.infinitescroll('unbind');
		  $("#load-infinite-loop-grid-temp").click(function(){
				container2.infinitescroll('retrieve');
				var mixerGrid = mixitup('#MixItUp1');
				mixerGrid.forceRefresh();
				$('#MixItUp1').css('margin-bottom', 70);
				return false;
		});

		//infinite masonry
		
		var masonryContainer = $('.masonry-template');
		masonryContainer.infinitescroll({
		loading: {
		finishedMsg: 'There is no more',
		img: "../wp-content/themes/mandala/img/loader.gif",
		msgText: 'loading',
		speed: 'normal'
			},

		state: {
		isDone: false
		},
			navSelector  : '#load-more-loop-masonry-temp', 
			nextSelector : '#load-more-loop-masonry-temp a', 
			itemSelector : '.masonry-item',

		},
		function( newElements ) {
			masonryContainer.masonry( 'appended', jQuery( newElements ) );
			var t = setTimeout( function(){ masonryContainer.masonry('layout'); var mixerMasonry = mixitup('#MixItUp2'); mixerMasonry.forceRefresh(); }, 100 );
			$('#MixItUp2').css('margin-bottom', 0);
		});

		masonryContainer.infinitescroll('unbind');
			$("#load-infinite-loop-masonry-temp").click(function(){
				masonryContainer.infinitescroll('retrieve');
				var mixerMasonry = mixitup('#MixItUp2');
				mixerMasonry.forceRefresh();
				$('#MixItUp2').css('margin-bottom', 150);
				return false;
		});

	});

	/*-----------------------------------------------------------------------------------*/
	/* Pagination
	/*-----------------------------------------------------------------------------------*/

	$('.post-navigation a').addClass('btn');

	$(window).load(function() {
		var swiper = new Swiper('.hero-slider', {
			slidesPerView: 1,
			autoplayDisableOnInteraction: false,
			autoplay: 1500,
			loop: true,
			breakpoints: {
				// when window width is <= 640px
				768: {
				  slidesPerView: 1,
				}
			},
			centeredSlides: false,
		});
	});

	/*$(".porto2-detail-wrap").stick_in_parent({
		parent: '.portfolio-style-2-wrap',
	});*/
	$(".porto2-detail-wrap").stick_in_parent()
	.on("sticky_kit:stick", function(e) {
	$(".is_stuck").css('left', 'auto');
	});

	var swiper = new Swiper('.standard-swiper-slider.portfolio-thumbnail', {
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		autoplay: 7000,
		effect: 'slide',
		autoHeight: true
	});

	if($('.field.search__input')[0]) {
		$('.field.search__input').removeAttr("autocomplete");
		$('.field.search__input').removeAttr("autocorrect");
		$('.field.search__input').removeAttr("autocapitalize");
		$('.field.search__input').removeAttr("spellcheck");
	}

	$(function(){
        $('.portfolio-chocolat').Chocolat({
            imageSize: 'contain'
        });
    });


})( jQuery );