<div class="modal fade" id="modal_inicio_sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATOS DE INICIO SESIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=" <?= base_url().'index.php/acceso' ?> " method="post">
          	<div class="input-group">
			  <div class="input-group-prepend">
			    <span class="input-group-text">USUARIO</span>
			  </div>
			  <input class="form-control" name="usuario" autocomplete="off"></input>
			</div>
			<div style="height: 20px;"></div>
          	<div class="input-group">
			  <div class="input-group-prepend">
			    <span class="input-group-text">CONTRASEÑA</span>
			  </div>
			  <input class="form-control" type="password" name="password"></input>
			</div>
			<div style="height: 20px;"></div>
			<div class="input-group">
				<input style="width: 100%; height: 40px;" type="submit" value="ACCEDER A LA PLATAFORMA" class="stb btn-primary">
			</div>
        </form>
      </div>
  	</div>
  </div>
</div>
