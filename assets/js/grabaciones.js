$(document).ready(function(){

    var navOffset = $("#nav1").outerHeight(true);

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