<?php 

	class Model_registrar extends Model{

		public function __construct(){
			parent::__construct();
		}

		public function registrarUsuario($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono, $cuil, $email, $password){
			$connection = $this->getConnection();

			$insert = "INSERT INTO usuario (nombre, apellido, dni, calle, nroCalle, localidad, telefono, cuil, email, password, tipoUsuario)";
			$insert .= "VALUES (:nombre, :apellido, :dni, :calle, :nroCalle, :localidad, :telefono, :cuil, :email, :password, :tipoUsuario)";

			$query = $connection->prepare($insert);
			$respuesta = $query->execute([':nombre' => $nombre, ':apellido' => $apellido, ':dni' => $dni,
									  	  ':calle' => $calle, ':nroCalle' => $nroCalle, ':localidad' => $localidad, ':telefono' => $telefono,
								          ':cuil' => $cuil, ':email' => $email, ':password' => $password, ":tipoUsuario" => "comun"]);
		
			$idUsuario->lastInsertId();
			
			$insertEstado = "INSERT INTO estadoUsuario (idUsuario, habilitado) VALUES (:idUsuario, true)";
			$queryEstado = $connection->prepare($insertEstado);
			$queryEstado->execute([":idUsuario" => $idUsuario]);
		}
	}
?>