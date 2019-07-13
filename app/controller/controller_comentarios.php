<?php 

class Controller_comentarios extends Controller{

    public function __constructor(){
        parent::__constructor();
    }

    public function enviar(){
        if(!$_SESSION["estaLogueado"]){
            header("location: " . $GLOBALS["root"] . "login/");

        } else {
            $idUsuario = $_SESSION["idUsuario"];

            $this->model->enviarComentario($_POST["comentario"], $idUsuario, $_POST["idProducto"]);
            
            header("location: " . $GLOBALS["root"] . "post/index?idProducto=" . $_POST["idProducto"]);
        }
    }
} 