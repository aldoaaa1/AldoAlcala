// LA VELOCIDAD DE LA ANIMACION DEL SCROLL DE LOS MENÚS
var velocidadScroll = 700;

function showLoader(){
	Swal.fire({
      html: '<div class="loader"><div></div><div></div><div></div><div></div></div>', showConfirmButton:false,
      allowEscapeKey:false, allowEnterKey:false, allowOutsideClick:false, keydownListenerCapture: true
    })
}
function closeLoader(){ Swal.close(); }

$(document).ready(function(){
    $(".fadeOnLoad").delay(300).fadeIn(1000)
});