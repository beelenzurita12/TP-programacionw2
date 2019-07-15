<div class="container">
    <?php 
        for($i = 0; $i < sizeof($data); $i++){
        $mensaje = '<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="comments-tab-classic">
                        <div class="media">
                        <img class="avatar mr-3" src=" ' . $GLOBALS['root'] . "public/image/man.png" . '" alt="User">
                        <div class="media-body">
                            <div class="d-flex justify-content-between">
                            <h5 class="mt-0 mb-1 font-weight-bold">' . $data[$i]["nombre"] . ' ' . $data[$i]["apellido"] . '</h5>
                            <ul class="list-unstyled mb-1 pb-2">
                                <li class="comment-date font-small font-weight-normal"><i class="far fa-clock pr-2"></i>' . $data[$i]["fechaMensaje"] . '</li>
                            </ul>
                            </div>
                            <p class="font-weight-light mt-2 mb-4">' . $data[$i]["mensaje"] . '</p>
                        </div>
                        </div>
                    </div>';
    
        echo $mensaje;
        } 
    ?>
    <div class="row">
        <div class="card-body px-0 coment">
            <form action="<?php echo $GLOBALS['root'] . 'mensaje/enviarMensaje'?>" method="post">
                <input type="text" name="idCompra" value="<?php echo $data[0]['idCompra'] ?>" hidden/>
                <input type="text" name="idUsuarioReceptor" value="<?php echo $data[0]['idReceptor'] ?>" hidden/>
                <textarea class="md-textarea form-control" rows="3" name="mensaje" placeholder="Escribe tu pregunta..."></textarea>
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-flat btn-sm waves-effect" aria-expanded="true">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-sm mr-0" aria-expanded="true">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>