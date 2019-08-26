<link rel="stylesheet" href="assets/css/musica.css">
<main>
	<div style="height: 20px"></div>
	<div class="titulo_blanco1">
		<h3 style="font-size: 40px; color: var(--gray-dark); font-weight: 600;">¡Nueva Música Cristiana!</h3>
	</div>
	<div class="contenedor">
		<div style="width: 250px;" class="tarjeta">
			<div style="background-image: url(/assets/img/musica/isaac.jpg);"></div>
			<h5>Isaak Calderón</h5>
			<p style="color: white;">&nbsp&nbsp "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ea dicta odit mollitia illo consequuntur sapiente nostrum obcaecati, magni rem recusandae quisquam totam, eum tempora!"</p>
			<a href="#">VER SU CONTENIDO</a>
		</div>
		<div style="width: 250px;" class="tarjeta">
			<div style="background-image: url(/assets/img/musica/cesar.jpg);"></div>
			<h5>Cesar Sánchez</h5>
			<p style="color: white;">&nbsp&nbsp "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aspernatur iure, repellendus aliquid deleniti quasi, cum ullam, accusamus reprehenderit eligendi a quibusdam quos possimus, hic!"</p>
			<a href="#">VER SU CONTENIDO</a>
		</div>
		<div style="width: 250px;" class="tarjeta">
			<div style="background-image: url(/assets/img/musica/andy.jpg);"></div>
			<h5>Andy Rayas</h5>
			<p style="color: white;">&nbsp&nbsp "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat enim velit unde, quibusdam error possimus, voluptatibus voluptatum veniam animi, magni, repellendus vitae voluptates. Maiores, corporis!"</p>
			<a href="#">VER SU CONTENIDO</a>
		</div>
		<div style="width: 250px;" class="tarjeta">
			<div style="background-image: url(/assets/img/musica/aldo.jpg);"></div>
			<h5>Aldo Alcalá</h5>
			<p style="color: white;">&nbsp&nbsp "Estoy agradecido por todo lo que Dios me ha permitido hacer. Canto, toco y compongo porque sé que es para lo que El me hizo, y si de paso te gusta lo que hago... ¡Excelente!"</p>
			<a href="#">VER SU CONTENIDO</a>
		</div>
	</div>

	<!-- FORMULARIO DE SUBSCRIPCION A NUEVOS ARTISTAS O PROYECTOS -->
	<div class="formulario">
		<h4>¿Quieres recibir notificaciónes de nuevos proyectos?</h4>
		<p>¡Déjanos tu contacto para informarte en cuanto salga algo nuevo!</p>
		<input class="input1" id="musica_input_nombre" type="text" placeholder="Nombre">
		<input class="input1" id="musica_input_apellido" type="text" placeholder="Apellido">
		<input class="input1" id="musica_input_correo" type="text" placeholder="Correo Electrónico">
		<input class="submit1" id="musica_subs" type="submit" value="NOTIFICARME">
		<div class="hidden_space"></div>
	</div>
</main>

<!-- SE CARGAN LOS SCRIPTS ASINCRONOS -->
<script type="text/javascript" src="<?php echo (base_url().'assets/js/bootstrap.js') ?>" defer></script>
<script type="text/javascript" src="<?php echo (base_url().'assets/js/sweetalert2.js') ?>" defer></script>
<script type="text/javascript"src="<?php echo (base_url().'assets/js/general.js') ?>" defer></script>
<script type="text/javascript"src="<?php echo (base_url().'assets/js/registrar_visita.php') ?>" defer></script>
<script>var baseUrl="<?= base_url();?>"</script>
</body>
</html>

<script>

	$( "#musica_subs" ).click(function() {
		document.getElementById("musica_subs").disabled = true;

		if (!$("#musica_input_nombre").val() && !$("#musica_input_apellido").val() && !$("#musica_input_correo").val()) {
			Swal.fire({type: 'error', title: 'Ups...', keydownListenerCapture: true,
	      html: '<span class="text-danger">¡Necesitamos tus datos para seguir!</span><br><em>Porfavor, inténtalo de nuevo.</em>',
	      onClose: ()=>{document.getElementById("musica_subs").disabled = false; return false;}
	    }) 
		}
		if (!$("#musica_input_nombre").val()) {
			Swal.fire({type: 'error', title: '¡Ey!', keydownListenerCapture: true,
        html: '<span class="text-danger">¡Necesitas poner tu nombre!</span><br><em>Porfavor, inténtalo de nuevo.</em>',
        onClose: ()=>{document.getElementById("musica_subs").disabled = false; return false;}
      })
		}
		if (!$("#musica_input_apellido").val()) {
			Swal.fire({type: 'error', title: '¡Ey!', keydownListenerCapture: true,
        html: '<span class="text-danger">¡Necesitas poner tu apellido también!</span><br><em>Porfavor, inténtalo de nuevo.</em>',
        onClose: ()=>{document.getElementById("musica_subs").disabled = false; return false;}
      })
		}
		if (!$("#musica_input_correo").val()) {
			Swal.fire({type: 'error', title: '¡Ey!', keydownListenerCapture: true,
        html: '<span class="text-danger">No has puesto tu correo...</span><br><em>Porfavor, inténtalo de nuevo.</em>',
        onClose: ()=>{document.getElementById("musica_subs").disabled = false; return false;}
      })
		} else {
			if (!/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test($("#musica_input_correo").val())) {
				Swal.fire({type: 'error', title: '¡Ey!', keydownListenerCapture: true,
	        html: '<span class="text-danger">Tu dirección de correo: <span class="text-dark">'+ $("#musica_input_correo").val() +'</span> no es válido.</span><br><em>Porfavor, inténtalo de nuevo.</em>',
	        onClose: ()=>{document.getElementById("musica_subs").disabled = false; return false;}
	      })
			}
		}
		if ($("#musica_input_nombre").val() && $("#musica_input_apellido").val() && /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test($("#musica_input_correo").val())) {
			a = window.navigator; 
			b = window.screen; 
			 
			// DATOS REGISTRADOS DEL VISITANTE 
			var user = new Object(); 
			user.screenWidth = b.width; 
			user.screenHeight = b.height; 
			user.language = a.language; 
			user.vendor = a.vendor; 
			user.userAgent = a.userAgent; 
			user.ip = "<?= $_SERVER['REMOTE_ADDR'] ?>"; 
			user.paginaActual = document.URL;
			user.nombre = $("#musica_input_nombre").val();
			user.apellido = $("#musica_input_apellido").val();
			user.correo = $("#musica_input_correo").val();
			// REGISTRO EN BASE DE DATOS 
			$.post(baseUrl+'regsub', {'user': user});
			Swal.fire({type: 'success', title: '¡Excelente '+$("#musica_input_nombre").val()+'!', keydownListenerCapture: true,
	        html: '<span>¡Tu dirección de correo: <span class="text-dark">'+ $("#musica_input_correo").val() +'</span> se registró correctamente!</span>',
	        onClose: ()=>{return false;}
	      })
		}
	});

</script>