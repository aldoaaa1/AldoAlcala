<div class="container-flex" id="footer">
	<div style="height: 10px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md md_hidden">
				<p class="text-center">Mezcla y Master Profesional</p>
				<p class="text-center">Presupuesto Sin Compromiso</p>
			</div>
			<div class="col-sm sm_hidden">
				<p class="text-center">Visítame en Facebook</p>
				<p class="text-center">y en youtube: Aldo Alcalá</p>
			</div>
			<div class="col-sm">
				<p class="text-center">San Nicolás de los Garza</p>
				<p class="text-center">Nuevo León</p>
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
			$.post('<?=base_url()?>index.php/reg', {user: user});
		});
	</script>
	<script type="text/javascript" src="<?php echo (base_url().'assets/js/bootstrap.js') ?>"></script>
	<script type="text/javascript" src="<?php echo (base_url().'assets/js/sweetalert2.js') ?>" ></script>
	<script type="text/javascript"src="<?php echo (base_url().'assets/js/general.js') ?>"></script>
</body>
</html>
