<?php

    class Model_loguearUsuario extends Model{

	    public function __construct(){
		    parent::__construct();
	    }

	    public function validar($email, $password){
            $selectUsuario = "SELECT count(*) as existeUsuario, nombre, tipoUsuario, u.idUsuario, e.habilitado FROM usuario u ";
            $selectUsuario .= "INNER JOIN estadoUsuario e ON e.idUsuario = u.idUsuario WHERE email = :email AND password = :password";
		    $connection = $this->getConnection();

		    try {
                $queryUsuario = $connection->prepare($selectUsuario);
                $resultadoSelect = $queryUsuario->execute([":email" => $email, ":password" => $password]);
            
                while($resultadoFila = $queryUsuario->fetch(PDO::FETCH_ASSOC)){
                    if($resultadoFila['existeUsuario'] == '1'){

                        $productosEnCarrito = $this->productosEnCarrito($resultadoFila['idUsuario']);

                        return Array(
                            "idUsuario" => $resultadoFila['idUsuario'],
                            "tipoUsuario" => $resultadoFila['tipoUsuario'],
                            "nombre" => $resultadoFila['nombre'],
                            "productosEnCarrito" => $productosEnCarrito,
                            "isValid" => true,
                            "estaHabilitado" => $resultadoFila["habilitado"]
                        );
    
                    } else {
                        return Array("isValid" => false);
                    }
                }

            } catch (Exception $e) {
                echo 'error: ' . $e->getMessage();
            }
        }
        
        private function productosEnCarrito($idUsuario){
            $selectCarrito = "SELECT count(*) as cantidad FROM carrito WHERE idUsuario = :idUsuario";
            $connection = $this->getConnection();

            $queryCarrito = $connection->prepare($selectCarrito);
            $queryCarrito->execute([":idUsuario" => $idUsuario]);
            $resultadoCarrito = $queryCarrito->fetchAll(PDO::FETCH_ASSOC);

            return $resultadoCarrito[0]['cantidad'];
        }
    }
?>