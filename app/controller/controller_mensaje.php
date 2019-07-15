<?php 

class Controller_mensaje extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function misMensajes(){
        $this->irAHomeSiNoEstaLogueado();

        $idUsuario = $_SESSION["idUsuario"];

        $vendido = $this->model->productosVendidos($idUsuario);
        
        $this->view->generate("lista_mensaje_view.php", "template_view.php", $vendido);
    }

    public function mensaje(){
        $this->irAHomeSiNoEstaLogueado();

        if(empty($_GET["idCompra"])){
            $this->view("404_view.php", "template_view.php");
        }

        $idCompra = $_GET["idCompra"];

        $mensajes = $this->model->obtenerMensajes($idCompra);

        $this->view->generate("mensaje_view.php", "template_view.php", $mensajes);
    }

    public function enviarMensaje(){
        $this->irAHomeSiNoEstaLogueado();

        $idUsuario = $_SESSION["idUsuario"];
        $idReceptor = $_POST["idUsuarioReceptor"];
        $idCompra = $_POST["idCompra"];

        $this->model->enviarMensaje($idCompra, $_POST["mensaje"], $idUsuario, $idReceptor);
    }
}