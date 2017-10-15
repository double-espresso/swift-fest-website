$(window).load(function() {

  var SW = new SiriWave({
    style: 'ios9',
    speed: 0.08,
    amplitude: 0.7,
    container: document.getElementById('siri_wave'),
    autostart: true,
  });

	var screenSize = $( window ).width();
  var templateUrl = object_name.templateUrl;
  var audio = new Audio(templateUrl + '/dist/audio/siri.mp3');

	//console.log(templateUrl); 

  audio.addEventListener('canplaythrough', function() { 
    $('.inner').addClass('inner_show');
    $('#loading').addClass('hide');

		if ((screenSize>1023)) {
	    setTimeout(function(){
	    	$('.headphone_hint').addClass("hide");
	    },2000);
	    setTimeout(function(){
		    $(".intro_text").addClass("animation");
		    $("#siri_wave").addClass("siri_animation");
		    audio.play();
		    window.setTimeout( showloaderSiri, 20000 ); // 5 seconds
	    },2500);
		};
  }, false);

  $(".play_animation").click(function(){
    $(this).addClass("hide");
    $('.headphone_hint').addClass("hide");
    $(".intro_text").addClass("animation");
    $("#siri_wave").addClass("siri_animation");
    audio.play();
    window.setTimeout( showloaderSiri, 20000 ); // 5 seconds
  });

  function showloaderSiri(){
    $("#body_siri").addClass("page-loaded");
  }

  $(".skip").click(function(){
    $("#body_siri").addClass("page-loaded");
    audio.pause(); // Stop playing
    audio.stop(); // Stop playing
  });

});