var navOffset = $("#nav1").outerHeight(true);

$('#videos_menu').click(function(){
  $('html, body').animate({
      scrollTop: $("#videos").offset().top - navOffset
  }, velocidadScroll);
});
$('#contacto_menu').click(function(){
	$('html, body').animate({
      scrollTop: $("#contacto").offset().top - navOffset
  }, velocidadScroll);
});