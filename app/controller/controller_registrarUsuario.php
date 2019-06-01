<?php

    class Controller_registrarUsuario extends Contoller{

        private $idUsuario;
        private $nombre;
	    private $apellido;
	    private $dni;
	    private $calle;
	    private $nroCalle;
	    private $localidad;
	    private $telefono;
	    private $cuil;
        private $email;
	    private $password;
	    private $passwordRepetida;

        public function __construct($idUsuario = ""){
            $this->idUsuario = $idUsuario;
        }

        public function setUsuarioValido($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono,
	                                     $cuil, $email, $password, $passwordRepetida){
    	    $this->nombre = $nombre;
		    $this->apellido = $apellido;
		    $this->dni = $dni;
		    $this->calle = $calle;
		    $this->nroCalle = $nroCalle;
		    $this->localidad = $localidad;
		    $this->telefono = $telefono;
		    $this->cuil = $cuil;
    	    $this->email = $email;
		    $this->password = $password;
		    $this->passwordRepetida = $passwordRepetida;
        }

        // Validar nombre
        public function validarNombre(){
    	    if(preg_match("/^[a-zA-Z]+$/", $this->nombre)){
    		    return true;

    	    } else{
    		    return false;
    	    }
        }

	    // Validar apellido
        public function validarApellido(){
    	    if(preg_match("/^[a-zA-Z]+$/", $this->apellido)){
    		    return true;

    	    } else{
    		    return false;
    	    }	
        }

	    // Validar dni
	    public function validarDni(){
		    if(preg_match("^\d{1,8}$", $this->dni)){
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar calle
	    public function validarCalle(){
		    if(preg_match("^[a-zA-Z0-9,. ]*$", $this->calle)){
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validad nroCalle
	    public function validarNroCalle(){
		    if(preg_match("/[0-9]+/", $this->nroCalle)){
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar localidad
	    public function validarLocalidad(){
		    if(preg_match("^[a-zA-Z0-9,. ]*$", $this->localidad)){
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar teléfono
	    public function validarTelefono(){
		    if(preg_match("/[0-9- ]/", $this->telefono)){
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar cuil
	    public function validarCuil(){
		    if(preg_match("/[0-9- ]/", $this->cuil)){
			    return true;

		    } else{
			    return false;
		    }
	    }

	    // Validar email
        public function validarEmail(){
    	    if(preg_match("/^\w+@\w+\.(com|ar|net)$/", $this->email)){
    		    return true;

    	    } else{
    		    return false;
    	    }
        }

	    // Validar password
        public function validarPassword(){
    	    if($this->password == $this->passwordRepetida){
    		    return true;

    	    } else{
    		    return false;
    	    }
        }
    }
?>