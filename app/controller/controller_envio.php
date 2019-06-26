<?php

    class Controller_envio extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("envio_view.php", "template_view.php");
        }
    }
?>