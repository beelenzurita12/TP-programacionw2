<?php

    class Model{

        private $connection;
        private $host;
        private $dbname;
        private $user;
        private $password;
    
        public function __construct(){

            // Crea tu propio archivo de configuración acorde a tu configuración de Mysql
            $configData = parse_ini_file(__DIR__ . '/../app/config/database_config.ini');
            $this->host = $configData['host'];
            $this->dbname = $configData['dbname'];
            $this->user = $configData['user'];
            $this->password = $configData['password'];
        }

        protected function getConnection(){
            try {
                $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);

                // Activar notificaciones de errores
                $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

            } catch (Exception $e) {
                echo 'Conexión rechazada: ' . $e->getMessage(); 
            }

            return $this->connection;
        }

        protected function closeConnection(){
            $this->connection = null;
        }
    }
?>