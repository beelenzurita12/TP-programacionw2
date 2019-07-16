<section class="full-width section">
	<div class="container">
    <h2 class="title-section-h2">Resultados de tu búsqueda</h2>
		<div class="row products-container">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="full-width user-menu-xs">
					<div class="full-width post-user-info">
						<h5 class="text-center">Categorías</h5>
					</div>
					<div class="full-width list-group" style="border-radius: 0;">
						<a href="" class="list-group-item" id="vehiculos">
							<i class="fa fa-car fa-fw" aria-hidden="true"></i> Vehículos
						</a>
						<a href="" class="list-group-item" id="inmobiliaria">
							<i class="fa fa-building fa-fw" aria-hidden="true"></i> Inmobiliaria
						</a>
						<a href="" class="list-group-item" id="hogar">
							<i class="fa fa-home fa-fw" aria-hidden="true"></i> Hogar
						</a>
						<a href="" class="list-group-item" id="moda-y-belleza">
							<i class="fa fa-shopping-bag fa-fw" aria-hidden="true"></i> Moda y belleza
						</a>
						<a href="" class="list-group-item" id="para-niños-y-bebes">
							<i class="fa fa-child fa-fw" aria-hidden="true"></i> Para niños y bebes
						</a>
						<a href="" class="list-group-item" id="electronica">
							<i class="fa fa-plug fa-fw" aria-hidden="true"></i> Electrónica
						</a>
						<a href="" class="list-group-item" id="ocio-y-deporte">
							<i class="fa fa-bicycle fa-fw" aria-hidden="true"></i> Ocio y deporte
						</a>
						<a href="" class="list-group-item" id="mascotas-y-animales">
							<i class="fa fa-paw fa-fw" aria-hidden="true"></i> Mascotas y animales
						</a>
						<a href="" class="list-group-item" id="trabajo-y-formacion">
							<i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i> Trabajo y formación
						</a>
						<a href="" class="list-group-item" id="negocios-y-servicios">
							<i class="fa fa-suitcase fa-fw" aria-hidden="true"></i> Negocios y servicios
						</a>
						<a href="" class="list-group-item" id="otros">
							<i class="fa fa-shopping-basket fa-fw" aria-hidden="true"></i> Otros
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="full-width">
				<?php 
				
					include_once __DIR__ . "/componentes/componente_productos_card_view.php";
				
				?>	
				</div>
			</div>
        </div>
    </div>
</section>
<script type="text/javascript">
	function getProductByCategory(event){
		event.preventDefault()
		let busqueda = event.target.id.replace(/-/g, " ")
		let path = window.location.origin + "/" + window.location.pathname.split("/")[1]
		
		console.log(busqueda, path)

		window.location.replace(`${path}/resultados_de_busqueda/buscarPorCategoria?categoria=${busqueda}`)
	}

	let botonCategorias = document.getElementsByClassName("list-group-item")

	for(let i = 0; i < botonCategorias.length; i++){
		botonCategorias[i].addEventListener("click", getProductByCategory)
	}
</script>