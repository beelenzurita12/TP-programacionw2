<?php

    class Controller_agregar_articulo extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("agregar_articulo_view.php", "template_view.php");
        }

        public function agregar(){
        	if($_SERVER['REQUES_METHOD'] == 'POST'){
        		$inputsValidos = $this->validarInputPost($_POST);

        		if($inputsValidos){
        			$this->model->agregarProducto($_POST);

        		} else {
        			$this->view->generate("agregar_articulo_view.php", "template_view.php", $inputsErroneos);
        		}
        	}
        }

        public function validarInputPost($post){
        	$inputPost = $post;
        	$inputsRequeridos = ["nombre", "descripcion", "precio", "cantidad", "categoria", "fecha_publicacion"];
        	$inputsErroneos;
        	$i = 0;

        	foreach ($inputPost as $key => $value) {
        		if($value != ""){
        			$inputsErroneos[$i] = $key;
        			$i++;
        		}
        	}

        	if(sizeof($inputsErroneos) > 0){
        		return false;

        	} else {
        		// validamos los campos criticos.
        		return true;
        	}
        }
    }
?>