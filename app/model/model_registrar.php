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
			// enviar 505
			return false;
		}
	}
}
?>

<!-- create table usuario (
	id int auto_increment,
	nombre varchar(15) not null,
	apellido varchar(15) not null,
	dni int(10) not null,
	calle varchar(15) not null,
	localidad varchar(15) not null,
	telefono varchar(15) not null,
	cuil varchar(15) not null,
	email varchar(30) not null,
	password varchar(13) not null,
	primary key(id)
) -->