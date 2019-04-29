<?php

require_once('./clases/Credenciales.php');
require_once('./clases/Loguear.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];


$credenciales = new Credenciales($usuario, $password);
$tipoDeCredenciales = $credenciales->tipoDeCredenciales();

$login = new Loguear();

$usuario = $login->logearUsuario($tipoDeCredenciales);

$usuario->redireccionar();