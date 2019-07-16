<div class="container">
    <?php
        for($i = 0; $i < sizeof($data); $i++){
            $compra = '
                <div class="row">
                    <div class="card mb-3 product-info" style="max-width: 50vw;">
                        <div class="row no-gutters">
                            <div class="col-sm-3">
                                <img src="'. $GLOBALS["root"] . "public/upload/" . $data[$i]["imagen"] .'" width="90%" class="m-3" alt="Img">
                            </div>
                            <div class="col-md-9 product-text">
                                <div class="card-body">
                                    <a href="'. $GLOBALS["root"] .'mensaje/mensaje?idCompra='. $data[$i]["idCompra"] .'" ><h5 class="card-title"><b>Venta del producto: '. $data[$i]["nombre"] .'</b></h5></a>
                                    <p class="card-text">'. $data[$i]["mensaje"] .'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';

            echo $compra;
        }

        if(sizeof($data) == 0){
            echo "<div class='alert alert-danger' role='alert'>
                    Aún no tienes mensajes.
                  </div>";
        }
    ?>
</div>