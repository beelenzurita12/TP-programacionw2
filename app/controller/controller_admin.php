<?php

    class Controller_admin extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){

            $estaLogueado = $_SESSION["estaLogueado"];

        	if($estaLogueado){
                if($_SESSION['tipoUsuario'] == 'admin'){
                    $this->view->generate("admin_view.php", "template_view.php");
                }else{
                    $this->view->generate("404_view.php", "template_view.php");
                }
        	} else {
        		header("location:" . $GLOBALS["root"]);	
        	}
        }
    }
?>