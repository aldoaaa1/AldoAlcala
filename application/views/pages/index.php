<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2"></script>
<link rel="stylesheet" href="<?php echo (base_url().'assets/css/index.css') ?>">
<nav class="navbar navbar-expand-md fixed-top navbar-light gb-light" style="background-color: hsla(200, 25%, 98%, 0.9);" id="nav1">
  <a class="navbar-brand" href="#">MENÚ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#" id="pagina_principal_link">Página Principal</a>
      <a class="nav-item nav-link" href="#" id="sobre_mi_link">Sobre Mí</a>
      <a class="nav-item nav-link" href="#" id="referencias_link">Referencias</a>
      <a class="nav-item nav-link" href="#" id="servicios_link">Servicios</a>
      <a class="nav-item nav-link" href="#">¡DESCARGAS!</a>
    </div>
	<div class="navbar-nav btn_inicio_sesion">
		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modal_inicio_sesion">
	  INICIAR SESIÓN
	</button>
	</div>
  </div>
</nav>
<div class="container-flex parallax100 centrarObjetos" id="titulo1">
	<div class="container">
		<div class="tituloPrincipal">
			<!-- SE CARGA EL LOGO Y SE LE MODIFICA EL TAMAÑO POR CSS -->
			<?php $this->load->view('templates/logo_completo') ?>
			<div style="height: 1px;"></div>
			<div class="fb-like" data-href="https://www.facebook.com/aldomusica.mty/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			<p>¡Ayudame a darle like a mi página!</p>
			<!-- <p> <?php var_dump($_SESSION); ?> </p> -->
		</div>
	</div>
</div>
<div class="container-flex bienvenida parallax50 centrarObjetos">
	<div class="container">
		<div>
			<h3 class="titulo1">¡Bienvenido a mi página!</h3>
			<p class="text-center">
			¡Hola! Aquí podrás encontrar algunas de las cosas que he realizado y que estoy encantado de compartir contigo. ¡Espero que te guste tanto como yo disfrute hacerlas! Y no te olvides de visitarme y de paso regalarme un like en mi página de facebook!
			</p>
		</div>
	</div>
</div>
<?php $this->load->view($modules_ubication.'sobre_mi') ?>
<?php $this->load->view($modules_ubication.'referencias') ?>
<?php $this->load->view($modules_ubication.'servicios') ?>

<script>
	$(document).ready(function(){
		$('#videos_link').click(function(){
			window.location = '<?php echo base_url(); ?>index.php/videos'
	    });
	    $('#grabaciones_link').click(function(){
	    	window.location = '<?php echo base_url(); ?>index.php/grabaciones'
	    });
	    $('#trabajo_link').click(function(){
	      	window.location = '<?php echo base_url(); ?>index.php/trabajo'
	    });
	    $('#cursos_link').click(function(){
	    	window.location = '<?php echo base_url(); ?>index.php/cursos'
	    });
	});
</script>

<!-- MODALS -->
<?php $this->load->view($modules_ubication.'modal_inicio_sesion') ?>

<script type="text/javascript"src="<?php echo (base_url().'assets/js/index.js') ?>"></script>