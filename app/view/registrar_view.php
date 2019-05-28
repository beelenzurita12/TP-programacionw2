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
                    <label class="custom-control-label" for="customCheck1">Acepto los términos y condiciones.</label>
                  </div>
                  <button class="btn btn-lg btn-secondary btn-block" type="submit">Crear cuenta</button>  
                </form>
              </div>
            </div>
        </div>
    </div>
</header>