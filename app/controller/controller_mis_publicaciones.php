<?php

    class Controller_mis_publicaciones extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
			$this->irAHomeSiNoEstaLogueado();

			$idUsuario = $_SESSION["idUsuario"];
			$publicaciones = $this->model->obtenerProductos($idUsuario);

			$this->view->generate("mis_publicaciones_view.php", "template_view.php", $publicaciones);
		}
		
		public function editar(){
            
        }
    }
?>