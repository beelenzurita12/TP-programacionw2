<?php

    class Controller{

        public $model;
        protected $view;

        public function __construct(){
            $this->view = new View();
        }

        public function irAHomeSiNoEstaLogueado(){
            if(!$_SESSION["estaLogueado"]){
                return header("location: ". $GLOBALS["root"] . "inicio/");
            }
        }

        public function paginaNoEncontrada(){
            return $this->view->generate("404_view.php", "template_view.php");
        }
    }
?>