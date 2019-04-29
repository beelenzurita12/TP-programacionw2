<?php

class UsuarioValido{
    private $idUsuario;

    public function __construct($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function redireccionar(){
        header('location:home.php');
    }
}