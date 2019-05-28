<?php

require_once(__DIR__ . './UsuarioValido.php');
require_once(__DIR__ . './UsuarioAdministrador.php');
require_once(__DIR__ . './UsuarioInvalido.php');

session_start();

class Loguear{
    
    public function __construct(){

    }

    public function loguearUsuario($tipoDeCredencial){
        $usuario;
        
        if($tipoDeCredencial['isValid']){
            $idUsuario = $tipoDeCredencial['idUsuario'];
            $tipoUsuario = $tipoDeCredencial['tipoUsuario'];
            $nombre = $tipoDeCredencial['nombre'];

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

        $_SESSION['tipoUsuario'] = $tipoUsuario;
        $_SESSION['estaLogeado'] = $tipoDeCredencial['isValid'];
        $_SESSION['idUsuario'] = $idUsuario;
        $_SESSION['nombre'] = $nombre;

        return $usuario;
    }
}