<?php

	class Controller_loguearUsuario extends Controller {

		private $usuario;
		private $password;

		public function __construct(){
			parent::__construct();
		}

		public function verificar(){

			$usuario = $_POST["usuario"];
			$password = $_POST["password"];

			$existeUsuario = $this->model->validar($usuario, $password);
			
			$url = $GLOBALS["root"];

			if($existeUsuario['isValid']){
				$_SESSION['estaLogueado'] = $existeUsuario["isValid"];
				$_SESSION['idUsuario'] = $existeUsuario["idUsuario"];
				$_SESSION['tipoUsuario'] = $existeUsuario["tipoUsuario"];
				$_SESSION['nombre'] = $existeUsuario["nombre"];

				header("location: $url" . "inicio");

			} else {
				$_SESSION['estaLogueado'] = false;
				header("location: $url" . "login");
			}
		}
	}
?>