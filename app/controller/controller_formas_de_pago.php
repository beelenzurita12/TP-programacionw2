<?php

    class Controller_formas_de_pago extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("formas_de_pago_view.php", "template_view.php");
        }
    }
?>