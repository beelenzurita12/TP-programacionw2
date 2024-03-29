<?php

    class Controller_producto extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
			$estaLogueado = $_SESSION['estaLogueado'];

			if($estaLogueado && isset($_GET['id'])){
				$idProducto = $_GET['id'];

				$resultadoProducto = $this->model->obtenerProducto($idProducto);
				$producto["post"] = $resultadoProducto[0];
				$producto["submit"] = "producto/editar?id=" . $idProducto;

				$this->view->generate("agregar_producto_view.php", "template_view.php", $producto);

			} else if($estaLogueado){
				$data["submit"] = "producto/agregar";
				$this->view->generate("agregar_producto_view.php", "template_view.php", $data);

			} else {
				header("location: " . $GLOBALS['root'] . "inicio");
			}
		}

        public function agregar(){
        	if($_SERVER['REQUEST_METHOD'] == 'POST'){				
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

		public function editar(){
			if(empty($_POST)){
				header("location: " . $GLOBALS['root'] . "inicio");

			} else {
				$inputsValidos = $this->validarInputsPost($_POST);
				$tieneEspacios = $this->validarQueNoTenganSoloEspacios($_POST);

        		if($inputsValidos["inputsValido"] && $tieneEspacios["inputsValido"]){
					$idProducto = $_GET['id'];
					$this->model->editarProducto($idProducto); // YA ESTÁ CREADO REVISAR!!!
					$data = false;

        		} else {
					$data["invalidos"] = $this->retornarInputsInvalidos($inputsValidos["inputs"], $tieneEspacios["inputs"]);
					$data["post"] = $_POST;
				}
				
				$this->view->generate("agregar_producto_view.php", "template_view.php", $data);
			}
		}
		
		public function eliminar(){
            $estaLogueado = $_SESSION["estaLogueado"];
        	$idProducto = $_GET["id"];

        	if($estaLogueado){
        		$idUsuario = $_SESSION["idUsuario"];

        		$this->model->eliminarProducto($idProducto);
        		$publicaciones = $this->model->obtenerProductos($idUsuario);

        		$this->view->generate("mis_publicaciones_view.php", "template_view.php", $publicaciones);
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