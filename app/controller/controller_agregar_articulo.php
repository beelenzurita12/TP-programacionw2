<?php

    class Controller_agregar_articulo extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("agregar_articulo_view.php", "template_view.php");
        }
    }
?>