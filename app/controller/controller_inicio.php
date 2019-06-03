<?php

/* Desde aquí se llaman a los modelos y se pasan a la vista, los modelos ya están instanciados 
   en el routes.php */

    class Controller_inicio extends Controller{
    
        public function __construct(){
            parent::__construct();
        }

        // Aquí irán los acction de la URL
        public function index(){
            $this->view->generate("inicio_view.php", "template_view.php");
        }
    }
?>