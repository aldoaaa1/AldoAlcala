<link rel="stylesheet" href="<?php echo (base_url().'assets/css/grabaciones.css') ?>">
<nav class="navbar navbar-expand-md fixed-top navbar-light gb-light" style="background-color: hsla(200, 25%, 98%, 0.9);" id="nav1">
  <a class="navbar-brand" href="#">MENÚ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href=<?= base_url(); ?>>Página principal</a>
      <a class="nav-item nav-link" href="#" id="trabajos_menu">Trabajos que ofrezco</a>
      <a class="nav-item nav-link" href="#" id="realizados_menu">Trabajos realizados</a>
      <a class="nav-item nav-link" href="#" id="forma_menu">Forma de trabajo</a>
      <a class="nav-item nav-link" href="#" id="referencias_menu">Referencias</a>
      <a class="nav-item nav-link" href="#" id="contacto_menu">Contáctame</a>
    </div>
  </div>
</nav>
<div class="container-flex parallax100 centrarObjetos" id="titulo1">
	<div class="container">
		<div class="tituloPrincipal">
			<h2>¡TÚ INTERPRETA!...</h2>
			<h2>A mí déjame lo demás.</h2>
			<p>Si tienes algun proyecto que quieres grabar. <br>¡Yo puedo ayudarte!</p>
		</div>
	</div>
</div>

<?php $this->load->view($modules_ubication.'trabajos') ?>
<?php $this->load->view($modules_ubication.'realizados') ?>
<?php $this->load->view($modules_ubication.'forma') ?>
<?php $this->load->view($modules_ubication.'referencias') ?>
<?php $this->load->view($modules_ubication.'contacto') ?>

<script type="text/javascript"src="<?php echo (base_url().'assets/js/grabaciones.js') ?>"></script>