<?php

$error = 0;

// Nombre (validar sólo letras, mínimo 5, máximo 10 letras)
$nombre = $_POST['nombre'];
echo "$nombre <br>";

	if(!preg_match('/[A-Za-z]+/', $nombre)){
		echo "El campo Nombre debe tener únicamente letras. <br>";
		$error++;
	}

	$long = strlen($_POST['nombre']); // Guardo la longitud del input en la variable $long.

	if($long < 5 || $long > 10){
		echo "El campo Nombre debe tener como mínimo 5 letras y como máximo 10. <br>";
		$error++;
	}

// Apellido (validar sólo letras, mínimo 3, máximo 10 letras)
$apellido = $_POST['apellido'];
echo "$apellido <br>";

	if(!preg_match('/[A-Za-z]+/', $apellido)){
		echo "El campo Apellido debe tener únicamente letras. <br>";
		$error++;
	}

	$long2 = strlen($_POST['apellido']);

	if($long2 < 3 || $long2 > 10){
		echo "El campo Apellido debe tener como mínimo 3 letras y como máximo 10. <br>";
		$error++;
	}

// Dni (validar 8 números)
$dni = $_POST['dni'];
echo "$dni <br>";

	if(!preg_match('/[0-9]+/', $dni)){
		echo "El campo DNI debe tener únicamente números. <br>";
		$error++;
	}

	$long3 = strlen($_POST['dni']);

	if($long3 < 8 || $long3 > 8){
		echo "El campo DNI debe tener 8 números. <br>";
		$error++;
	}
	
// Calle
    
// Nro de calle
$nroCalle = $_POST['nroCalle'];
echo "$nroCalle <br>";

	if(!preg_match('/[0-9]+/', $nroCalle)){
		echo "El campo Nro de calle debe tener únicamente números. <br>";
		$error++;
	}

// Localidad

// Teléfono
$telefono = $_POST['telefono'];
echo "$telefono <br>";

	if(!preg_match('/[0-9- ]/', $telefono)){
		echo "El campo Teléfono debe tener únicamente números. <br>";
		$error++;
	}

// Cuil
$cuil = $_POST['cuil'];
echo "$cuil <br>";

	if(!preg_match('/[0-9- ]/', $cuil)){
		echo "El campo CUIL/CUIT debe tener únicamente números. <br>";
		$error++;
	}

// Email (validar email correcto)
$email = $_POST['email'];
echo "$email <br>";

	if(!preg_match('/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/', $email)){
		echo "El campo Email es inválido. <br>";
		$error++;
	}

// Password
$password = $_POST['password'];
$passwordRepetida= $_POST['passwordRepetida'];
echo "$passwordRepetida <br>";

    if($password != $passwordRepetida){
        echo "El campo Repetir contraseña no coincide con el campo Contraseña. <br>";
		$error++;
    }

// Errores.
if($error > 0){
	echo "Validación no completada. <br>";
} else{
	echo "Validación completada. <br>";
}