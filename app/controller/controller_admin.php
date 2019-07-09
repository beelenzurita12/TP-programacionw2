<?php

    class Controller_admin extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("admin_view.php", "template_view.php");
        }
    }
?>