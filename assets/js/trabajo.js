var navOffset = $("#nav1").outerHeight(true);

$('#trabajos_menu').click(function(){
  $('html, body').animate({
      scrollTop: $("#trabajos").offset().top - navOffset
  }, velocidadScroll);
});
$('#forma_trabajo_menu').click(function(){
  $('html, body').animate({
      scrollTop: $("#forma").offset().top - navOffset
  }, velocidadScroll);
});
$('#referencias_menu').click(function(){
	$('html, body').animate({
      scrollTop: $("#referencias").offset().top - navOffset
  }, velocidadScroll);
});
$('#contacto_menu').click(function(){
	$('html, body').animate({
      scrollTop: $("#contacto").offset().top - navOffset
  }, velocidadScroll);
});