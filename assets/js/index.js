$(document).ready(function(){

	setInterval(function(){
		var element = document.getElementById("cursos_link");
  		element.classList.toggle("parpadeo");
  	}, velocidadScroll );

    var navOffset = $("#nav1").outerHeight(true);

    $('#pagina_principal_link').click(function(){
      $('html, body').animate({
          scrollTop: $('#titulo1').offset().top
      }, velocidadScroll);
    });
  	$('#sobre_mi_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#sobre_mi").offset().top - navOffset
	    }, velocidadScroll);
  	});
  	$('#referencias_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#referencias").offset().top - navOffset
	    }, velocidadScroll);
  	});
  	$('#servicios_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#servicios").offset().top
	    }, velocidadScroll);
  	});
});