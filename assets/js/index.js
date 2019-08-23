var navOffset = $("#nav1").outerHeight(true);

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
      scrollTop: $("#servicios").offset().top - navOffset
  }, velocidadScroll);
});