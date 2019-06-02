<div class="row align-items-center">
  <div class="col-12 text-center">
    <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center"><i class="fas fa-shopping-cart"></i> Social Market</h5>
          <h5 class="text-info">Completa tus datos</h5>
          <br>
          <form class="form-signin" id="form-div" action="registrarUsuario.php" method="POST">
            <div class="form-label-group">
              <input name="nombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
              <label for="inputNombre">Nombre</label>
            </div>
            <div class="form-label-group">
              <input name="apellido" type="text" id="inputApellido" class="form-control" placeholder="Apellido" required autofocus>
              <label for="inputApellido">Apellido</label>
            </div>
            <div class="form-label-group">
              <input name="dni" type="text" id="inputDni" class="form-control" placeholder="DNI" required autofocus>
              <label for="inputDni">DNI</label>
            </div>
            <div class="form-label-group">
              <input name="calle" type="text" id="inputCalle" class="form-control" placeholder="Calle" required autofocus>
              <label for="inputCalle">Calle</label>
            </div>
            <div class="form-label-group">
              <input name="nroCalle" type="text" id="inputNroCalle" class="form-control" placeholder="Nro de calle" required autofocus>
              <label for="inputNroCalle">Nro de calle</label>
            </div>
            <div class="form-label-group">
              <input name="localidad" type="text" id="inputLocalidad" class="form-control" placeholder="Localidad" required autofocus>
              <label for="inputLocalidad">Localidad</label>
            </div>
            <div class="form-label-group">
              <input name="telefono" type="text" id="inputTelefono" class="form-control" placeholder="Teléfono" required autofocus>
              <label for="inputTelefono">Teléfono</label>
            </div>
            <div class="form-label-group">
              <input name="cuil" type="text" id="inputCuil" class="form-control" placeholder="CUIL/CUIT" required autofocus>
              <label for="inputCuil">CUIL/CUIT</label>
            </div>
            <div class="form-label-group">
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
              <label for="inputEmail">Email</label>
            </div>
            <div class="form-label-group">
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required autofocus>
              <label for="inputPassword">Contraseña</label>
            </div>
            <div class="form-label-group">
              <input name="passwordRepetida" type="password" id="inputPasswordRepetida" class="form-control" placeholder="Repetir contraseña" required autofocus>
              <label for="inputPasswordRepetida">Repetir Contraseña</label>
            </div>
            <br>
            <div class="custom-control custom-checkbox mb-3" id="check">
              <input type="checkbox" class="custom-control-input" id="ubicacion" data-longitude="" data-latitude="">
              <label class="custom-control-label" for="ubicacion">Permitir que Social Market utilice mi ubicación geográfica para futuras publicaciones.</label>
            </div>
            <div class="custom-control custom-checkbox mb-3" id="check">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Acepto los términos y condiciones.</label>
            </div>
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Crear cuenta</button>  
          </form>
        </div>
      </div>
    </div>
  </div>
</div>