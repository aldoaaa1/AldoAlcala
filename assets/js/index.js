$(document).ready(function(){

	setInterval(function(){
		var element = document.getElementById("servicios_tutoriales");
  		element.classList.toggle("parpadeo");
  	}, 700 );

  	$('#sobre_mi_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#sobre_mi").offset().top
	    }, 1000);
  	});
  	$('#referencias_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#referencias").offset().top
	    }, 1000);
  	});
  	$('#servicios_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#servicios").offset().top
	    }, 1000);
  	});

});