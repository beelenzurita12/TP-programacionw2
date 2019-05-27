<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center"><i class="fas fa-shopping-cart"></i> Compra-rapido.com</h5>
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
                <a href="registrarme.php" id="aClass">Registrarme</a>
                </div>
                <button class="btn btn-lg btn-secondary btn-block" type="submit">Iniciar sesión</button>  
            </form>
            </div>
        </div>
        </div>
    </div>
</div>