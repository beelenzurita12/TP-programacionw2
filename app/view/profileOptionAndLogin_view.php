<?php

    if($data["estaLogueado"]){
        echo '<div class="dropdown">
                <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button> -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="' . $GLOBALS["root"] . 'public/image/man.png" alt="perfil">
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="' . __DIR__ . "" . '">Salir</a>
                </div>
            </div>';
    }else {
        echo '<a class="nav-link" href="' . $GLOBALS['root'] . 'login/">Login</a>';
        
    }
?>