$(window).load(function(){ 

  for (var i = 0; i < 50; i++) {
    var names = ['x1','x2','y1','y2'],
        name = names[Math.floor(Math.random() * names.length)];
    $('.circles').append('<div class="circle-container c'+i+'"><div class="circle i'+ i +'"></div></div>');
    $('.c'+i).css({
      'animation': 'z 5s .'+ i +'s linear infinite'
    });
    $('.i'+i).css({
      'animation': name + ' 7.5s .'+ i +'s linear infinite'
    });
  }

  $(".intro_text").addClass("animation");
  $(".circle_custom_container").addClass("animation");

  function showloaderCynthia(){
    $("#body_transformation").addClass("page-loaded");
  }

  window.setTimeout( showloaderCynthia, 6000 ); // 5 seconds

});