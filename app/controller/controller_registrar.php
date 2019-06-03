<?php 
	class Controller_registrar extends Controller{
		
		private $urlRoot;
		private $nombre;
	    private $apellido;
	    private $dni;
	    private $calle;
	    private $nroCalle;
	    private $localidad;
	    private $telefono;
	    private $cuil;
        private $email;
	    private $password;
	    private $passwordRepetida;

		public function __construct(){
			parent::__construct();
			$this->urlRoot = $GLOBALS['root'];
		}

		public function index(){
			$estaLogueado = !empty($_SESSION['estaLogueado']) ? $_SESSION['estaLogueado'] : false;

            if($estaLogueado){
					header("location: $this->urlRoot" . "inicio");
				
            }else {
				$data = ["submit" => false];

				$this->view->generate("registrar_view.php", "template_view.php", $data);
			}
		}

		public function registrar_usuario(){
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$dni = $_POST['dni'];
			$calle = $_POST['calle'];
			$nroCalle = $_POST['nroCalle'];
			$localidad = $_POST['localidad'];
			$telefono = $_POST['telefono'];
			$cuil = $_POST['cuil'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$passwordRepetida = $_POST['passwordRepetida'];

			$inputValido = $this->setUsuario($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono, $cuil, $email, $password, $passwordRepetida);

			if($inputValido['valido']){
				//aquí se envía el correo al usuario para confirmar cuenta

				//¿es correcto que en caso de error 505 se redireccione en el mismo model?
				var_dump($this);
				$this->model->registrarUsuario($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono, $cuil, $email, $password);

				$data = ["submit"=> true, 
					"mensaje" => "Registro Exitoso",
					"className" => "alert alert-success"];

				$this->view->generate("registrar_view.php", "template_view.php", $data);

			}else {
				//envíar cual dato está incorrecto en $data
				$campoErroneo = $inputValido['campoErroneo'];
				$mensajeErroneo = $inputValido['mensajeErroneo'];

				$data = ["submit"=> true, 
					"mensaje" => "El campo $campoErroneo debe $mensajeErroneo", 
					"className" => "alert alert-danger"];

				$this->view->generate("registrar_view.php", "template_view.php", $data);
			}
		}

		private function setUsuario($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono, $cuil, $email, $password, $passwordRepetida){
			if(!$this->validarNombre($nombre)){
				return ["valido" => false, "campoErroneo" => "nombre", "mensajeErroneo" => "tener solo caracteres"];
			}

			if(!$this->validarApellido($apellido)){
				return ["valido" => false, "campoErroneo" => "apellido", "mensajeErroneo" => "tener solo caracteres"];
			}

			if(!$this->validarDni($dni)){
				return ["valido" => false, "campoErroneo" => "dni", "mensajeErroneo" => "tener solo números"];
			}
			
			if(!$this->validarCalle($calle)){
				return ["valido" => false, "campoErroneo" => "calle", "mensajeErroneo" => "tener solo caracteres válidos"];
			}

			if(!$this->validarNroCalle($nroCalle)){
				return ["valido" => false, "campoErroneo" => "número de calle", "mensajeErroneo" => "tener solo números"];
			}

			if(!$this->validarLocalidad($localidad)){
				return ["valido" => false, "campoErroneo" => "localidad", "mensajeErroneo" => "tener solo caracteres"];
			}

			if(!$this->validarTelefono($telefono)){
				return ["valido" => false, "campoErroneo" => "telefono", "mensajeErroneo" => "tener solo "];
			}

			if(!$this->validarCuil($cuil)){
				return ["valido" => false, "campoErroneo" => "cuil", "mensajeErroneo" => "tener un formato válido"];
			}

			if(!$this->validarEmail($email)){
				return ["valido" => false, "campoErroneo" => "email", "mensajeErroneo" => "tener un formáto de emai válido"];
			}

			if(!$this->validarPassword($password, $passwordRepetida)){
				return ["valido" => false, "campoErroneo" => "password", "mensajeErroneo" => "tener entre 8 y 12 caracteres alfanuméricos"];
			}

			//Si todo marcha OK retorna un true
			return ["valido" => true];
		}
		
		public function validarNombre($nombre){
    	    if(preg_match("/^[a-zA-Z-ñ]+$/", $nombre)){
				$this->nombre = $nombre;
				return true;
				
    	    } else{
    		    return false;
    	    }
        }

	    // Validar apellido
        public function validarApellido($apellido){
    	    if(preg_match("/^[a-zA-Z-ñ]+$/", $apellido)){
				$this->apellido = $apellido;
				return true;

    	    } else{
    		    return false;
    	    }	
        }

	    // Validar dni
	    public function validarDni($dni){
		    if(preg_match("/^\d{6,8}$/", $dni)){
				$this->dni = $dni;
				return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar calle
	    public function validarCalle($calle){
		    if(preg_match("/^[a-zA-Z0-9-ñ, ]*$/", $calle)){
				$this->calle = $calle;
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validad nroCalle
	    public function validarNroCalle($nroCalle){
		    if(preg_match("/^[0-9]{1,5}$/", $nroCalle)){
				$this->nroCalle = $nroCalle;
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar localidad
	    public function validarLocalidad($localidad){
		    if(preg_match("/^[a-zA-Z0-9-ñ, ]*$/", $localidad)){
				$this->localidad = $localidad;
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar teléfono
	    public function validarTelefono($telefono){
		    if(preg_match("/^[0-9-\ ]{1,12}$/", $telefono)){
				$this->telefono = $telefono;
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar cuil
	    public function validarCuil($cuil){
		    if(preg_match("/^[0-9]{2}-[0-9]{8}-[0-9]$/", $cuil)){
				$this->cuil = $cuil;
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar email
        public function validarEmail($email){
    	    if(preg_match("/^\w+@\w+\.(com|ar|net)$/", $email)){
				$this->email = $email;
    		    return true;

    	    } else{
    		    return false;
    	    }
        }

	    // Validar password
        public function validarPassword($password, $passwordRepetida){
    	    if($password == $passwordRepetida){
				$this->password = $password;
    		    return true;

    	    } else{
    		    return false;
    	    }
        }
	}
?>