$(window).load(function() {
  // Animate loader off screen
  $(".loading").fadeOut(500);
  // Block reveal
  var rev1 = new RevealFx(document.querySelector('#rev-1'), {
    revealSettings : {
      bgcolor: '#ffffff',
      onCover: function(contentEl, revealerEl) {
        contentEl.style.opacity = 1;
      }
    }
  });
  rev1.reveal();

  var rev2 = new RevealFx(document.querySelector('#rev-2'), {
    revealSettings : {
      bgcolor: '#ffffff',
      delay: 250,
      onCover: function(contentEl, revealerEl) {
        contentEl.style.opacity = 1;
      }
    }
  });
  rev2.reveal();

  var rev3 = new RevealFx(document.querySelector('#rev-3'), {
    revealSettings : {
      bgcolor: '#ffffff',
      delay: 500,
      onCover: function(contentEl, revealerEl) {
        contentEl.style.opacity = 1;
      }
    }
  }); 
  rev3.reveal();

  var rev4 = new RevealFx(document.querySelector('#rev-4'), {
    revealSettings : {
      bgcolor: '#2F2F2F',
      delay: 550,
      onCover: function(contentEl, revealerEl) {
        contentEl.style.opacity = 1;
      }
    }
  }); 
  rev4.reveal();
});

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
});

// Import font
WebFontConfig = {
  google: { families: [ 'Montserrat:300,400,700' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

//floating letters

'use strict';

var app = {

  chars: ['[',']','*','+','{','}',';','/','"','#','_','-'],

  init: function () {
    app.container = document.createElement('div');
    app.container.className = 'animation-container';
    //document.body.appendChild(app.container);
    document.getElementById('animated_hero').appendChild(app.container);
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
    var offset = Math.floor(Math.random() * (100 - duration * 2)) + 3;
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