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
    }
?>