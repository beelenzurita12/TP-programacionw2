<?php

    class Controller_agregar_producto extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->view->generate("agregar_producto_view.php", "template_view.php");
        }

        public function agregar(){
        	if($_SERVER['REQUEST_METHOD'] == 'POST'){
				// var_dump($_FILES["imagenes"]['tmp_name']);
				// var_dump($_FILES);
				// var_dump($_POST);
				// move_uploaded_file($_FILES['imagenes']['tmp_name'], __DIR__ . "/../../upload/" . $_FILES['imagenes']['name']);
				
				$inputsValidos = $this->validarInputsPost($_POST);
				$tieneEspacios = $this->validarQueNoTenganSoloEspacios($_POST);

        		if($inputsValidos["inputsValido"] && $tieneEspacios["inputsValido"]){
					$this->model->agregarProducto();
					$data = false;

        		} else {
					$data["invalidos"] = $this->retornarInputsInvalidos($inputsValidos["inputs"], $tieneEspacios["inputs"]);
					$data["post"] = $_POST;
				}
				
				$this->view->generate("agregar_producto_view.php", "template_view.php", $data);
        	}
        }

        public function validarInputsPost($post){
        	$inputPost = $post;
        	$inputsRequeridos = ["nombre", "descripcion", "precio", "cantidad", "categoria", "fecha_publicacion"];
        	$inputsErroneos = [];
        	$i = 0;

        	foreach ($inputPost as $key => $value) {
        		if($value == ""){
        			$inputsErroneos[$i] = $key;
        			$i++;
        		}
			}
			
        	if(sizeof($inputsErroneos) > 0){
				return ["inputsValido" => false, "inputs" => $inputsErroneos];

        	} else {
				return ["inputsValido" => true, "inputs" => false];
        	}
		}
		
		public function validarQueNoTenganSoloEspacios($post){
			$i = 0;
			$inputsConSoloEspacios = [];

			foreach($post as $key => $value){
				if(preg_match("/^\s+$/", $value)){
					$inputsConSoloEspacios[$i] = $key;
					$i++;
				}
			}

			if(sizeof($inputsConSoloEspacios) > 0){
				return ["inputsValido" => false, "inputs" => $inputsConSoloEspacios];

			} else {
				return ["inputsValido" => true, "inputs" => false];
			}
		}

		public function retornarInputsInvalidos($inputsVacios, $inputsConSoloEspacios){
			if($inputsVacios){
				return $inputsVacios;

			} else if($inputsConSoloEspacios){
				return $inputsConSoloEspacios;

			} else {
				return; // Los dos concatenados.
			}
		}
    }
?>