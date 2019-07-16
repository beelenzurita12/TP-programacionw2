<!-- Slider -->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Primera imagen -->
      <div class="carousel-item active" style="background-image: url('<?php echo $GLOBALS['root'] . "public/image/background1.jpg" ?>');">
        <div class="carousel-caption d-none d-md-block">
          <h3>Compra</h3>
        </div>
      </div>
      <!-- Segunda imagen -->
      <div class="carousel-item" style="background-image: url('<?php echo $GLOBALS['root'] . "public/image/background2.jpg" ?>');">
        <div class="carousel-caption d-none d-md-block">
          <h3>Vende</h3>
        </div>
      </div>
      <!-- Tercera imagen -->
      <div class="carousel-item" style="background-image: url('<?php echo $GLOBALS['root'] . "public/image/background3.jpg" ?>');">
        <div class="carousel-caption d-none d-md-block">
          <h3>Disfruta</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Contenido de la pagina -->
<div class="container">

  <!-- Categorias mas populares -->
  <h2 class="text-center text-h2">Todas las categorías que imaginas</h2>
  <section class="section section-3">
    <div class="container">
      <div class="full-width container-category">
        <a href="#!" id="categori-1" class="list-group-item">
          <i id="vehiculos" class="fa fa-car" aria-hidden="true"></i>
          <span>VEHÍCULOS</span>
        </a>
        <a href="#!" id="categori-2" class="list-group-item">
          <i id="inmobiliaria" class="fa fa-building" aria-hidden="true"></i>
          <span>INMOBILIARIA</span>
        </a>
        <a href="#!" id="categori-3" class="list-group-item">
          <i id="hogar" class="fa fa-home" aria-hidden="true"></i>
          <span>HOGAR</span>
        </a>
        <a href="#!" id="categori-4" class="list-group-item">
          <i id="moda-y-belleza" class="fa fa-shopping-bag" aria-hidden="true"></i>
          <span>MODA Y BELLEZA</span>
        </a>
        <a href="#!" id="categori-5" class="list-group-item">
          <i id="para-niños-y-bebes" class="fa fa-child" aria-hidden="true"></i>
          <span>PARA NIÑOS Y BEBES</span>
        </a>
        <a href="#!" id="categori-6" class="list-group-item">
          <i id="electronica" class="fa fa-plug" aria-hidden="true"></i>
          <span>ELECTRÓNICA</span>
        </a>
        <a href="#!" id="categori-7" class="list-group-item">
          <i id="ocio-y-deporte" class="fa fa-bicycle" aria-hidden="true"></i>
          <span>OCIO Y DEPORTE</span>
        </a>
        <a href="#!" id="categori-8" class="list-group-item">
          <i id="mascota-y-animales" class="fa fa-paw" aria-hidden="true"></i>
          <span>MASCOTAS Y ANIMALES</span>
        </a>
        <a href="#!" id="categori-9" class="list-group-item">
          <i id="trabajo-y-formacion" class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span>TRABAJO Y FORMACIÓN</span>
        </a>
        <a href="#!" id="categori-10" class="list-group-item">
          <i id="negocio-y-servicios" class="fa fa-suitcase" aria-hidden="true"></i>
          <span>NEGOCIOS Y SERVICIOS</span>
        </a>
        <a href="#!" id="categori-11" class="list-group-item">
          <i id="otros" class="fa fa-shopping-basket" aria-hidden="true"></i>
          <span>OTROS</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Presentacion de algunos productos -->
  <h2 class="text-center text-h2">Te puede interesar</h2>
  <div class="row section-3 margin">
    <?php

      include_once __DIR__ . "/componentes/componente_productos_card_view.php";
    
    ?>
  </div>

  <!-- Frases motivadoras -->
  <section class="row section-3 margin">
    <div class="col-xs-12 col-sm-4">
      <i class="fas fa-flag-checkered icon-index" aria-hidden="true"></i>
      <p class="lead">
        Olvídate del miedo a equivocarte y lánzate a por lo que quieres. Ya no importa lo que tienes, sino lo que puedes llegar a hacer.
      </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <i class="fas fa-gamepad icon-index" aria-hidden="true"></i>
      <p class="lead">
        Disfruta hasta de tus cambios de opinión y vive todas las oportunidades que quieras, sin complejos.
      </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <i class="far fa-money-bill-alt icon-index" aria-hidden="true"></i>
      <p class="lead">
        Compra lo que te queda por vivir y vende lo que ya has vivido de la forma más rápida y cómoda que existe.
      </p>
    </div>
  </section>

  <hr>

  <!-- Formas de pago, envios, etc. -->
  <div class="row section-3 margin">
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h5 class="card-header"><i class="fas fa-credit-card"></i> Pagá con tarjeta o en efectivo</h5>
        <div class="card-body">
          <p>Con Social Market, tenés cuotas sin interés con tarjeta o efectivo en puntos de pago. ¡Y siempre es seguro!</p>
          <a href="#!">¿Cómo pagar con Social Market?</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h5 class="card-header"><i class="fas fa-truck"></i> Envío gratis desde $1.999</h5>
        <div class="card-body">
          <p>Solo por estar registrado en Social Market tenés envíos gratis en miles de productos.</p>
          <a href="#!">Conocé más sobre este beneficio</a>
      </div>
      </div>
    </div>

    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h5 class="card-header"><i class="fas fa-shield-alt"></i> Seguridad, de principio a fin</h5>
        <div class="card-body">
          <p>¿No te gusta? ¡Devolvelo! En Social Market, no hay nada que no puedas hacer, porque estás siempre protegido.</p>
          <a href="#!">¿Cómo te protegemos?</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function getProductByCategory(event){
		event.preventDefault()
		let busqueda = event.target.id.replace(/-/g, " ")
		let path = window.location.origin + "/" + window.location.pathname.split("/")[1]

		window.location.replace(`${path}/resultados_de_busqueda/buscarPorCategoria?categoria=${busqueda}`)
	}

	let botonCategorias = document.getElementsByClassName("list-group-item")

	for(let i = 0; i < botonCategorias.length; i++){
		botonCategorias[i].addEventListener("click", getProductByCategory)
	}
</script>