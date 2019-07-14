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
					<p class="full-width lead"><i class="fas fa-user" aria-hidden="true"></i> <?php echo $data['nombreUsuario']; ?></p>
					<p class="full-width lead"><i class="fas fa-mobile" aria-hidden="true"></i> {{12345678}}</p>
				</div>
			</div>
			<?php 
				if($data["mismoUsuario"]){
					echo '<a href="' . $GLOBALS['root'] . 'producto/index?id=' . $data['idProducto'] . '" class="btn btn-success btn-block">Editar</a>';
					echo '<a href="' . $GLOBALS['root'] . 'producto/eliminar?id=' . $data['idProducto'] . '" class="btn btn-success btn-block">Eliminar</a>';
					
				} else {
					echo '<a href="" id="compra" class="btn btn-success btn-block">Comprar ahora</a>';
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
						$productoRelacionado = "<h2><i>No hay productos relacionados por el momento</i></h2>";

					} else {
						for($i = 0 ; $i < sizeof($data["productosRelacionados"]); $i++){
							$productoRelacionado = '
							  <div class="full-width post">
								<figure class="full-width post-img">
									<img src="'. $GLOBALS['root'] . "public/upload/" . $data["productosRelacionados"][$i]["imagen"] .'" alt="" class="img-responsive">
								</figure>
								<div class="full-width post-info">
									<a href="/post/index?idProducto='. $data["productosRelacionados"][$i]["idProducto"] .'" class="full-width post-info-title">'. $data["productosRelacionados"][$i]["nombre"] .'</a>
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
						'<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="comments-tab-classic">
							<div class="media">
								<img class="avatar mr-3" src=" ' . $GLOBALS['root'] . "public/image/man.png" . '" alt="User">
								<div class="media-body">
								<div class="d-flex justify-content-between">
									<h5 class="mt-0 mb-1 font-weight-bold">' . $data["comentarios"][$i]["nombre"] . ' ' . $data["comentarios"][$i]["apellido"] . '</h5>
									<ul class="list-unstyled mb-1 pb-2">
										<li class="comment-date font-small font-weight-normal"><i class="far fa-clock pr-2"></i>' . $data["comentarios"][$i]["fechaPublicacion"] . '</li>
									</ul>
								</div>
								<p class="font-weight-light mt-2 mb-4">' . $data["comentarios"][$i]["comentario"] . '</p>';
					
					$responder = 
					'<div>
						<button type="button" class="btn btn-success btn-sm" data-toggle="collapse" href="#collapseExample-'.$i.'" aria-expanded="false" aria-controls="collapseExample-'.$i.'"><i class="fas fa-share pr-1"></i>Responder</button>
						<div class="collapse" id="collapseExample-'.$i.'">
							<div class="card-body px-0">
								<form action="' . $GLOBALS["root"] . "respuesta/responder" . '" method="post">
									<input type="text" name="idComentario" value="'. $data["comentarios"][$i]["idComentario"] .'" hidden>
									<textarea class="md-textarea form-control" rows="3" placeholder="Añadir comentario..."></textarea>
									<div class="d-flex justify-content-end mt-3">
										<button type="button" class="btn btn-flat btn-sm waves-effect" data-toggle="collapse" data-target="#collapseExample-'.$i.'" aria-expanded="false" aria-controls="collapseExample-'.$i.'">Cancelar</button>
										<button type="button" class="btn btn-success btn-sm mr-0" data-toggle="collapse" data-target="#collapseExample-'.$i.'" aria-expanded="false" aria-controls="collapseExample-'.$i.'">Enviar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					</div>
					</div>
					</div>';
					
					if($data["mismoUsuario"]){
						$comentario .= $responder;

					} else{
						$comentario .= "</div></div></div>";
					}
					 
					echo $comentario;
				}
			?>
        	</div>
			<div>
				<div class="card-body px-0">
					<form action="<?php echo $GLOBALS['root'] . 'comentarios/enviar'?>" method="post">
						<input type="text" name="idProducto" value="<?php echo $data['idProducto'] ?>" hidden/>
						<textarea class="md-textarea form-control" rows="3" name="comentario" placeholder="Escribe tu pregunta..."></textarea>
						<div class="d-flex justify-content-end mt-3">
							<button type="button" class="btn btn-flat btn-sm waves-effect" aria-expanded="true">Cancelar</button>
							<button type="submit" class="btn btn-success btn-sm mr-0" aria-expanded="true">Enviar</button>
						</div>
					</form>
				</div>
			</div>
      	</div>
	</section>
</div>

<script src="<?php echo $GLOBALS["root"] . "public/JS/modal.js" ?>"></script>