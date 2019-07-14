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
    		$idUsuario = isset($_SESSION['idUsuario']) ? $_SESSION["idUsuario"] : -1;
			$idUsuario = 435;
			
			$producto = $this->model->obtenerProducto($idProducto);
			$producto["productosRelacionados"] = $this->model->productosRelacionados($producto["categoria"], $idProducto);
			
			if(empty($producto)){
				$this->view->generate("404_view.php", "template_view.php");

			} else {
				$producto['mismoUsuario'] = $this->model->esPropietarioDeLaPublicacion($idUsuario, $idProducto);
				$producto["comentarios"] = $this->model->obtenerComentarios($idProducto);
				
				$this->view->generate("post_view.php", "template_view.php", $producto);
			}
        }
    }
?>