<?php

    $estaLogueado = $_SESSION ? $_SESSION['estaLogueado'] : false;

    if($estaLogueado){
        echo '<div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ad">
                    <a class="nav-link" href="' . $GLOBALS['root'] . 'producto/">Pon tu anuncio</a>
                  </li>
                  <li class="nav-item ad">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="' . $GLOBALS["root"] . 'public/image/man.png" alt="User">
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby = "dropdownMenuLink">
                      <div class="dropdown-item welcome">Bienvenido ' . $_SESSION['nombre'] . ' </div>
                      <a class="dropdown-item" href="#!">Tu perfil</a>
                      <a class="dropdown-item" href="' . $GLOBALS['root'] . 'mis_publicaciones/">Tus anuncios</a>
                      <a class="dropdown-item" href="'. $GLOBALS["root"] .'compra/listado">Tus compras</a>
                      <a class="dropdown-item" href="'. $GLOBALS["root"] .'mensaje/misMensajes">Mensajes</a>
                      <a class="dropdown-item" href="#!">Configuración</a>
                      <a class="dropdown-item" href="' . $GLOBALS['root'] . 'loguearUsuario/desloguearUsuario">Salir</a>
                    </div>
                  </li>
                  <li class="nav-item ad">
                    <a class="navbar-brand shopping-cart" href="' . $GLOBALS['root'] . 'carrito_de_compras/">
                      <i class="fas fa-shopping-cart"></i>
                      <div class="shopping-cart-contador">' . $_SESSION['productosEnCarrito'] . '</div>
                    </a>
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