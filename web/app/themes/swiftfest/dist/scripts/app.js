function animation(){var e=new TimelineMax;e.staggerFromTo(".title_animate span",1,{ease:Back.easeOut.config(1),opacity:0,bottom:-50},{ease:Back.easeOut.config(0),opacity:1,bottom:0},.05)}$(window).load(function(){$(".loading").fadeOut(50);var e=new RevealFx(document.querySelector("#rev-1"),{revealSettings:{bgcolor:"#2F2F2F",delay:550,onCover:function(e,t){e.style.opacity=1}}});e.reveal()}),$(document).ready(function(){$(".button-nav").click(function(){$(this).toggleClass("open"),$(".container-nav-mobile").toggleClass("open")}),$(".container-nav-mobile nav.mobile ul li a").click(function(){$(".button-nav").removeClass("open"),$(".container-nav-mobile").removeClass("open")}),$(".radio-select label").click(function(){$(".radio-select label").removeClass("selected"),$(this).addClass("selected")}),$(".social_text").click(function(){$(this).toggleClass("open"),$(".social_container").toggleClass("open")}),$(".tab_button").click(function(){$(this).toggleClass("open");var e=$(this).parents("div.tab"),t="#"+e[0].id;return e.next().toggleClass("open"),$("html, body").animate({scrollTop:$(t).offset().top-60},500),!1}),$(".title_animate").lettering(),animation()}),WebFontConfig={google:{families:["Montserrat:300,400,700"]}},function(){var e=document.createElement("script");e.src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",e.type="text/javascript",e.async="true";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}();var app={chars:["[","]","*","+","{","}",";","/",'"',"#","_","-"],init:function(){app.container=document.createElement("div"),app.container.className="animation-container",document.getElementById("animated_hero").appendChild(app.container),window.setInterval(app.add,100)},add:function(){var e=document.createElement("span");app.container.appendChild(e),app.animate(e)},animate:function(e){var t=app.chars[Math.floor(Math.random()*app.chars.length)],a=Math.floor(40*Math.random())+1,n=Math.floor(Math.random()*(100-2*a))+3,o=100+(15-a);e.style.cssText="right:"+n+"vw; font-size:"+o+"px;animation-duration:"+a+"s",e.innerHTML=t,window.setTimeout(app.remove,1e3*a,e)},remove:function(e){e.parentNode.removeChild(e)}};document.addEventListener("DOMContentLoaded",app.init);
//# sourceMappingURL=app.js.map
