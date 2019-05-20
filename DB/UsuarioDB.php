<?php

require_once(__DIR__ . "./ManejadorDB.php");

class UsuarioDB extends ManejadorDB{

	public function __construct(){
		parent::__construct();

	}

	public function buscarUsario($usuario, $password){
		$selectUsuario = 'SELECT id, count(*) as existeUsuario, tipoUsuario FROM usuario WHERE usuario = :nombreUsuario AND password = :password';
		$connection = $this->getConnection();
        
        try {
            $querySelect = $connection->prepare($selectUsuario);
            $resultadoSelect = $querySelect->execute([":nombreUsuario" => $usuario, ":password" => $password]);
            
            while($resultadoFila = $querySelect->fetch(PDO::FETCH_ASSOC)){
                var_dump($resultadoFila);
                if($resultadoFila['existeUsuario'] == '1'){
                    return Array(
                        "idUsuario" => $resultadoFila['id'],
                        "tipoUsuario" => $resultadoFila['tipoUsuario'],
                        "isValid" => true
                    );
    
                } else {
                    return Array("isValid" => false);
                }
            }

        } catch (Exception $e) {
            echo 'error: ' . $e->getMessage();
        }
    }

	public function registrarUsuario($nombre, $apellido, $email, $password){
		$insert = "INSERT INTO usuario (nombre, apellido, email, password) VALUES";
		$insert .= "(':nombre', ':apellido', ':email', ':password')";
		$connection = $this->getConnection();

		$queryInsert = $connection->prepare($insert);

		try {
			$queryInsert->execute([":nombre"=> $nombre, ":apellido"=> $apellido, ":email"=> $email, ":password"=> $password]);

			return true;
		} catch (Exception $e){

			return false;
		}
	}
}