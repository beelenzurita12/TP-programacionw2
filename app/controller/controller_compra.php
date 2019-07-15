<?php

class Controller_compra extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->irAHomeSiNoEstaLogueado();

        if(empty($_GET["idCompra"])){
            $this->view->generate("404_view.php", "template_view.php");

        } else {
            $idCompra = $_GET["idCompra"];

            $compra = $this->model->obtenerInfoDeCompra($idCompra);
            $compra["mensajes"] = $this->model->obtenerMensajes($idCompra);

            $this->view->generate("compra_view.php", "template_view.php", $compra);
        }
    }

    public function producto(){
        $this->irAHomeSiNoEstaLogueado();

        if(empty($_GET["id"]) || empty($_GET["cantidad"]) || empty($_GET["entrega"]) ){
            $this->view->generate("404_view.php", "template_view.php");

        } else {
            $idUsuario = $_SESSION["idUsuario"];
            $idProducto = $_GET["id"];
            $cantidad = $_GET["cantidad"];
            $entrega = $_GET["entrega"];

            $idCompra = $this->model->generarCompra($idUsuario, $idProducto, $cantidad, $entrega);
            $this->model->modificarCantidad($idProducto, $cantidad);

            header("location: ". $GLOBALS["root"] . "compra/index?idCompra=". $idCompra);
        }
    }

    public function listado(){
        $this->irAHomeSiNoEstaLogueado();

        $idUsuario = $_SESSION["idUsuario"];

        $compras = $this->model->obtenerLasComprasHechas($idUsuario);

        $this->view->generate("compras_hechas_view.php", "template_view.php", $compras);
    }
}