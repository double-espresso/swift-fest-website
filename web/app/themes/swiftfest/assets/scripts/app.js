$(window).load(function() {
  var templateUrl = object_name.templateUrl;
  console.log(templateUrl);

  var audio = new Audio(templateUrl + '/dist/audio/siri.mp3');

  audio.addEventListener('canplaythrough', function() { 
    $('.inner').addClass('inner_show');
  }, false);

  // Animate loader off screen
  function showloader(){
    $("#body_homepage").addClass("page-loaded");
    $(".hero .animated_text").addClass("go");
    $("header").addClass("header_animation");
  }
  function showloaderSiri(){
    $("#body_siri").addClass("page-loaded");
  }
  function showloaderNormal(){
    $("#body_normal").addClass("page-loaded");
    $(".hero .animated_text").addClass("go");
    $("header").addClass("header_animation");
  }

  window.setTimeout( showloader, 1200 ); // 5 seconds
  window.setTimeout( showloaderNormal, 1200 ); // 5 seconds

  $(".skip").click(function(){
    $("#body_siri").addClass("page-loaded");
    $("#body_transformation").addClass("page-loaded");
    audio.pause(); // Stop playing
    audio.currentTime = 0; // Reset time
  });

  $(".headphone_hint").click(function(){
    $(this).addClass("hide");
    $(".intro_text").addClass("animation");
    $("#siri_wave").addClass("siri_animation");
    audio.play();
    window.setTimeout( showloaderSiri, 20000 ); // 5 seconds
  });

});


/*------------------*/


$(document).ready(function() {
  // Smooth scroll
  $("html").easeScroll();

  // Button Nav
  $(".button-nav").click(function(){
    $(this).toggleClass("open");
    //console.log(this);
    $(".container-nav-mobile").toggleClass("open");
    $("header").toggleClass("fixed");
  });

  $(".container-nav-mobile .mobile ul li a").click(function(){
    $(".button-nav").removeClass("open");
    $(".container-nav-mobile").removeClass("open");
  });

  // Speaker Toggle
  $(".show_talk_content").click(function(){
    $(this).parents('.single_speaker').toggleClass('show');
  });

  $(".hide_talk_content").click(function(){
    $(this).parents('.single_speaker').toggleClass('show');
  });

  // Social Nav
  $(".social_text").click(function(){
    $(this).toggleClass("open");
    $(".social_container").toggleClass("open");
  });

  // Hide and show scroll hint
  $(window).scroll(function(){
    if ($(window).scrollTop() >= 20) {
      $('.scroll_hint').addClass('hide');
      $('header').addClass('scrolled');
     }
     else {
      $('.scroll_hint').removeClass('hide');
      $('header').removeClass('scrolled');
     }

  });



  //Block Reveal on scroll
  var controller = new ScrollMagic.Controller();


  var scene1 = new ScrollMagic.Scene({
    triggerElement: '#animation_1',
    offset: -200,
    reverse: false,
    duration: 0
  });

  scene1.on("enter", function (event) {
    var rev1 = new RevealFx(document.querySelector('#animation_1'), {
      revealSettings : {
        bgcolor: '#2F2F2F',
        delay: 50,
        onCover: function(contentEl, revealerEl) {
          contentEl.style.opacity = 1;
          $(".animation_1_container").addClass("show");
          $(".animation_1_container .animated_text").addClass("go");
        }
      }
    }); 
    rev1.reveal();
  });
  if ( $( "#animation_1" ).length ) {
    scene1.addTo(controller);
  }

  var scene2 = new ScrollMagic.Scene({
    triggerElement: '#animation_2',
    offset: -200,
    reverse: false,
    duration: 0
  });

  scene2.on("enter", function (event) {
    var rev2 = new RevealFx(document.querySelector('#animation_2'), {
      revealSettings : {
        bgcolor: '#2F2F2F',
        delay: 50,
        onCover: function(contentEl, revealerEl) {
          contentEl.style.opacity = 1;
          $(".animation_2_container").addClass("show");
          $(".animation_2_container .animated_text").addClass("go");
        }
      }
    }); 
    rev2.reveal();
  });
  if ( $( "#animation_2" ).length ) {
    scene2.addTo(controller);
  }
  

  //Parallax
  if ( $( ".parallax" ).length ) {
    var parallax = new Rellax('.parallax');
  }

/*
  var animation_reveal = new RevealFx(document.querySelector('.animation_reveal'), {
    revealSettings : {
      bgcolor: '#2F2F2F',
      delay: 50,
      onCover: function(contentEl, revealerEl) {
        contentEl.style.opacity = 1;
      }
    }
  }); 


$('.animation_reveal').each(function() {
var inview = new Waypoint.Inview({
    element: this,
    entered: function(direction) {
      animation_reveal.reveal();
      $(this).children(".animated_text").addClass("go");
      $(this).children(".animation_container").addClass("show");
    },
    exited: function(direction) {
      inview.destroy();
    },
    offset: 100 // ADDED, NOTHING CHANGED
  });
});
*/

});


  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('header').outerHeight();

  $(window).scroll(function(event){
      didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 100);

  function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      $('header').removeClass('down').addClass('top');
      $('header.mobile').removeClass('down').addClass('top');
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('header').removeClass('top').addClass('down');
        $('header.mobile').removeClass('top').addClass('down');
      }
    }
    lastScrollTop = st;
  }


/*------------------*/

var screenSize = $( window ).width();
console.log(screenSize);
if ((screenSize>768)) {
  //floating letters
  var app = {

    chars: ['[',']','*','+','{','}',';','/','"','#','_','-'],

    init: function () {
      app.container = document.createElement('div');
      app.container.className = 'animation-container';
      //document.body.appendChild(app.container);
      if ( $( "#body_homepage" ).length ) {
        document.getElementById('body_homepage').appendChild(app.container);
      }
      window.setInterval(app.add, 90);
    },

    add: function () {
      var element = document.createElement('span');
      app.container.appendChild(element);
      app.animate(element);
    },

    animate: function (element) {
      var character = app.chars[Math.floor(Math.random() * app.chars.length)];
      var duration = Math.floor(Math.random() * 40) + 1;
      var offset = Math.floor(Math.random() * (500 - duration * 2)) + 3;
      var size = 100 + (15 - duration);
      element.style.cssText = 'right:'+offset+'vw; font-size:'+size+'px;animation-duration:'+duration+'s';
      element.innerHTML = character;
      window.setTimeout(app.remove, duration * 1000, element);
    },

    remove: function (element) {
      element.parentNode.removeChild(element);
    },
  };

  document.addEventListener('DOMContentLoaded', app.init);
};


/*------------------*/


/*------------------*/


// Smooth scroll animation on <a href="#"> click
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


/*------------------*/


// Import font
WebFontConfig = {
  google: { families: [ 'Space+Mono:400,700' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();