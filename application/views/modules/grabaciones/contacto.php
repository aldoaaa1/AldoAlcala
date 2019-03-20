<div class="container-flex" id="contacto">
	<div class="container">
		<div class="col-lg-6">
			<div style="height: 25px;"></div>
			<h3>¡Mándame un mensaje!</h3>
			<p>Si tienes algo en mente y crees que puedo apoyarte, puedes contar conmigo, sólo cuéntame tu idea. ¡Nos ponemos de acuerdo!</p>
			<form action="">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Nombre: </span>
					</div>
					<input class="form-control" type="text" id="nombre_email">
				</div>
				<div style="height: 10px;"></div>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Correo:</span>
					</div>
					<input class="form-control" type="text" id="correo_email">
				</div>
				<div style="height: 10px;"></div>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Mensaje</span>
					</div>
					<textarea class="form-control" id="mensaje_email" cols="30" rows="5"></textarea>
				</div>
				<div style="height: 10px;"></div>
				<input type="submit" class="form-control" id="sendEmail">
			</form>
			<div style="height: 25px;"></div>
		</div>
		<div class="col-lg-6">
			
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		// Funcion para enviar el mensaje
		$('#sendEmail').click(function(event){
			event.preventDefault()

			// DATOS REGISTRADOS DEL MENSAJE
			var email = new Object();
			email.asunto = $('#nombre_email').val();
			email.correo = $('#correo_email').val();
			email.mensaje = $('#mensaje_email').val();
			email.pagina = 'grabaciones';

			// ENVIO DE DATOS PARA ENVIAR EL MENSAJE
			$.post('<?=base_url()?>index.php/email/send2me', {email: email});
			Swal.fire({
			  type: 'success',
			  title: 'Tu mensaje ha sido enviado correctamente',
			  showConfirmButton: false,
			  timer: 1500
			})
		});
	});
</script>