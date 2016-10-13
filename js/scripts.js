jQuery(function($) {
 
	/*--------------------------------------
	Mobile Menu
	--------------------------------------*/

	var $parentElementToMenu	= $('body'),
	$mobileMenuTriggerClass = $('.toggle-nav'),
	$mobileActiveClass 		= 'menu-active';

	$mobileMenuTriggerClass.click(function() {
	  $parentElementToMenu.toggleClass($mobileActiveClass);
	  return false;
	});

	//ESC key to remove mobile menu
	$(document).keyup(function(e) {
	  if (e.keyCode == 27) {
	    $parentElementToMenu.toggleClass($mobileActiveClass);
	  }
	});

	$mobileMenuTriggerClass.click(function(e) {
	  $(this).toggleClass('active');
	  return false;
	});

	/*--------------------------------------
	Sticky Header
	--------------------------------------*/

	var shrinkHeader = 200;

	$(window).scroll(function () {
	  
	  var scroll = getCurrentScroll();
	  if (scroll >= shrinkHeader) {
	    $('nav').addClass('sticky');
	    //$('.form-tabs').css('margin-top', '185px');
	  }
	  else {
	    $('nav').removeClass('sticky');
	    //$('.form-tabs').css('margin-top', '20px');
	  }
	});

	function getCurrentScroll() {
	  return window.pageYOffset || document.documentElement.scrollTop;
	}

	function mobileMenu() {
		$('#menu-icon').on("click", function(){
	        $('#nav nav').toggleClass('active-menu');
	        $('#menu-icon').toggleClass('active-menu-icon');
	        if ($('#nav nav').hasClass('active-menu')) {
	            $('body, html').css({'overflow-y': 'hidden'});
	            $(document).bind('touchmove', function(e) {
	                e.preventDefault();
	            });
	        }
	        else {
	            $('body, html').css({'overflow-y': 'auto', '-webkit-overflow-scrolling': 'touch'});
	            $(document).unbind('touchmove');
	        }
	    });
	    $('#nav nav').on("click", function(){
	        $('#menu').removeClass('active-menu');
	        $('#menu-icon').removeClass('active-menu-icon');
	        $('body, html').css({'overflow-y': 'auto', '-webkit-overflow-scrolling': 'touch'});
	        $(document).unbind('touchmove');
	    });
	}

	mobileMenu();


	// Hide Header on on scroll down

	function hideTopNav() {

		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('section#nav').outerHeight();

		function hasScrolled() {

		    var st = $(this).scrollTop();
		    var hero = $('header#header').outerHeight();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta) {
		        return;
		    }
		    else {
		      // If they scrolled down and are past the navbar, add class .nav-up.
		      // This is necessary so you never see what is "behind" the navbar.
	          if ((st) > hero) {
	          	$('section#nav').css({'position': 'fixed', 'background': '#eee'});
			      // if (st > lastScrollTop && st > navbarHeight){
			      //     // Scroll Down
			      //     $('section#nav').addClass('nav-up').css({'top': -navbarHeight});
			      // } else {
			      //     // Scroll Up
			      //     if(st + $(window).height() < $(document).height()) {
			      //         $('section#nav').removeClass('nav-up').css({'top': 0});
			      //     }
			      // }
	          }
	          else {
	          	$('section#nav').css({'position': 'absolute', 'background': 'transparent'});
	          }
		    }
		    
		    lastScrollTop = st;
		}

		$(window).scroll(function(){
		    didScroll = true;
		});

		setInterval(function() {
		    if (didScroll) {
		        hasScrolled();
		        didScroll = false;
		    }
		}, 250);

	}

	hideTopNav();

	// END Hide Header on on scroll down


});




