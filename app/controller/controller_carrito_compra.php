<?php

class Controller_carrito_compra extends Controller{

    public function __constructor(){
        parent::__constructor();
    }

    public function index(){
        $this->view->generate("carrito_view.php", "template_view.php");
    }

    public function agregar(){
        // $this->model->agregarProductoAlCarrito($_GET['id'], $_SESSION['idUsuario']);
        $existe = $this->model->existeElProducto($_GET['id']);

        // le coloqué ! porque me pareció que es más facil de entender que la maraña
        // que se terminaba formando en el model si fuera noExisteElProducto
        if(!$existe){
            $this->view->generate("404_view.php", "template_view.php");

        } else {
            $idProducto = $_GET['id'];
            $idUsuario = $_SESSION['idUsuario'];

            $this->model->agregarAlCarrito($idProducto, $idUsuario);
            $totalEnCarrito = $this->model->productosEnCarrito($_SESSION['idUsuario']);

            $_SESSION['productosEnCarrito'] = $totalEnCarrito;

            // header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
}