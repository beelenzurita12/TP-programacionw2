<div class="container"> 
    <div class="row">

      <div class="card mb-3 product-info" style="max-width: 50vw;">
        <div class="row no-gutters">
          <div class="col-sm-3">
            <img src="<?php echo $GLOBALS["root"] . "public/upload/" . $data[0]["imagen"] ?>" width="90%" class="card-img" alt="">
          </div>
          <div class="col-md-9 product-text">
            <div class="card-body">
              <h5 class="card-title"><b><?php echo $data[0]["nombreProducto"] ?></b></h5>
              <p class="card-text"><?php echo $data[0]["descripcion"] ?></p>
              <p class="card-text"><small class="text-muted">Agregado el <?php echo $data[0]["fecha"] ?></small></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <div class="row">

      <div class="card mb-3 product-info" style="max-width: 50vw;">
        <div class="row no-gutters">
          <div class="col-md-2">
            <img src="<?php echo $GLOBALS["root"] . "public/image/man.png"  ?>" width="90%" class="card-img img-user" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title"><b>Información del vendedor</b></h5>
              <p class="card-text"><b>Nombre: </b> <?php echo $data[0]["nombre"] . " " . $data[0]["apellido"]?></p>
              <p class="card-text"><b>Teléfono: </b><?php echo $data[0]["telefono"] ?></p>
              <p class="card-text"><b>Correo: </b><?php echo $data[0]["email"] ?></p>
              <p class="card-text"><b>Forma de Entrega: </b><?php echo $data[0]["formaDeEntrega"] ?></p>
            </div>
          </div>
        </div>
      </div>

		</div>

		<hr/>

		<div class="row">
			<div class="col-sm-offset-2">
				<h2>¡Contacta con el vendedor!</h2>
			</div>
		</div>

      <!-- sección de comentario -->
    <div class="row">
			<div class="card-body px-0 coment">
				<form action="<?php echo $GLOBALS['root'] . 'comentarios/mensajeCompra'?>" method="post">
					<input type="text" name="idCompra" value="<?php echo $data[0]['idCompra'] ?>" hidden/>
					<input type="text" name="idUsuarioReceptor" value="<?php echo $data[0]['idUsuario'] ?>" hidden/>
					<textarea class="md-textarea form-control" rows="3" name="mensaje" placeholder="Escribe tu pregunta..."></textarea>
					<div class="d-flex justify-content-end mt-3">
						<button type="button" class="btn btn-flat btn-sm waves-effect" aria-expanded="true">Cancelar</button>
						<button type="submit" class="btn btn-success btn-sm mr-0" aria-expanded="true">Enviar</button>
					</div>
				</form>
			</div>
    </div>

    <div class="row">
        <div class="col-md-5 col-sm-offset-7">
            <button class="btn btn-primary" id="calificar">Calificar</button>
        </div>
    </div>

</div>
<script src="<?php echo $GLOBALS["root"] . "public/JS/modalCalificar.js" ?>"></script>