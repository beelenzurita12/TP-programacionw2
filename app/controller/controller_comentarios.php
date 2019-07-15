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

    public function mensajeCompra(){
        if(empty($_SESSION["estaLogueado"])){
            header("location: " . $GLOBALS["root"] . "login/");
        }

        if(empty($_POST["mensaje"])){
            $this->view->generate("404_view.php", "template_view.php");
        }

        $idUsuarioEmisor = $_SESSION["idUsuario"];
        $idUsuarioReceptor = $_POST["idUsuarioReceptor"]; // Dueño del producto

        $this->model->enviarMensaje($_POST["idCompra"], $_POST["mensaje"], $idUsuarioEmisor, $idUsuarioReceptor);

        header("location: " . $GLOBALS["root"] . "compra/index?idCompra=" . $_POST["idCompra"]);
    }
} 