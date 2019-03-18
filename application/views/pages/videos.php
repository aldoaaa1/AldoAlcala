<link rel="stylesheet" href="<?php echo (base_url().'assets/css/videos.css') ?>">
<nav class="navbar navbar-expand-md fixed-top navbar-light gb-light" style="background-color: hsla(200, 25%, 98%, 0.9);" id="nav1">
  <a class="navbar-brand" href="#">MENÚ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href=<?= base_url(); ?>>Página Principal</a>
      <a class="nav-item nav-link" href="#" id="trabajos_menu">Videos</a>
      <a class="nav-item nav-link" href="#" id="contacto_menu">Contáctame</a>
    </div>
  </div>
</nav>
<div class="container-flex parallax100 centrarObjetos" id="titulo1">
	<div class="container">
		<div class="tituloPrincipal">
			<h2>GALERÍA DE VIDEOS</h2>
			<p>¡Checa algunos videos que he realizado!</p>
		</div>
	</div>
</div>


<?php $this->load->view($modules_ubication.'/videos.php') ?>
<?php $this->load->view($modules_ubication.'/contacto.php') ?>