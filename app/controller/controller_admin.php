<?php

    class Controller_admin extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        /*public function index(){
            $this->irAHomeSiNoEstaLogueado();

            // esta vista no existe aún ¿qué se va a hacer?
            $this->comprobarSiEsAdmin();

            $this->view->generate("admin_view.php", "template_view.php");
        }*/

        public function usuarios(){
            $this->irAHomeSiNoEstaLogueado();
            
            $this->comprobarSiEsAdmin();

            $usuarios["habilitados"] = $this->model->obtenerUsuariosHabilidatos();
            $usuarios["deshabilitados"] = $this->model->obtenerUsuariosDeshabilitados();
            // var_dump($usuarios["habilitados"]);
            $this->view->generate("usuarios_view.php", "template_admin_view.php", $usuarios);
        }

        public function estadisticas(){
            $this->irAHomeSiNoEstaLogueado();

            $this->comprobarSiEsAdmin();
            $this->view->generate("estadisticas_view.php", "template_admin_view.php");
        }

        public function bloquearUsuario(){
            $this->irAHomeSiNoEstaLogueado();

            $this->comprobarSiEsAdmin();

            $idUsuario = $_GET["idUsuario"];

            $this->model->bloquearUsuario($idUsuario);

            header("location: ". $GLOBALS["root"] . "admin/usuarios");
        }

        public function desbloquearUsuario(){
            $this->irAHomeSiNoEstaLogueado();

            $this->comprobarSiEsAdmin();

            $idUsuario = $_GET["idUsuario"];

            $this->model->desbloquearUsuario($idUsuario);

            header("location: ". $GLOBALS["root"] . "admin/usuarios");
        }

        private function comprobarSiEsAdmin(){
            if(!($_SESSION["tipoUsuario"] == "admin")){
                return $this->view->generate("404_view.php", "template_view.php");
            }
        }
    }
?>