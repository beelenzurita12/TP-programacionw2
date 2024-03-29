<div class="container post-container">
	<div class="full-width div-table-row">
		<div class="div-table-cell div-table-cell-xs">
			<a href="<?php echo $GLOBALS['root'] . "resultados_de_busqueda/" ?>" class="btn btn-default btn-block"><i class="fa fa-angle-left" aria-hidden="true"></i> Volver al listado</a>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-xs-12 col-sm-8">
			<div id="slider-commercial" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-commercial" data-slide-to="0" class="active"></li>
					<li data-target="#slider-commercial" data-slide-to="1" class=""></li>
					<li data-target="#slider-commercial" data-slide-to="2" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php
					
						$carousel = "";

						for($i = 0; $i < sizeof($data['imagen']); $i++){

							if($i == 0){
								$isActive = "active";
							
							} else {
								$isActive = "";
							}

							$imagenUrl = $GLOBALS['root'] . "public/upload/" . $data['imagen'][$i];

		                    $carousel .= '<div class="carousel-item ' . $isActive . '" style="background-image: url(' . $imagenUrl . ')"></div>';

						}

						echo $carousel;
					?>
				</div>
				<a class="carousel-control-prev" href="#slider-commercial" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slider-commercial" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
				</a>
			</div>
			<div class="mt-2">
				<p class="lead text-justify">
					<strong> <?php echo $data['descripcion']; ?></strong>
				</p>
				<p class="lead">
					<strong>Publicado: <?php echo $data['fecha_publicacion']; ?></strong>
				</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="full-width" style="padding:10px; background-color: #F5F5F5;">
				<p class="lead text-center"><strong><?php echo $data['nombre']; ?></strong></p>
				<p class="lead text-center" style="color: #F09000;"><strong>$<?php echo $data['precio'] ?></strong></p>
			</div>
			<div class="full-width post-user-info">
				<div>
					<p class="full-width lead"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> <?php echo $data['localidad']; ?></p>
					<p class="full-width lead"><i class="glyphicon glyphicon-ok-circle" aria-hidden="true"></i> Cantidad disponible: <?php echo $data['cantidad']; ?></p>
					<p class="full-width lead">Calificación del usuario:
						<?php
							for($i = 0; $i < round($data['calificacion']); $i++){
								echo '<i class="fas fa-star" style="color:#efb810 ;"></i>';
							}
						?>
					</p>
				</div>
			</div>
			<?php 
				if($data["mismoUsuario"]){
					echo '<a href="' . $GLOBALS['root'] . 'producto/index?id=' . $data['idProducto'] . '" class="btn btn-success btn-block">Editar</a>';
					echo '<a href="' . $GLOBALS['root'] . 'producto/eliminar?id=' . $data['idProducto'] . '" class="btn btn-success btn-block" data-toggle="modal" data-target="#optionEliminar">Eliminar</a>';
					
					
				} else {
					$estaDisabled = $data["cantidad"] == 0  ? "disabled" : "";

					echo '<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#optionComprarAhora" '. $estaDisabled .'>Comprar ahora</button>';
					echo '<a href="' . $GLOBALS['root'] . 'carrito_de_compras/agregar?idProducto='. $data['idProducto'] . '" class="btn btn-success btn-block">Agregar al carrito <i class="fas fa-shopping-cart"></i></a>';
				}
			?>
		</div>
	</div>
	<section class="my-5">
    	<div class="classic-tabs">
			<h2 class="title-section-h2">Productos relacionados</h2>
      		<div class="card py-3 px-4">
			  	<div class="full-width">
				  <?php 
					if(sizeof($data["productosRelacionados"]) == 0){
						$productoRelacionado = "<h2>No hay productos relacionados por el momento.</h2>";
					} else {
						for($i = 0 ; $i < sizeof($data["productosRelacionados"]); $i++){
							$productoRelacionado = '
							  <div class="full-width post">
								<figure class="full-width post-img">
									<img src="'. $GLOBALS['root'] . "public/upload/" . $data["productosRelacionados"][$i]["imagen"] .'" alt="" class="img-responsive">
								</figure>
								<div class="full-width post-info">
									<a href="'. $GLOBALS['root'] . 'post/index?idProducto='. $data["productosRelacionados"][$i]["idProducto"] .'" class="full-width post-info-title">'. $data["productosRelacionados"][$i]["nombre"] .'</a>
									<p class="full-width post-info-price">'. $data["productosRelacionados"][$i]["precio"] .'</p>
									<i class="far fa-heart post-info-like"></i>
								</div>
							</div>';
					}
						echo $productoRelacionado;
					}
				  ?>
				</div>
        	</div>
      	</div>
	</section>
	<section class="my-5">
    	<div class="classic-tabs">
			<h2 class="title-section-h2">Comentarios</h2>
      		<div class="card py-5 px-4">		
			  <?php

					for($i = 0; $i < sizeof($data["comentarios"]); $i++){
						$comentario = 
							'<div class="tab-pane fade active show my-2" role="tabpanel" aria-labelledby="comments-tab-classic">
								<div class="media">
									<img class="avatar mr-3" src=" ' . $GLOBALS['root'] . "public/image/man.png" . '" alt="User">
									<div class="media-body">
										<div class="d-flex justify-content-between">
											<h5 class="mt-0 mb-1 font-weight-bold">' . $data["comentarios"][$i]["nombre"] . ' ' . $data["comentarios"][$i]["apellido"] . '</h5>
											<ul class="list-unstyled mb-1 pb-2">
												<li class="comment-date font-small font-weight-normal"><i class="far fa-clock pr-2"></i>' . $data["comentarios"][$i]["fechaPublicacion"] . '</li>
											</ul>
										</div>
										<p class="font-weight-light mt-2 mb-4">' . $data["comentarios"][$i]["comentario"] . '</p>
									</div>
								</div>
							</div>';
						
						echo $comentario;
					}
				?>
        	</div>
			<div>
				<div class="card-body px-0">
					<form action="<?php echo $GLOBALS['root'] . 'comentarios/enviar'?>" method="post">
						<input type="text" name="idProducto" value="<?php echo $data['idProducto'] ?>" hidden/>
						<textarea class="md-textarea form-control" rows="3" name="comentario" placeholder="Añadir un comentario..."></textarea>
						<div class="d-flex justify-content-end mt-3">
							<button type="submit" class="btn btn-success btn-sm mr-0" aria-expanded="true">Enviar</button>
						</div>
					</form>
				</div>
			</div>
      	</div>
	</section>
