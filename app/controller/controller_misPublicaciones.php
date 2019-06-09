<?php

    class Controller_misPublicaciones extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("misPublicaciones_view.php", "template_view.php");
        }
    }
?>