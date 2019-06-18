<?php

    class Model_loguearUsuario extends Model{

	    public function __construct(){
		    parent::__construct();
	    }

	    public function validar($email, $password){
		    $selectUsuario = "SELECT count(*) as existeUsuario, nombre, tipoUsuario, idUsuario FROM usuario WHERE email = :email AND password = :password";
		    $connection = $this->getConnection();

		    try {
                $querySelect = $connection->prepare($selectUsuario);
                $resultadoSelect = $querySelect->execute([":email" => $email, ":password" => $password]);
            
                while($resultadoFila = $querySelect->fetch(PDO::FETCH_ASSOC)){
                    if($resultadoFila['existeUsuario'] == '1'){
                        return Array(
                            "idUsuario" => $resultadoFila['idUsuario'],
                            "tipoUsuario" => $resultadoFila['tipoUsuario'],
                            "nombre" => $resultadoFila['nombre'],
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
    }
?>