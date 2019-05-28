<?php

class ManejadorDB{
    private $connection;
    
    public function __construct(){
        //Crea tu propio archivo de configuración a corde a tu configuración de Mysql
        $ENV = parse_ini_file(__DIR__ . './configDatabase.ini');
        $host = $ENV['host'];
        $dbname = $ENV['dbname'];
        $user = $ENV['user'];
        $passwordDB = $ENV['passwordDB'];

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwordDB);

            //Activar notificaciones de errores
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        } catch (Exception $e) {
            echo 'Conexión rechazad: ' . $e->getMessage(); 
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}