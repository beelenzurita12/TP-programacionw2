<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar sesion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"></script>

    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"> <i class="fas fa-shopping-cart"></i> Compra-rapido.com</h5>
            <form class="form-signin" action="./loguearUsuario.php" method="post">
              <div class="form-label-group">
                <input name="usuario" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Usuario</label>
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-checkbox mb-3 text-center" >
                <a href="registrarme.html" id="aClass">Registrarme</a>
              </div>
              <button class="btn btn-lg btn-secondary btn-block" type="submit">Iniciar sesion</button>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>