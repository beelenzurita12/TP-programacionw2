<?php

require_once("./DB/UsuarioDB.php");

class UsuarioValido{
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    public function __construct($idUsuario = false){
		$this->idUsuario = $idUsuario;
		
    }

    public function validarNombre(){
    	if(preg_match("/^[a-zA-Z]+$/", $this->nombre)){
    		return true;

    	} else{
    		return false;
    	}
    }

    public function validarApellido(){
    	if(preg_match("/^[a-zA-Z]+$/", $this->apellido)){
    		return true;

    	} else{
    		return false;
    	}	
    }

    public function validarEmail(){
    	if(preg_match("/^\w+@\w+\.(com|ar|net)$/", $this->email)){
    		return true;

    	} else{
    		return false;
    	}
    }

    public function validarPassword(){
    	if($this->password->length > 5 && $this->password->length < 12){
    		return true;

    	} else{
    		return false;
    	}
    }

    public function insertarUsuario(){
    	if($this->nombre && $this->apellido && $this->password && $this->email){
    		$connection = new UsuarioDB();

    		return $connection->registrarUsuario($nombre, $apellido, $email, $password);
    	}
    }

    public function redireccionar(){
		$home = "home/index.php";
		
        header("location:$home");
    }
}