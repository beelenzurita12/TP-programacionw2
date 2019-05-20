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
        $usuario = new UsuarioDB();

        return $usuario->buscarUsario($this->usuario, $this->password);
    }
}