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

    <?php
      for($i = 0; $i < sizeof($data["mensajes"]); $i++){
        $mensaje = '<div class="tab-pane fade active show my-2" role="tabpanel" aria-labelledby="comments-tab-classic">
                      <div class="media">
                        <img class="avatar mr-3" src=" ' . $GLOBALS['root'] . "public/image/man.png" . '" alt="User">
                        <div class="media-body">
                          <div class="d-flex justify-content-between">
                            <h5 class="mt-0 mb-1 font-weight-bold">' . $data["mensajes"][$i]["nombre"] . ' ' . $data["mensajes"][$i]["apellido"] . '</h5>
                            <ul class="list-unstyled mb-1 pb-2">
                              <li class="comment-date font-small font-weight-normal"><i class="far fa-clock pr-2"></i>' . $data["mensajes"][$i]["fechaMensaje"] . '</li>
                            </ul>
                          </div>
                          <p class="font-weight-light mt-2 mb-4">' . $data["mensajes"][$i]["mensaje"] . '</p>
                        </div>
                      </div>
                    </div>';
        echo $mensaje;
      }
    
    ?>

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
    <?php
      if($data["realizoCalificacion"]){
        $calificar = "";

      } else {
        $calificar = '<button type="button" class="btn btn-primary mr-4" data-toggle="modal" data-target="#optionCalificar">
                        Calificar
                      </button>';
      }

      echo $calificar;
    ?>
  </div>

</div>

<!-- Modal: Calificar -->
<div class="modal fade" id="optionCalificar" tabindex="-1" role="dialog" aria-labelledby="optionCalificarTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header m-1">
        <h5 class="modal-title" id="optionCalificarTitle">Calificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $GLOBALS["root"] . "calificar/calificarUsuario"?>" method="post">
          <div class="form-group">
            <input type="text" name="idCompra" value="<?php echo $data[0]["idCompra"] ?>" hidden/>
            <input type="text" name="idProducto" value="<?php echo $data[0]["idProducto"] ?>" hidden/>
            <input type="text" name="idVendedor" value="<?php echo $data[0]["idUsuario"] ?>" hidden/>
            <label for="dejaComent" class="col-form-label">Deja tu comentario:</label>
            <textarea class="form-control" name="comentario" id="dejaComent"></textarea>
          </div>
          <div class="form-group">
              <label class="col-form-label">Seleccione una opción para calificar al vendedor, teniendo en cuenta que va de 1 para "Muy mal vendedor" a 5 para "Muy buen vendedor":</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio1" name="calificacion" value="1" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">1</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio2" name="calificacion" value="2" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">2</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio3" name="calificacion" value="3" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">3</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio4" name="calificacion" value="4" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">4</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio5" name="calificacion" value="5" class="custom-control-input">
                <label class="custom-control-label" for="customRadio5">5</label>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-success">Calificar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo $GLOBALS["root"] . "public/JS/modalCalificar.js" ?>"></script>