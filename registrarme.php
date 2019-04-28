<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarme</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
          <h5 class="card-title text-center"><a class="navbar-brand card-titleRegistrarme" href="./login.html"><i class="fas fa-shopping-cart"></i> Compra-rapido.com</a></h5>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- Full Page Image Header with Vertically Centered Content -->
      <header class="masthead">
        <div class="container h-100">
          <div class="row align-items-center">
            <div class="col-12 text-center div-form">
            
              <p class="lead">Completa tus datos</p>
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <form class="form-signin" id="form-div">
                    <div class="form-label-group">
                            <input type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
                            <label for="inputNombre">Nombre</label>
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="inputApellido" class="form-control" placeholder="Apellido" required autofocus>
                        <label for="inputApellido">Apellido</label>
                    </div>
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                      <label for="inputEmail">Email</label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Contraseña</label>
                    </div>
                    <div class="form-label-group">
                            <input type="password" id="inputPasswordRepeat" class="form-control" placeholder="Password repeat" required>
                            <label for="inputPasswordRepeat">Repetir contraseña</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-3" id="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Acepto los terminos y condiciones</label>
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