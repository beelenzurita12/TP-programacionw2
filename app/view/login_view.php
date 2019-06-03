<div class="row align-items-center">
  <div class="col-12 text-center div-form">
    <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center"><i class="fas fa-shopping-cart"></i> Social Market</h5>
          <form class="form-signin" action="<?php echo $GLOBALS['root'] . "loguearUsuario/verificar" ?>" method="post">
            <div class="form-label-group">
              <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
              <label for="inputEmail">Email</label>
            </div>
            <div class="form-label-group">
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
              <label for="inputPassword">Contraseña</label>
            </div>
            <div class="custom-checkbox mb-3 text-center" >
              <a href="<?php echo $GLOBALS['root'] . "registrar/" ?>" id="aClass">Registrarme</a>
            </div>
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Iniciar sesión</button>  
          </form>
        </div>
      </div>
    </div>
  </div>
</div>