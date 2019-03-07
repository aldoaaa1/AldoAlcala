<link rel="stylesheet" href="<?php echo (base_url().'assets/css/index.css') ?>">
<div class="container parallax100 centrarObjetos" id="titulo1">
	<div class="tituloPrincipal">
		<h1 class="text-white">Aldo Alcalá</h1>
		<h2 class="text-white">Mezcla y Master Profesional</h2>
		<div class="fb-like" data-href="https://www.facebook.com/aldomusica.mty/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
		<p class="text-white">¡Ayudame a darle like a mi página y seamos más!</p>
		<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">MENÚ</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="#">Página Principal<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#" id="sobre_mi_link">Sobre Mí</a>
		      <a class="nav-item nav-link" href="#" id="referencias_link">Referencias</a>
		      <a class="nav-item nav-link" href="#" id="servicios_link">Servicios</a>
		    </div>
		  </div>
		</nav>
	</div>		
</div>
<div class="container bienvenida parallax50 centrarObjetos">
	<div>
		<h3 class="titulo1">¡Bienvenido a mi página!</h3>
		<p class="text-center">
		¡Hola! Aquí podrás encontrar algunas de las cosas que he realizado y que estoy encantado de compartir contigo. ¡Espero que te guste tanto como yo disfrute hacerlas! Y no te olvides de visitarme y de paso regalarme un like en mi página de facebook!
		</p>
	</div>
</div>
<?php $this->load->view($modules_ubication.'sobre_mi') ?>
<?php $this->load->view($modules_ubication.'referencias') ?>
<?php $this->load->view($modules_ubication.'servicios') ?>

<script type="text/javascript"src="<?php echo (base_url().'assets/js/index.js') ?>"></script>