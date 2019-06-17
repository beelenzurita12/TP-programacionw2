<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Social Market</title>

  <!-- Nuestro css -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['root'] . "public/css/main2.css"?>" type="text/css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['root'] . "public/css/main.css"?>" type="text/css">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $GLOBALS['root'] . "public/bootstrap/css/bootstrap.min.css"?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo $GLOBALS['root'] . "public/css/modern-business.css"?>" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>

  <!-- Navegation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $GLOBALS['root'] . "inicio/"?>"><i class="fas fa-shopping-cart"></i> Social Market</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form action="<?php echo $GLOBALS['root'] . 'resultados_de_busqueda/buscar' ?>" method="POST" class="form-inline">
				<input type="text" id="input-buscador" class="form-control" placeholder="Estoy buscando..." name="busqueda">
				<button type="submit" class="btn btn-dark">Buscar</button>
			</form>

          <?php include __DIR__ . "/profileOptionAndLogin_view.php"; ?>
          
    </div>				
  </nav>
  
    <?php include_once $vistaSolicitada; ?>

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
  <script src="<?php echo $GLOBALS['root'] . "public/bootstrap/js/jquery/jquery.min.js"?>"></script>
  <script src="<?php echo $GLOBALS['root'] . "public/bootstrap/js/bootstrap.bundle.min.js"?>"></script>
  <script src="<?php echo $GLOBALS['root'] . "public/JS/Location.js"?>"></script>

</body>

</html>