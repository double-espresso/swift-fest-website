$(window).load(function() {
  // Animate loader off screen
   function showloader(){
      $("body").addClass("page-loaded");
   };
   window.setTimeout( showloader, 1200 ); // 5 seconds
});


/*------------------*/


$(document).ready(function() {
  
  // Button Nav
  $(".button-nav").click(function(){
    $(this).toggleClass("open");
    //console.log(this);
    $(".container-nav-mobile").toggleClass("open");
  });

  $(".container-nav-mobile nav.mobile ul li a").click(function(){
    $(".button-nav").removeClass("open");
    $(".container-nav-mobile").removeClass("open");
  });

  $('.radio-select label').click(function() {
    $('.radio-select label').removeClass('selected');
    $(this).addClass('selected');
  });

  // Social Nav
  $(".social_text").click(function(){
    $(this).toggleClass("open");
    $(".social_container").toggleClass("open");
  });

  // Tab Button
  $('.tab_button').click(function() {
    $(this).toggleClass("open");
    var tab = $(this).parents('div.tab');
    var tab_id = '#' + tab[0].id;
    tab.next().toggleClass('open');

    $('html, body').animate({
      scrollTop: $(tab_id).offset().top - 60
    }, 500);

    return false;
  });

  $(".title_animate").lettering();

  window.setTimeout( animation, 2600 ); // 5 seconds


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
        }
      }
    }); 
    rev1.reveal();
  });
  scene1.addTo(controller);

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
        }
      }
    }); 
    rev2.reveal();
  });
  scene2.addTo(controller);

  //Parallax
  
  var screenSize = $( window ).width();
  console.log(screenSize);

  if ((screenSize>768)) {
    var rellax_info = new Rellax('.info');
    var rellax_info_img= new Rellax('.info_img');
    var rellax_form = new Rellax('.form_info');
  }


});


/*------------------*/


//floating letters
var app = {

  chars: ['[',']','*','+','{','}',';','/','"','#','_','-'],

  init: function () {
    app.container = document.createElement('div');
    app.container.className = 'animation-container';
    //document.body.appendChild(app.container);
    document.getElementById('numbers_animated').appendChild(app.container);
    window.setInterval(app.add, 100);
  },

  add: function () {
    var element = document.createElement('span');
    app.container.appendChild(element);
    app.animate(element);
  },

  animate: function (element) {
    var character = app.chars[Math.floor(Math.random() * app.chars.length)];
    var duration = Math.floor(Math.random() * 40) + 1;
    var offset = Math.floor(Math.random() * (1000 - duration * 2)) + 3;
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


/*------------------*/


function animation() {
  var title1 = new TimelineMax();
  title1.staggerFromTo(".title_animate span", 1, 
  {ease: Back.easeOut.config(1), opacity: 0, bottom: -50},
  {ease: Back.easeOut.config(0), opacity: 1, bottom: 0}, 0.05);
}


/*------------------*/


// Smooth scroll animation
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