function animation(){var e=new TimelineMax;e.staggerFromTo(".title_animate span",1,{ease:Back.easeOut.config(1),opacity:0,bottom:-50},{ease:Back.easeOut.config(0),opacity:1,bottom:0},.05)}$(window).load(function(){function e(){$("body").addClass("page-loaded")}window.setTimeout(e,1200)}),$(document).ready(function(){$(".button-nav").click(function(){$(this).toggleClass("open"),$(".container-nav-mobile").toggleClass("open")}),$(".container-nav-mobile nav.mobile ul li a").click(function(){$(".button-nav").removeClass("open"),$(".container-nav-mobile").removeClass("open")}),$(".radio-select label").click(function(){$(".radio-select label").removeClass("selected"),$(this).addClass("selected")}),$(".social_text").click(function(){$(this).toggleClass("open"),$(".social_container").toggleClass("open")}),$(".tab_button").click(function(){$(this).toggleClass("open");var e=$(this).parents("div.tab"),n="#"+e[0].id;return e.next().toggleClass("open"),$("html, body").animate({scrollTop:$(n).offset().top-60},500),!1}),$(".title_animate").lettering(),window.setTimeout(animation,2600);var e=new ScrollMagic.Controller,n=new ScrollMagic.Scene({triggerElement:"#animation_1",offset:-200,reverse:!1,duration:0});n.on("enter",function(e){var n=new RevealFx(document.querySelector("#animation_1"),{revealSettings:{bgcolor:"#2F2F2F",delay:50,onCover:function(e,n){e.style.opacity=1,$(".animation_1_container").addClass("show")}}});n.reveal()}),n.addTo(e);var t=new ScrollMagic.Scene({triggerElement:"#animation_2",offset:-200,reverse:!1,duration:0});t.on("enter",function(e){var n=new RevealFx(document.querySelector("#animation_2"),{revealSettings:{bgcolor:"#2F2F2F",delay:50,onCover:function(e,n){e.style.opacity=1,$(".animation_2_container").addClass("show")}}});n.reveal()}),t.addTo(e);var a=$(window).width();if(console.log(a),a>768){new Rellax(".info"),new Rellax(".info_img"),new Rellax(".form_info")}});var app={chars:["[","]","*","+","{","}",";","/",'"',"#","_","-"],init:function(){app.container=document.createElement("div"),app.container.className="animation-container",document.getElementById("numbers_animated").appendChild(app.container),window.setInterval(app.add,90)},add:function(){var e=document.createElement("span");app.container.appendChild(e),app.animate(e)},animate:function(e){var n=app.chars[Math.floor(Math.random()*app.chars.length)],t=Math.floor(40*Math.random())+1,a=Math.floor(Math.random()*(500-2*t))+3,o=100+(15-t);e.style.cssText="right:"+a+"vw; font-size:"+o+"px;animation-duration:"+t+"s",e.innerHTML=n,window.setTimeout(app.remove,1e3*t,e)},remove:function(e){e.parentNode.removeChild(e)}};document.addEventListener("DOMContentLoaded",app.init),$(function(){$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}})}),WebFontConfig={google:{families:["Space+Mono:400,700"]}},function(){var e=document.createElement("script");e.src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",e.type="text/javascript",e.async="true";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)}();
//# sourceMappingURL=app.js.map
