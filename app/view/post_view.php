<div class="container post-container">
	<div class="row">	
		<div class="col-xs-12 col-sm-8">
				<div class="full-width div-table-row">
					<div class="div-table-cell div-table-cell-xs">
						<a href="<?php echo $GLOBALS['root'] . "resultados_de_busqueda/" ?>" class="btn btn-default btn-block"><i class="fa fa-angle-left" aria-hidden="true"></i> Volver al listado</a>
					</div>
				</div>
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
				<p class="lead text-justify">
					<?php echo $data['descripcion']; ?>
				</p>
				<p class="lead">
					<strong>Publicado: <?php echo $data['fecha_publicacion']; ?></strong>
				</p>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="full-width" style="padding:10px; background-color: #F5F5F5; margin-top: 40px;">
				<p class="lead text-center"><strong><?php echo $data['nombre']; ?></strong></p>
				<p class="lead text-center" style="color: #F09000;"><strong>$<?php echo $data['precio'] ?></strong></p>
			</div>
			<div class="full-width post-user-info">
				<div>
					<p class="full-width lead"><i class="fas fa-user" aria-hidden="true"></i> {{Nombre usuario}}</p>
					<p class="full-width lead"><i class="fas fa-mobile" aria-hidden="true"></i> {{12345678}}</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<?php 
				if($data["otroUsuario"]){
					echo '<a href="#!" class="btn btn-success btn-block">Comprar</a>';
				
				} else {
					echo '<a href="#!" class="btn btn-success btn-block">Editar</a>';
					echo '<a href="#!" class="btn btn-success btn-block">Eliminar</a>';
				}
			?>
		</div>
	</div>
</div>