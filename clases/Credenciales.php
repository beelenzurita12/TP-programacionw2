<?php

require_once(__DIR__ . "/../DB/UsuarioDB.php");

class Credenciales{
    private $usuario;
    private $password;

    public function __construct($usuario, $password){
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function tipoDeCredenciales(){
        $connection = new UsuarioDB();

        // retorna un array asociativo con nombre, id y si es valido
        return $connection->retornarUsario($this->usuario, $this->password);
    }
}