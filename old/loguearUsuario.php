<?php

require_once(__DIR__ . './clases/Credenciales.php');
require_once(__DIR__ . './clases/Loguear.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$credenciales = new Credenciales($usuario, $password);
$tipoDeCredenciales = $credenciales->tipoDeCredenciales();

$login = new Loguear();

$usuario = $login->loguearUsuario($tipoDeCredenciales);

$usuario->redireccionar();