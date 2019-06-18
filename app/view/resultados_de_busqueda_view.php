<section class="full-width section">
	<div class="container mispublicaciones-container">
    <h2 class="tus-anuncios-h2">Resultados de tu busqueda</h2>
		<div class="row">
			
			<div class="col-xs-12 col-sm-8 col-md-9">
				<!-- Contenido -->
				<div class="full-width container-post">
				<?php

					for($i = 0 ; $i < sizeof($data); $i++){
						$publicacion = "<div class='full-width post'>
											<figure class='full-width post-img'>
												<!-- Tamaño de la imagen 248x186 pixeles -->
												<img src='' alt='' class='img-responsive'>
											</figure> 
											<div class='full-width post-info'>
												<a href='#!' class='full-width post-info-title'>" . $data[$i]["nombre"] . "</a>
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