<section class="full-width section">
	<div class="container">
    <h2 class="title-section-h2">Tus anuncios</h2>
		<div class="row products-container">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="full-width user-menu-xs">
					<div class="full-width post-user-info">
						<img src="<?php echo $GLOBALS['root'] . "public/image/man.png" ?>" class="NavBar-Nav-icon" alt="User">
						<p class="full-width"><small><?php echo $_SESSION["nombre"] ?></small></p>
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
				<div class="full-width">
					<?php
					
						for($i = 0; $i < sizeof($data); $i++){
							$imagen = $GLOBALS['root'] . "public/upload/" . $data[$i]['imagen'];

							$publicacion = "<div class='full-width post'>
												<figure class='full-width post-img'>
													<img src='" . $imagen . "' alt='' class='img-responsive'>
												</figure>
												<div class='full-width post-info'>
													<a href='" . $GLOBALS["root"] . "post/index?idProducto=" . $data[$i]["idProducto"] . "' class='full-width post-info-title'>" . $data[$i]["nombre"] . "</a>
													<p class='full-width post-info-price'>$" . $data[$i]["precio"] . "</p>
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