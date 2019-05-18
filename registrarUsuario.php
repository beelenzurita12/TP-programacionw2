<?php

require_once("./clases/UsuarioValido.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordRepetida = $_POST["passwordRepetida"];

$usuarioCreado = new UsuarioValido();
$usuarioCreado->setUsuarioValido($nombre, $apellido, $email, $password);

$usuarioCreado->validarNombre();
$usuarioCreado->validarApellido();
$usuarioCreado->validarEmail();
$usuarioCreado->validarPassword();

if($password == $passwordRepetida){
	if($usuarioCreado->insertarUsuario()){
		header("location:login.php");

	} else {
		//mandar status code
		header("location:registrarUsuario.php");
	}
}