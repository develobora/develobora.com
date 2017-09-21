/***********************--[ Showing Body & +height for mobile devices ]--************************/
$(document).ready(function() {

  $('body').addClass('ready');
  var screenHeight = $(window).height()+50;
  $('.area.main-page').css('height', screenHeight + 'px');


/***********************--[ Turn-off-scroll-EGDE ]--************************/
  // Internet Explorer 6-11
  var isIE = /*@cc_on!@*/false || !!document.documentMode;
  // Edge 20+
  var isEdge = !isIE && !!window.StyleMedia;

  if(isEdge === true) {
    $('section').css({
      'background-attachment': 'scroll'
    }) 
  }
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
}

/***********************--[ Mobile Menu ]--************************/
$(function(){
  var nb = $('#nav-btn');
  var n = $('#main_nav_menu');

  $(window).on('resize', function(){

    if($(this).width() < 1010 && n.hasClass('keep-nav-closed')) {
      // if the nav menu and nav button are both visible,
      // then the responsive nav transitioned from open to non-responsive, then back again.
      // re-hide the nav menu and remove the hidden class
      $('#main_nav_menu').hide().removeAttr('class');
    }
    if(nb.is(':hidden') && n.is(':hidden') && $(window).width() > 1009) {
      // if the navigation menu and nav button are both hidden,
      // then the responsive nav is closed and the window resized larger than 560px.
      // just display the nav menu which will auto-hide at <560px width.
      $('#main_nav_menu').show().addClass('keep-nav-closed');
    }
  }); 
  
  $('#nav-btn').on('click', function(e) {
    e.preventDefault();
    $('#main_nav_menu').slideToggle(350);
    $('nav').toggleClass('activeMenu');
  }); 

  $('#main_nav_menu a.menu').on('click', function(e) {
    if($('nav').hasClass('activeMenu')) {
      e.preventDefault();
      $('#main_nav_menu').slideUp(350);
      $('nav').removeClass('activeMenu');
    }
  });
});

/***********************--[ Highlights-Navigation-Bar ]--************************/
$(document).ready(function() {

    var section1 = $('#about-me').offset().top -55;
    var section2 = $('#skills').offset().top -55;
    var section3 = $('#portfolio').offset().top -55;
    var section4 = $('#contact').offset().top -55;

  $(window).scroll(function() {

    var wScroll = $(window).scrollTop();
    var activeMenu;

    if (wScroll < section1) {
      activeMenu = $('.menu.main-nav');
    } else if (wScroll < section2) {
      activeMenu = $('.menu.about-nav');
    } else if (wScroll < section3) {
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

      $('.image-portfolio').each(function(i) {

        setTimeout(function(){
          $('.image-portfolio').eq(i).addClass('is-showing fadeIn animated');
        }, 200 * (i+1)); 
      });
    };
  });

/***********************--[ Scrolling-Navigation-Link ]--************************/
  $('.main-nav').click(function(e){
      
    jQuery('html, body').animate({  
      scrollTop: jQuery('body').offset().top
    }, 900);  
         
     e.preventDefault();
  });
  $('.arrow').click(function(e){ 
      
    jQuery('html, body').animate({  
      scrollTop: jQuery('#about-me').offset().top-50
    }, 900);  
         
    e.preventDefault();
  });
  $('a.menu.about-nav, a.menu.skills-nav, a.menu.portfolio-nav, a.menu.contact-nav').click(function(e) {

    var linkHref = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(linkHref).offset().top-50
    }, 900);

    e.preventDefault();
  });

/***********************--[ Modal ]--************************/  
  $('div.text-area li img').click(function(e) {
      var idValue = $(this).attr('id');
      e.stopPropagation();
      
      $('#'+idValue+'-window').fadeIn(300);
  });

  $('.close').click(function() {
    $('.modal').fadeOut(300);
  });

  $(document).click(function(e) {
    if( $(e.target).hasClass('modal') ) {
      $('.modal').fadeOut(300);
    } 
  });

});




