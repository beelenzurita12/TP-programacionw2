<div class="container mt-4">
    <?php
        for($i = 0; $i < sizeof($data); $i++){
            $compra = '
                <div class="row">
                    <div class="card mb-3 product-info" style="max-width: 50vw;">
                        <div class="row no-gutters">
                            <div class="col-sm-3 text-center">
                                <img src="'. $GLOBALS["root"] . "public/upload/" . $data[$i]["imagen"] .'" width="90%" class="m-3" alt="Img">
                            </div>
                            <div class="col-md-9 product-text">
                                <div class="card-body">
                                    <a href="'. $GLOBALS["root"] .'compra/index?idCompra='. $data[$i]["idCompra"] .'" ><h5 class="card-title"><b>'. $data[$i]["nombreProducto"] .'</b></h5></a>
                                    <p class="card-text">'. $data[$i]["descripcion"] .'</p>
                                    <p class="card-text"><small class="text-muted">Agregado el '. $data[$i]["fecha"] .'</small></p>
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
                    Aún no tienes compras.
                  </div>";
        }
    ?>
</div>