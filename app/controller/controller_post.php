<?php

    class Controller_post extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("post_view.php", "template_view.php");
        }
    }
?>