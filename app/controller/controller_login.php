<?php

    class Controller_login extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $urlRoot = $GLOBALS['root'];
            $estaLogueado = !empty($_SESSION['estaLogueado']) ? $_SESSION['estaLogueado'] : false;

            if($estaLogueado){
                header("location: $urlRoot" . "inicio");
                
            }else {
                $this->view->generate("login_view.php", "template_view.php");
            }
        }
    }
?>