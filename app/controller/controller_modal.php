<?php

    class Controller_modal extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("modal_view.php", "template_view.php");
        }
    }
?>