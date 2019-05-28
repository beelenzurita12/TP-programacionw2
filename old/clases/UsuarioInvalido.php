<?php

class UsuarioInvalido{
    
    public function __construct(){
    }

    public function redireccionar(){
        header('location:login.php');
    }
}