<div class="container-flex" id="footer">
	<div style="height: 10px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md">
				<p class="text-center">Mezcla y Master Profesional</p>
				<p class="text-center">Presupuesto Sin Compromiso</p>
				<p class="text-center">Trabajo Garantizado</p>
			</div>
			<div class="col-md">
				<p class="text-center">REDES SOCIALES</p>
				<p class="text-center">Visitar mi Facebook</p>
				<p class="text-center">Youtube - Aldo Alcalá</p>
			</div>
			<div class="col-md">
				<p class="text-center">San Nicolás de los Garza</p>
				<p class="text-center">Nuevo León, CP 66475</p>
				<p class="text-center">aldo.aaa1@gmail.com</p>
			</div>
		</div>
	</div>
	<div style="height: 10px;"></div>
</div>

	<!-- FUNCION PARA MANDAR ESTADISTICAS DE VISITAS A LA PAGINA -->
	<script>
		$(document).ready(function(){
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
			user.paginaActual = "<?= $_SERVER['PHP_SELF'] ?>";

			// REGISTRO EN BASE DE DATOS
			$.post('<?=base_url()?>index.php/a', {user: user});
		});
	</script>
	<script type="text/javascript"src="<?php echo (base_url().'assets/js/bootstrap.js') ?>"></script>
</body>
</html>
