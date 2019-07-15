<?php

/* Desde aquí se llaman a los modelos y se pasan a la vista, los modelos ya están instanciados 
   en el routes.php */

    class Controller_inicio extends Controller{
    
        public function __constructor(){
            
        }

        // Aquí irán los acction de la URL
        public function index(){
            $_SESSION["estaLogueado"] = empty($_SESSION["estaLogueado"]) ? false : true;
            $_SESSION["tipoUsuario"] = isset($_SESSION["tipoUsuario"]) ? $_SESSION["tipoUsuario"] : false;
            
            $productos = $this->model->obtenerProductos();
            
            $this->view->generate("inicio_view.php", "template_view.php", $productos);
        }
    }
?>