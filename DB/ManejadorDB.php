<?php

class ManejadorDB{
    private $pdo;
    
    public function __construct(){
        //Crea tu propio archivo de configuración a corde a tu configuración de Mysql
        require_once('configDatabase.php');

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwordDB);

            // activar notificaciones de errores
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        } catch (Exception $e) {
            echo 'Conexión rechazad: ' . $e->getMessage(); 
        }
    }

    public function buscarUsario($usuario, $password){
        $selectUsuario = 'SELECT id, count(*) as existeUsuario, tipoUsuario FROM usuario WHERE usuario = :nombreUsuario AND password = :password';
        
        try {
            $querySelect = $this->pdo->prepare($selectUsuario);
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
}
