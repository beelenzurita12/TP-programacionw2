<?php

    class Controller_login extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("login_view.php", "template_view.php");
        }
    }
?>