<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><i class="fas fa-shopping-cart"></i> Social Market</h5>
            <form class="form-signin" action="<?php echo $GLOBALS["root"] . "loguearUsuario/verificar" ?>" method="post">
              <div class="form-group">
                <input name="usuario" type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required>
              </div>
              <div class="form-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>
              <div class="custom-checkbox mb-3 text-center" >
                <a href="<?php echo $GLOBALS["root"] . "registrar/" ?>" id="aClass">Registrarme</a>
              </div>
              <button class="btn btn-lg btn-secondary btn-block" type="submit">Iniciar sesión</button>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>