/***********************--[ Showing Body & +height for mobile devices ]--************************/
$(document).ready(function() {
	  $('body').addClass('ready');
    var screenHeight = $(window).height()+50;
    $('.area.main-page').css('height', screenHeight + 'px');
});

Tmpl = {
/***********************--[ Typing-Header ]--************************/

	typing : function() {
		$(function(){

		$(document).ready(function() {
			setTimeout(function() {
				$(".typed").typed({
					strings: ["Patryk Obora,</br>Junior Front-End Developer."],
					typeSpeed: 13
				});
			}, 1500);
			setTimeout(function() {
				$(".photo").addClass('ready');
			}, 400);
			setTimeout(function() {
				$(".arrow").addClass('fadeInDown animated two');
			}, 3000);
		});
	});
	},
/***********************--[ Mobile-Menu ]--************************/
	mobileMenu : function() {
		$('body nav').toggleClass('activeMenu');
		
		if($('nav').hasClass('activeMenu')){
			setTimeout(function() {
				$('nav').addClass('ekstraactiveMenu');
			},200);
		}else {
			$('nav').removeClass('ekstraactiveMenu');
		}
	}, 
}

/***********************--[ Scrolling-Navigation-Link ]--************************/
$(document).ready(function(){

	$('body nav a.menu').click(function() { 
		$('nav').removeClass('ekstraactiveMenu');

		setTimeout(function() { 
			$('body nav').toggleClass('activeMenu');
		}, 200);
	});

  $('.main-nav').click(function(e){   //funkcja click na 'scrollup'
      
      jQuery('html, body').animate({  
        scrollTop: jQuery('body').offset().top
      }, 500);  
         
         e.preventDefault();
     });
  $('.arrow').click(function(e){ 
      
      jQuery('html, body').animate({  
        scrollTop: jQuery('#about-me').offset().top-50
      }, 500);  
         
         e.preventDefault();
     });
  $('a.menu.about-nav, a.menu.skills-nav, a.menu.portfolio-nav, a.menu.contact-nav').click(function(e) {

    var linkHref = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(linkHref).offset().top-50
    }, 500);

    e.preventDefault();
  });

});

/***********************--[ Highlights-Navigation-Bar ]--************************/
$(document).ready(function() {

	var section1 = $('#about-me').offset().top;
	var section2 = $('#skills').offset().top;
	var section3 = $('#portfolio').offset().top;
	var section4 = $('#contact').offset().top;

  $(window).scroll(function() {

		var wScroll = $(window).scrollTop()+50;
    var activeMenu;

		if (wScroll < section1) {
		    activeMenu = $('.menu.main-nav');
		} else if(wScroll < section2) {
        activeMenu = $('.menu.about-nav');
		}	else if (wScroll < section3) {
        activeMenu = $('.menu.skills-nav');
    } else if (wScroll < section4) {
        activeMenu = $('.menu.portfolio-nav');
    } else {
        activeMenu = $('.menu.contact-nav');
    }
    activeMenu.addClass('active');
    $('.menu').not(activeMenu).removeClass('active');
  
/***********************--[ Background-Navigation-Bar ]--************************/
    if ($(window).scrollTop() > $('.area.main-page').offset().top) {
        $('body nav').addClass('activebg');
    } else {
       $('body nav').removeClass('activebg');
    }

/***********************--[ Showing-Skills-Elements ]--************************/
    if(wScroll > $('body #skills').offset().top-$(window).height()/3) {

    $('.text-area.skill li').each(function(i) {

      setTimeout(function(){
        $('.text-area.skill li').eq(i).addClass('is-showing');
      }, 150 * (i+1)); 
    });
  };

/***********************--[ Showing-Page-Elements ]--************************/
  if(wScroll > $('body #portfolio').offset().top-$(window).height()/3) {

    $('.page.left, .page.right').each(function(i) {

      setTimeout(function(){
        $('.page.left, .page.right').eq(i).addClass('is-showing fadeIn animated');
      }, 200 * (i+1)); 
    });
  };

});
});



