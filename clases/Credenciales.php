<?php

require_once('DB/ManejadorDB.php');

class Credenciales{
    private $usuario;
    private $password;

    public function __construct($usuario, $password){
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function tipoDeCredenciales(){
        $conexion = new ManejadorDB();

        return $conexion->buscarUsario($this->usuario, $this->password);
    }
}
