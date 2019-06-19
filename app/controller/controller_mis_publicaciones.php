<?php

    class Controller_mis_publicaciones extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $estaLogueado = $_SESSION["estaLogueado"];

        	if($estaLogueado){
        		$idUsuario = $_SESSION["idUsuario"];
				$publicaciones = $this->model->obtenerProductos($idUsuario);
				
        		$this->view->generate("mis_publicaciones_view.php", "template_view.php", $publicaciones);

        	} else {
        		header("location:" . $GLOBALS["root"]);	
        	}
		}
		
		/*public function editar(){
            $estaLogueado = $_SESSION["estaLogueado"];
        	$idProducto = $_GET["id"];

        	if($estaLogueado){
        		$idUsuario = $_SESSION["idUsuario"];

        		$this->model->editarProducto($idProducto);
        		$publicaciones["post"] = $this->model->obtenerProductos($idUsuario);

        		$this->view->generate("editar_producto_view.php", "template_view.php", $publicaciones);
        	}
        }*/

        public function eliminar(){
            $estaLogueado = $_SESSION["estaLogueado"];
        	$idProducto = $_GET["id"];

        	if($estaLogueado){
        		$idUsuario = $_SESSION["idUsuario"];

        		$this->model->eliminarProducto($idProducto);
        		$publicaciones = $this->model->obtenerProductos($idUsuario);

        		$this->view->generate("mis_publicaciones_view.php", "template_view.php", $publicaciones);
        	}
        }
    }
?>