<?php

    class Controller_post extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            
            if(!isset($_GET['idProducto'])){
        		$this->view->generate("post_view.php", "template_view.php");
        	}

    		$idProducto = $_GET['idProducto'];
    		$idUsuario = $_SESSION['idUsuario'];
    		// $idUsuario = 435;

    		$producto = $this->model->obtenerProducto($idProducto);
    		// var_dump($producto);

    		$producto['otroUsuario'] = !$this->model->esPropietarioDeLaPublicacion($idUsuario, $idProducto);

    		$this->view->generate("post_view.php", "template_view.php", $producto);
        }
    }
?>