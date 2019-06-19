<section class="full-width section">
	<div class="container section-container">
    <h2 class="title-section-h2">Tus anuncios</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="full-width user-menu-xs">
					<div class="full-width post-user-info" style="margin: 0 !important;">
						<!--<i class="fa fa-user NavBar-Nav-icon" aria-hidden="true"></i>-->
						<img src="<?php echo $GLOBALS['root'] . "public/image/man.png" ?>" class="NavBar-Nav-icon" alt="User">
						<p class="full-width"><small>{{Nombre de usuario}}</small></p>
						<div class="full-width div-table">
							<div class="full-width div-table-row">
								<div class="div-table-cell div-table-cell-xs" style="height: auto !important; line-height: inherit; border:none;">
									{{0}} <br>
									<small>En venta</small>
								</div>
								<div class="div-table-cell div-table-cell-xs" style="height: auto !important; line-height: inherit; border:none;">
									{{0}} <br>
									<small>Vendidos</small>
								</div>
							</div>
						</div>
					</div>
					<div class="full-width list-group" style="border-radius: 0;">
						<a href="#!" class="list-group-item">
						  	<i class="fas fa-user fa-fw" aria-hidden="true"></i> Tu perfil
						</a>
						<a href="#!" class="list-group-item">
						  	<i class="fas fa-object-group fa-fw" aria-hidden="true"></i> Tus anuncios
						</a>
						<a href="#!" class="list-group-item">
							  <i class="far fa-comment-dots fa-fw" aria-hidden="true"></i> Mensajes
						</a>
						<a href="#!" class="list-group-item">
						  	<i class="fas fa-cogs fa-fw" aria-hidden="true"></i> Configuración
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9">
				<!-- Contenido -->
				<div class="full-width container-post">
				<?php
				
					include_once __DIR__ . "/../helper/parse_imagen.php";

					for($i = 0 ; $i < sizeof($data); $i++){
						$imagen = $data[$i]['imagen'];

						$src = parseImagen($imagen);

						$publicacion = "<div class='full-width post'>
											<figure class='full-width post-img'>
												<!-- Tamaño de la imagen 248x186 pixeles -->
												<img src='" . $src . "' alt='' class='img-responsive'>
											</figure>
											<div class='full-width post-info'>
											<a href='" . $GLOBALS["root"] . "post/index?idProducto=" . $data[$i]["idProducto"] . "' class='full-width post-info-title'>" . $data[$i]["nombre"] . "</a>
												<p class='full-width post-info-price'>$" . $data[$i]["precio"] . "</p>
												<a href='" . $GLOBALS["root"] . "agregar_producto/index?id=" . $data[$i]["idProducto"] . "' class='post-info-editar'>Editar</a>
												<a href='" . $GLOBALS["root"] . "mis_publicaciones/eliminar?id=" . $data[$i]["idProducto"] . "' class='post-info-eliminar'>Eliminar</a>
												<i class='far fa-heart post-info-like'></i>
											</div>
										</div>";

						echo $publicacion;
					}
				?>
				</div>
			</div>
        </div>
    </div>
</section>