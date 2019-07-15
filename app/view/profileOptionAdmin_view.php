<?php

    echo '<div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ad">
                    <a class="nav-link" href="' . $GLOBALS['root'] . 'admin/usuarios/">Usuarios</a>
                </li>
                <li class="nav-item ad">
                    <a class="nav-link" href="' . $GLOBALS['root'] . 'admin/estadisticas/">Estadísticas</a>
                </li>
                <li class="nav-item ad">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="' . $GLOBALS["root"] . 'public/image/man.png" alt="User">
                </a>
                
                <div class="dropdown-menu" aria-labelledby = "dropdownMenuLink">
                    <div class="dropdown-item welcome">Bienvenido ' . $_SESSION['nombre'] . ' </div>
                    <a class="dropdown-item" href="#!">Tu perfil</a>
                    <a class="dropdown-item" href="' . $GLOBALS['root'] . 'mis_publicaciones/">Tus anuncios</a>
                    <a class="dropdown-item" href="#!">Mensajes</a>
                    <a class="dropdown-item" href="#!">Configuración</a>
                    <a class="dropdown-item" href="' . $GLOBALS['root'] . 'loguearUsuario/desloguearUsuario">Salir</a>
                </div>
                </li>
            </ul>
        </div>';
?>