<?php

require_once('UsuarioValido.php');
require_once('UsuarioAdministrador.php');
require_once('UsuarioInvalido.php');

class Loguear{
    
    public function __construct(){

    }

    public function logearUsuario($tipoDeCredencial){
        $usuario;

        if($tipoDeCredencial['isValid']){
            $idUsuario = $tipoDeCredencial['idUsuario'];
            $tipoUsuario = $tipoDeCredencial['tipoUsuario'];

            switch($tipoUsuario){
                case "comun":
                    $usuario = new UsuarioValido($idUsuario);
                    break;
                case 'administrador':
                    $usuario = new UsuarioAdministrador($idUsuario);
                    break;
            }

        } else {
            $usuario = new UsuarioInvalido();    
        }

        return $usuario;
    }
}