<?php

    if($data["estaLogueado"]){
        echo '<div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="' . $GLOBALS['root'] . 'agregar_articulo/">Pon tu anuncio</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="' . $GLOBALS["root"] . 'public/image/man.png" alt="">
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby = "dropdownMenuLink">
                      <a class="dropdown-item" href="#!">Tu perfil</a>
                      <a class="dropdown-item" href="#!">Tus anuncios</a>
                      <a class="dropdown-item" href="#!">Mensajes</a>
                      <a class="dropdown-item" href="#!">Configuración</a>
                      <a class="dropdown-item" href="' . $GLOBALS['root'] . 'login/">Salir</a>
                    </div>
                  </li>
                </ul>
              </div>';
    } else{
        echo '<div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="' . $GLOBALS['root'] . 'login/">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="' . $GLOBALS['root'] . 'registrar/">Registrarme</a>
                </li>
              </ul>
              </div>';
    }
?>