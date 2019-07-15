<?php

    class Controller_modal_calificar extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("modal_calificar_view.php", "template_view.php");
        }
    }
?>