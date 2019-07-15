<div class="container mt-4">
  <div class="row">
    <div class="card mb-3 product-info" style="max-width: 50vw;">
      <div class="row no-gutters">
        <div class="col-sm-3 text-center">
          <img src="<?php echo $GLOBALS["root"] . "public/upload/" . $data[0]["imagen"] ?>" width="90%" class="m-3" alt="Img">
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
        <div class="col-md-2 text-center">
          <img src="<?php echo $GLOBALS["root"] . "public/image/man.png" ?>" class="img-user my-3 mx-5" alt="User">
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

  <!-- Contacto con el vendedor -->
  <div class="row mx-2">
    <h2>¡Contacta con el vendedor!</h2>
    <div class="card-body px-0 coment">
      <form action="<?php echo $GLOBALS['root'] . 'comentarios/mensajeCompra'?>" method="post">
        <input type="text" name="idCompra" value="<?php echo $data[0]['idCompra'] ?>" hidden/>
        <input type="text" name="idUsuarioReceptor" value="<?php echo $data[0]['idUsuario'] ?>" hidden/>
        <textarea class="md-textarea form-control" rows="3" name="mensaje" placeholder="Escribe tu pregunta..."></textarea>
        <div class="d-flex justify-content-end mt-3">
          <button type="submit" class="btn btn-success btn-sm mr-0" aria-expanded="true">Enviar</button>
        </div>
      </form>
    </div>
  </div>

  <div class="mx-2">
    <button class="btn btn-primary" id="calificar">Calificar</button>
  </div>

</div>
<script src="<?php echo $GLOBALS["root"] . "public/JS/modalCalificar.js" ?>"></script>