</div>

<!-- Modal: Eliminar -->
<div class="modal fade" id="optionEliminar" tabindex="-1" role="dialog" aria-labelledby="optionEliminarTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header m-1">
        <h5 class="modal-title" id="optionEliminarTitle">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <form action="<?php echo $GLOBALS["root"] . "producto/eliminar?id=" . $data["idProducto"] . "" ?>" method="post">
			<div class="form-group">
              <label class="col-form-label">¿Está seguro de que desea eliminar este producto?</label>
          	</div>
		  	<div class="modal-footer">
				<button type="submit" class="btn btn-success">Aceptar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		  	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Comprar ahora -->
<div class="modal fade" id="optionComprarAhora" tabindex="-1" role="dialog" aria-labelledby="optionComprarAhoraTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header m-1">
        <h5 class="modal-title" id="optionComprarAhoraTitle">Comprar ahora</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $GLOBALS["root"] . "compra/producto" ?>" method="post">
		  	<input type="number" name="idProducto" class="form-control" value="<?php echo $data["idProducto"] ?>" hidden>
          	<div class="form-group">
            	<label for="cantidadProd" class="col-form-label">¿Cuantos productos desea comprar?</label>
            	<input type="number" name="cantidad" class="form-control" id="cantidadProd">
          	</div>
          	<div class="form-group">
              <label class="col-form-label">¿Cómo desea recibir el producto?</label>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" value="Entrega a domicilio" name="entrega" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Entrega a domicilio</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="entrega" value="Retiro en sucursal" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Retiro en sucursal</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="entrega" value="A acordar con el vendedor" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">A acordar con el vendedor</label>
              </div>
          	</div>
		  	<div class="modal-footer">
				<button type="submit" class="btn btn-success">Comprar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		  	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo $GLOBALS["root"] . "public/JS/modal.js" ?>"></script>