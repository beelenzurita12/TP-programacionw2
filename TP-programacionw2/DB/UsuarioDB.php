<?php

require_once("./ManejadorDB.php");

class UsuarioDB extends ManejadorDB{

	public function __construct(){
		parent::__construct();

	}

	public function registrarUsuario($nombre, $apellido, $email, $password){
		$insert = "INSERT INTO usuario (nombre, apellido, email, password) VALUES";
		$insert .= "(':nombre', ':apellido', ':email', ':password')";

		$queryInsert = $connection->prepare($insert);

		try {
			$queryInsert->execute([":nombre"=> $nombre, ":apellido"=> $apellido, ":email"=> $email, ":password"=> $password]);

			return true;
		} catch (Exception $e){

			return false;
		}
	}
}