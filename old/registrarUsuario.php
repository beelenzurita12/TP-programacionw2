<?php

require_once("./clases/UsuarioValido.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$calle = $_POST["calle"];
$nroCalle = $_POST["nroCalle"];
$localidad = $_POST["localidad"];
$telefono = $_POST["telefono"];
$cuil = $_POST["cuil"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordRepetida = $_POST["passwordRepetida"];

$usuarioCreado = new UsuarioValido();
$usuarioCreado->setUsuarioValido($nombre, $apellido, $dni, $calle, $nroCalle, $localidad, $telefono,
                                 $cuil, $email, $password. $passwordRepetida);

$usuarioCreado->validarNombre();
$usuarioCreado->validarApellido();
$usuarioCreado->validarDni();
$usuarioCreado->validarCalle();
$usuarioCreado->validarNroCalle();
$usuarioCreado->validarLocalidad();
$usuarioCreado->validarTelefono();
$usuarioCreado->validarCuil();
$usuarioCreado->validarEmail();
$usuarioCreado->validarPassword();

if($password == $passwordRepetida){
	if($usuarioCreado->insertarUsuario()){
		header("location:login.php");

	} else {
		// Mandar status code
		header("location:registrarUsuario.php");
	}
}