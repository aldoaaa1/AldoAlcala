$(document).ready(function(){

    var navOffset = $("#nav1").outerHeight(true);

    $('#trabajos_menu').click(function(){
      $('html, body').animate({
          scrollTop: $("#trabajos").offset().top - navOffset
      }, 1000);
    });
    $('#forma_trabajo_menu').click(function(){
      $('html, body').animate({
          scrollTop: $("#forma").offset().top - navOffset
      }, 1000);
    });
  	$('#referencias_menu').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#referencias").offset().top - navOffset
	    }, 1000);
  	});
  	$('#contacto_menu').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#contacto").offset().top - navOffset
	    }, 1000);
  	});
});