$(document).ready(function(){

	setInterval(function(){
		var element = document.getElementById("cursos_link");
  		element.classList.toggle("parpadeo");
  	}, 700 );

    var navOffset = $("#nav1").outerHeight(true);

    $('#pagina_principal_link').click(function(){
      $('html, body').animate({
          scrollTop: $('#titulo1').offset().top
      }, 1000);
    });
  	$('#sobre_mi_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#sobre_mi").offset().top - navOffset
	    }, 1000);
  	});
  	$('#referencias_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#referencias").offset().top - navOffset
	    }, 1000);
  	});
  	$('#servicios_link').click(function(){
  		$('html, body').animate({
	        scrollTop: $("#servicios").offset().top
	    }, 1000);
  	});
});