<?php

class Controller_carrito_de_compras extends Controller{

    public function __constructor(){
        parent::__constructor();
    }

    public function index(){
        $idUsuario = $_SESSION['idUsuario'];

        $productos = $this->model->obtenerProductosCarrito($idUsuario);

        $this->view->generate("carrito_de_compras_view.php", "template_view.php", $productos);
    }

    public function eliminar_de_carrito(){
        $idUsuario = $_SESSION['idUsuario'];

        $existeProducto = $this->model->existeElProductoEnCarrito($idUsuario, $_GET['id']);
        
        if(!$existeProducto){
            $this->view->generate("404_view.php", "template_view.php");
            return;
        }

        $this->model->eliminarProductoDelCarrito($idUsuario, $_GET['id']);
        $productos = $this->model->obtenerProductosCarrito($idUsuario);
        $totalEnCarrito = $this->model->productosEnCarrito($_SESSION['idUsuario']);

        $_SESSION['productosEnCarrito'] = $totalEnCarrito;

        $this->view->generate("carrito_de_compras_view.php", "template_view.php", $productos);

    }

    public function agregar(){
        $existe = $this->model->existeElProducto($_GET['idProducto']);

        // le coloqué ! porque me pareció que es más facil de entender que la maraña
        // que se terminaba formando en el model si fuera noExisteElProducto
        if(!$existe){
            $this->view->generate("404_view.php", "template_view.php");

        } else {
            $idProducto = $_GET['idProducto'];
            $idUsuario = $_SESSION['idUsuario'];

            $this->model->agregarAlCarrito($idProducto, $idUsuario);
            $totalEnCarrito = $this->model->productosEnCarrito($_SESSION['idUsuario']);

            $_SESSION['productosEnCarrito'] = $totalEnCarrito;

            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
}