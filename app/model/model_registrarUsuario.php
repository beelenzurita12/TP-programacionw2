<?php

    class Model_registrarUsuario extends Model{

        public function __construct(){
		    parent::__construct();
        }
        
        public function insertarUsuario(){
		    if($this->nombre && $this->apellido && $this->dni && $this->calle && $this->nroCalle && $this->localidad &&
		       $this->telefono && $this->cuil && $this->email && $this->password && $this->passwordRepetida){

    		    $connection = new UsuarioDB();

			    return $connection->registrarUsuario($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono,
			                                         $cuil, $email, $password, $passwordRepetida);
    	    }
        }
    }
?>