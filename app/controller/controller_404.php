<?php

    class Controller_404 extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            
            $this->view->generate("404_view.php", "template_view.php");
        }
    }
?>