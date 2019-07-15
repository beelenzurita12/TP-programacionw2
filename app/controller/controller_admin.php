<?php

    class Controller_admin extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        public function index(){

            $estaLogueado = $_SESSION["estaLogueado"];

        	if($estaLogueado){
                
                if($_SESSION['tipoUsuario'] == 'admin'){
                    $this->view->generate("admin_view.php", "template_admin_view.php");
                } else{
                    $this->view->generate("404_view.php", "template_view.php");
                }
                
        	} else {
        		header("location:" . $GLOBALS["root"]);
        	}
        }

        public function usuarios(){

            if(!$_SESSION['estaLogueado']){
                header("location: ". $GLOBALS['root'] . "login/");

            } else {
                $usuarios = $this->model->obtenerUsuarios();
    
                $this->view->generate("usuarios_view.php", "template_admin_view.php", $usuarios);
            }
        }

        public function estadisticas(){
            $this->view->generate("estadisticas_view.php", "template_admin_view.php");
        }
    }
?>