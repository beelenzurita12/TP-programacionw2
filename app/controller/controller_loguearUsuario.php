<?php

	class Controller_loguearUsuario extends Controller {

		private $email;
		private $password;

		public function __construct(){
			parent::__construct();
			$this->urlRoot = $GLOBALS['root'];
		}

		public function verificar(){

			$email = $_POST["email"];
			$password = $_POST["password"];

			$existeUsuario = $this->model->validar($email, $password);

			if($existeUsuario['isValid']){
				$_SESSION['estaLogueado'] = $existeUsuario["isValid"];
				$_SESSION['idUsuario'] = $existeUsuario["idUsuario"];
				$_SESSION['tipoUsuario'] = $existeUsuario["tipoUsuario"];
				$_SESSION['nombre'] = $existeUsuario["nombre"];

				header("location: $this->urlRoot" . "inicio");
				
			} else {
				$_SESSION['estaLogueado'] = false;
				// header("location: $this->urlRoot" . "login");
			}
		}

		public function desloguearUsuario(){
			$_SESSION['estaLogueado'] = false;

			header("location: $this->urlRoot" . "inicio");
		}
	}
?>