
$('#clave_descarga').on('focusout', function() {
	if ($('#clave_descarga').val().length >0) {
		$('#label_clave').addClass("label-focus");
		$(this).addClass("input-focus");
	} else{
		$('#label_clave').removeClass("label-focus");
		$(this).removeClass("input-focus");
	}
});