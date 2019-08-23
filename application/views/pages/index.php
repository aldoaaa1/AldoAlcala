<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2"></script>
<link rel="stylesheet" href="<?php echo (base_url().'assets/css/index.css') ?>">
<nav class="navbar navbar-expand-md fixed-top navbar-light gb-light" style="background-color: hsla(200, 25%, 98%, 0.75);" id="nav1">
  <span class="navbar-brand">MENÚ</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#" id="servicios_link">Servicios</a>
      <a class="nav-item nav-link" href="#" id="referencias_link">Referencias</a>
      <a class="nav-item nav-link" href="#" id="sobre_mi_link">Acerca de mí</a>
      <a class="nav-item nav-link" href="<?php echo (base_url().'musica') ?>" id="">Música</a>
      <a class="nav-item nav-link" href="<?=base_url();?>index.php/descargas" >Descargas</a>
    </div>
    <!-- SE AGREGARA EL INICIO DE SESIÓN CUANDO LA APP ESTÉ LISTA -->
	<!-- <div class="navbar-nav btn_inicio_sesion">
		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modal_inicio_sesion">
		  INICIAR SESIÓN
		</button>
	</div> -->
  </div>
</nav>
<div class="container-flex parallax100 centrarObjetos" id="titulo1">
	<div class="container">
		<div class="tituloPrincipal">
			<!-- SE CARGA EL LOGO Y SE LE MODIFICA EL TAMAÑO POR CSS -->
			<?php $this->load->view('templates/logo_completo') ?>
			<p style="color: var(--gray); font-size: 15px; margin-top: -5px;">¡BIENVENIDO!</p>
		</div>
	</div>
</div>
<!-- ELIMINAR LA PARTE DE BIENVENIDA -->
<!-- <div class="container-flex bienvenida parallax75 centrarObjetos">
	<div class="container">
		<div>
			<h3 class="titulo1">¡Bienvenido a mi página!</h3>
			<p class="text-justify" style="margin-bottom: 25px;">&nbsp&nbsp 
			¡Aclaremos algo! Esta página fue creada para ayudarte a solucionar tus problemas en audio. Te aseguro que tengo experiencia en el campo de la producción musical, aqui te muestro algo de lo que he realizado, recomendaciones de mis amigos y clientes; estoy seguro de que entre tu experiencia y la mía podremos hacer que todo fluya y funcione de maravilla. Porfavor, no olvides visitarme y regalarme un like en facebook. De antemano ¡Te lo agradezco!
			</p>
		</div>
	</div>
</div> -->
<?php $this->load->view($modules_ubication.'servicios') ?>
<?php $this->load->view($modules_ubication.'referencias') ?>
<?php $this->load->view($modules_ubication.'sobre_mi') ?>

<script>
	$(document).ready(function(){
		$('#videos_link').click(function(){
			window.location = '<?php echo base_url(); ?>videos'
	    });
	    $('#grabaciones_link').click(function(){
	    	window.location = '<?php echo base_url(); ?>grabaciones'
	    });
	    $('#trabajo_link').click(function(){
	      	window.location = '<?php echo base_url(); ?>trabajo'
	    });
	    $('#cursos_link').click(function(){
	    	window.location = '<?php echo base_url(); ?>cursos'
	    });
	});
</script>

<!-- MODALS -->
<?php $this->load->view($modules_ubication.'modal_inicio_sesion') ?>

<script type="text/javascript"src="<?php echo (base_url().'assets/js/index.js') ?>" async></script>