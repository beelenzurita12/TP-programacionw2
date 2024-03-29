<?php

    class Controller_resultados_de_busqueda extends Controller{

        private $busqueda;

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $busqueda = "";
            $publicaciones = $this->model->buscarProductos($busqueda);

            $this->view->generate("resultados_de_busqueda_view.php", "template_view.php", $publicaciones);
        }

        public function buscar(){
            $busqueda = $_POST["busqueda"];

            $publicaciones = $this->model->buscarProductos($busqueda);

            $this->view->generate("resultados_de_busqueda_view.php", "template_view.php", $publicaciones);
        }

        public function buscarPorCategoria(){
            $categoria = $_GET["categoria"];

            $publicaciones = $this->model->buscarProductos($categoria);
            // var_dump($publicaciones);
            $this->view->generate("resultados_de_busqueda_view.php", "template_view.php", $publicaciones);
        }
    }
?>