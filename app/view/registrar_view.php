<header class="masthead">
    <div class="container h-100">
        <div class="row align-items-center">
            <div class="col-12 text-center div-form">
                <p class="lead">Completa tus datos</p>
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <form class="form-signin" id="form-div" action="registrarUsuario.php" method="post">
                        <div class="form-label-group">
                                <input name="nombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
                                <label for="inputNombre">Nombre</label>
                        </div>
                        <div class="form-label-group">
                            <input name="apellido" type="text" id="inputApellido" class="form-control" placeholder="Apellido" required autofocus>
                            <label for="inputApellido">Apellido</label>
                        </div>
                        <div class="form-label-group">
                            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                            <label for="inputEmail">Email</label>
                        </div>

                        <div class="form-label-group">
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Contraseña</label>
                        </div>
                        <div class="form-label-group">
                                <input name="passwordRepetida" type="password" id="inputPasswordRepeat" class="form-control" placeholder="Password repeat" required>
                                <label for="inputPasswordRepeat">Repetir contraseña</label>
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