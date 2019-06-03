<?php 

	class Model_registrar extends Model{

		public function __construct(){
			parent::__construct();
		}

		public function registrarUsuario($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono, $cuil, $email, $password){
			$connection = $this->getConnection();

			$insert = "INSERT INTO usuario (nombre, apellido, dni, calle, localidad, telefono, cuil, email, password)";
			$insert .= "VALUES (:nombre, :apellido, :dni, :calle, :localidad, :telefono, :cuil, :email, :password)";

			$query = $connection->prepare($insert);
			$respuesta = $query->execute([':nombre' => $nombre, ':apellido' => $apellido, ':dni' => $dni,
									  	  ':calle' => $calle, ':localidad' => $localidad, ':telefono' => $telefono,
								          ':cuil' => $cuil, ':email' => $email, ':password' => $password]);
		
			if($respuesta){
				return true;

			}else {
				// Enviar 505.
				return false;
			}
		}
	}
?>