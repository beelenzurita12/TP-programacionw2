<?php

    for($i = 0; $i < sizeof($data); $i++){
        $imagen = $GLOBALS['root'] . "public/upload/" . $data[$i]['imagen'];

        $publicacion = "<div class='full-width post'>
                            <figure class='full-width post-img'>
                                <img src='" . $imagen . "' alt='' class='img-responsive'>
                            </figure> 
                            <div class='full-width post-info'>
                                <a href='" . $GLOBALS["root"] . "post/index?idProducto=" . $data[$i]['idProducto'] . "' class='full-width post-info-title'>" . $data[$i]["nombre"] . "</a>
                                <p class='full-width post-info-price'>$" . $data[$i]["precio"] . "</p>
                                <i class='far fa-heart post-info-like'></i>
                            </div>
                        </div>";

        echo $publicacion;
    }
?>