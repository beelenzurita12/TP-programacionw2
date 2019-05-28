<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarme</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js">
    <link rel='stylesheet' type='text/css' media='screen' href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <script type="text/javascript" src="./JS/Location.js"></script>
</head>
<body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
          <h5 class="card-title text-center"><a class="navbar-brand card-titleRegistrarme" href="./login.php"><i class="fas fa-shopping-cart"></i> Social Market</a></h5>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item">
                <a class="nav-link" href="#">Contáctanos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <header class="masthead">
        <div class="container h-100">
          <div class="row align-items-center">
            <div class="col-12 text-center div-form">
              <p class="lead">Completa tus datos</p>
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <form class="form-signin" id="form-div" action="registrarUsuario.php" method="POST">
                  <div class="form-group">
                    <input name="nombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre" required>
                  </div>
                  <div class="form-group">
                    <input name="apellido" type="text" id="inputApellido" class="form-control" placeholder="Apellido" required>
                  </div>
                  <div class="form-group">
                    <input name="dni" type="text" id="inputDni" class="form-control" placeholder="DNI" required>
                  </div>
                  <div class="form-group">
                    <input name="calle" type="text" id="inputCalle" class="form-control" placeholder="Calle" required>
                  </div>
                  <div class="form-group">
                    <input name="nroCalle" type="text" id="inputNroCalle" class="form-control" placeholder="Nro de calle" required>
                  </div>
                  <div class="form-group">
                    <input name="localidad" type="text" id="inputLocalidad" class="form-control" placeholder="Localidad" required>
                  </div>
                  <div class="form-group">
                    <input name="telefono" type="text" id="inputTelefono" class="form-control" placeholder="Teléfono" required>
                  </div>
                  <div class="form-group">
                    <input name="cuil" type="text" id="inputCuil" class="form-control" placeholder="CUIL/CUIT" required>
                  </div>
                  <div class="form-group">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                  </div>
                  <div class="form-group">
                    <input name="passwordRepetida" type="password" id="inputPasswordRepeat" class="form-control" placeholder="Repetir contraseña" required>
                  </div>
                  <div class="custom-control custom-checkbox mb-3" id="check">
                    <input type="checkbox" class="custom-control-input" id="ubicacion" data-longitude="" data-latitude="">
                    <label class="custom-control-label" for="ubicacion">Permitir que Social Market utilice mi ubicación geográfica para futuras publicaciones.</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3" id="check">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Acepto los términos y condiciones</label>
                  </div>
                  <button class="btn btn-lg btn-secondary btn-block" type="submit">Crear cuenta</button>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>   
</body>
</html>