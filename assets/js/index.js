$(document).ready(function(){

	setInterval(function(){
		var element = document.getElementById("servicios_tutoriales");
  		element.classList.toggle("parpadeo");
  	}, 700 );

  	$('#sobre_mi_link').click(function(){
  		alert('Si jala');
  	});

});