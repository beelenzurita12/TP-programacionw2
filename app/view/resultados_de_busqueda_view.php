<section class="full-width section">
	<div class="container section-container">
    <h2 class="title-section-h2">Resultados de tu búsqueda</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="full-width user-menu-xs">
					<div class="full-width post-user-info" style="margin: 0 !important;">
						<h5 class="text-center">Categorías</h5>
					</div>
					<div class="full-width list-group" style="border-radius: 0;">
						<a href="#!" class="list-group-item">
							<i class="fa fa-car fa-fw" aria-hidden="true"></i> Vehículos
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-building fa-fw" aria-hidden="true"></i> Inmobiliaria
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-home fa-fw" aria-hidden="true"></i> Hogar
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i> Moda y belleza
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-child fa-fw" aria-hidden="true"></i> Para niños y bebes
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-plug fa-fw" aria-hidden="true"></i> Electrónica
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-bicycle fa-fw" aria-hidden="true"></i> Ocio y deporte
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-paw fa-fw" aria-hidden="true"></i> Mascotas y animales
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i> Trabajo y formación
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-suitcase fa-fw" aria-hidden="true"></i> Negocios y servicios
						</a>
						<a href="#!" class="list-group-item">
							<i class="fa fa-shopping-basket fa-fw" aria-hidden="true"></i> Otros
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9">
				<!-- Contenido -->
				<div class="full-width container-post">
				<?php

					for($i = 0 ; $i < sizeof($data); $i++){
						$imagen = $data[$i]['imagen'];
						// Read image path, convert to base64 encoding
						$imageData = base64_encode(file_get_contents(__DIR__ . "/../../upload/$imagen"));

						// Format the image SRC:  data:{mime};base64,{data};
						$src = 'data: '.mime_content_type(__DIR__ . "/../../upload/$imagen").';base64,'.$imageData;

						// Echo out a sample image
						// $imagenHTML =  '<img src="' . $src . '">';

						$publicacion = "<div class='full-width post'>
											<figure class='full-width post-img'>
												<!-- Tamaño de la imagen 248x186 pixeles -->
												<img src='" . $src . "' alt='' class='img-responsive'>
											</figure> 
											<div class='full-width post-info'>
												<a href='" . $GLOBALS["root"] . "post/' class='full-width post-info-title'>" . $data[$i]["nombre"] . "</a>
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