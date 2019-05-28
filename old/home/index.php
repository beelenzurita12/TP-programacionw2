<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Social Market</title>

  <!-- Nuestro css -->
  <link rel="stylesheet" href="../css/main2.css">

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>
  <!-- session start y declarar variables -->
  <?php 
    session_start();

    $estaLogueado = $_SESSION['estaLogeado'];
  
  ?>


  <!-- Navegacion -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php"><i class="fas fa-shopping-cart"></i> Social Market</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../registrarme.php">Registrarme</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
        <div class="carousel-item active" style="background-image: url('../img/slider1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Compra</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Segunda imagen -->
        <div class="carousel-item" style="background-image: url('../img/slider1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Vende</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Tercera imagen -->
        <div class="carousel-item" style="background-image: url('../img/slider1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Disfruta</h3>
            <p>This is a description for the third slide.</p>
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
        <a href="#!" id="categori-1">
          <i class="fa fa-car" aria-hidden="true"></i>
          <span>VEHÍCULOS</span>
        </a>
        <a href="#!" id="categori-2">
          <i class="fa fa-building" aria-hidden="true"></i>
          <span>INMOBILIARIA</span>
        </a>
        <a href="#!" id="categori-3">
          <i class="fa fa-home" aria-hidden="true"></i>
          <span>HOGAR</span>
        </a>
        <a href="#!" id="categori-4">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          <span>MODA Y BELLEZA</span>
        </a>
        <a href="#!" id="categori-5">
          <i class="fa fa-child" aria-hidden="true"></i>
          <span>PARA NIÑOS Y BEBES</span>
        </a>
        <a href="#!" id="categori-6">
          <i class="fa fa-plug" aria-hidden="true"></i>
          <span>ELECTRÓNICA</span>
        </a>
        <a href="#!" id="categori-7">
          <i class="fa fa-bicycle" aria-hidden="true"></i>
          <span>OCIO Y DEPORTE</span>
        </a>
        <a href="#!" id="categori-8">
          <i class="fa fa-paw" aria-hidden="true"></i>
          <span>MASCOTAS Y ANIMALES</span>
        </a>
        <a href="#!" id="categori-9">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span>TRABAJO Y FORMACIÓN</span>
        </a>
        <a href="#!" id="categori-10">
          <i class="fa fa-suitcase" aria-hidden="true"></i>
          <span>NEGOCIOS Y SERVICIOS</span>
        </a>
        <a href="#!" id="categori-11">
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          <span>OTROS</span>
        </a>
        <a href="#!" id="categori-12">
          <i class="fa fa-star" aria-hidden="true"></i>
          <span>TODAS LAS CATEGORIAS</span>
        </a>
      </div>
    </div>
  </section>

    <!-- Presentacion de algunos productos -->
    <h2 class="text-center text-h2">Te puede interesar</h2>
    <div class="row section-3">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#!"><img class="card-img-top" src="../img/producto1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#!">Producto 1</a>
            </h4>
            <p class="card-text">$2.500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#!"><img class="card-img-top" src="../img/producto1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#!">Producto 2</a>
            </h4>
            <p class="card-text">$2.500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#!"><img class="card-img-top" src="../img/producto1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#!">Producto 3</a>
            </h4>
            <p class="card-text">$2.500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#!"><img class="card-img-top" src="../img/producto2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#!">Producto 4</a>
            </h4>
            <p class="card-text">$2.500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#!"><img class="card-img-top" src="../img/producto2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#!">Producto 5</a>
            </h4>
            <p class="card-text">$2.500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#!"><img class="card-img-top" src="../img/producto2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#!">Producto 6</a>
            </h4>
            <p class="card-text">$2.500</p>
          </div>
        </div>
      </div>
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
            <p class="card-text">Con Social Market, tenés cuotas sin interés con tarjeta o efectivo en puntos de pago. ¡Y siempre es seguro!</p>
            <a href="#!">¿Cómo pagar con Social Market?</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h5 class="card-header"><i class="fas fa-truck"></i> Envío gratis desde $ 1.999</h5>
          <div class="card-body">
            <p class="card-text">Solo por estar registrado en Social Market tenés envíos gratis en miles de productos. Es un beneficio que ayuda, y mucho.</p>
            <a href="#!">Conocé más sobre este beneficio</a>
         </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h5 class="card-header"><i class="fas fa-shield-alt"></i> Seguridad, de principio a fin</h5>
          <div class="card-body">
            <p class="card-text">¿No te gusta? ¡Devolvelo! En Social Market, no hay nada que no puedas hacer, porque estás siempre protegido.</p>
            <a href="#!">¿Cómo te protegemos?</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark full-width footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h4 class="text-light text-center">Síguenos en las redes sociales</h4>
          <ul class="list-unstyled fullwidth text-center footer-social">
            <li>
              <a href="#!">
                <i class="fab fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#!">
                <i class="fab fa-linkedin" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#!">
                <i class="fab fa-google-plus" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#!">
                <i class="fab fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#!">
                <i class="fab fa-youtube" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#!">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
					<h4 class="text-light text-center">Descárgate nuestras apps gratuitas</h4>
					<ul class="list-unstyled fullwidth text-center footer-app-store">
						<li>
							<a href="#!">
                <i class="fab fa-apple" aria-hidden="true"></i> App Store
							</a>
						</li>
						<li>
							<a href="#!">
                <i class="fab fa-android" aria-hidden="true"></i> Play Store
							</a>
						</li>
						<li>
							<a href="#!">
                <i class="fab fa-windows" aria-hidden="true"></i> Windows Store
							</a>
						</li>
					</ul>
        </div>
      </div>
    </div>
    <br>
			<div class="col-xs-12">
				<ul class="list-unstyled text-center full-width footer-copyright">
					<li>&copy; 2019 Company</li>
					<li><a href="#!">Condiciones de uso</a></li>
					<li><a href="#!">Ayuda</a></li>
					<li><a href="#!">Políticas de uso</a></li>
					<li><a href="#!">Apps</a></li>
				</ul>
			</div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>