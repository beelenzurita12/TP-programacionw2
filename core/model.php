<?php

    class Model{

	    private $connection;
    
        public function __construct(){

            // Crea tu propio archivo de configuración acorde a tu configuración de Mysql
            $configData = parse_ini_file(__DIR__ . '/../app/config/database_config.ini');
            $host = $configData['host'];
            $dbname = $configData['dbname'];
            $user = $configData['user'];
            $password = $configData['password'];

            try {
                $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

                // Activar notificaciones de errores
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

            } catch (Exception $e) {
                echo 'Conexión rechazada: ' . $e->getMessage(); 
            }
        }

        protected function getConnection(){
            return $this->connection;
        }
    }
?>