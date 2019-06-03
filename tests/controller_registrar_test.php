<?php

include_once __DIR__ . "/../core/controller.php";
include_once __DIR__ . "/../app/controller/controller_registrar.php";
include_once __DIR__ . "/../core/view.php";

class simpleTestRegistrar extends \PHPUnit\Framework\TestCase{
    
    private $controllerRegistrar;

    /**
     * @before
     */
    public function setUpRegistrar(){
        $GLOBALS['root'] = "root";
        $this->controllerRegistrar = new Controller_registrar();
    }

    public function testQueValidaElNombre(){
        $nombreCorrecto = $this->controllerRegistrar->validarNombre("ricardo");
        $nombreConNumerosAlPrincipio = $this->controllerRegistrar->validarNombre("45ricardo");
        $nombreConNumerosAlMedio = $this->controllerRegistrar->validarNombre("ric34ardo");
        $nombreConNumerosAlFinal = $this->controllerRegistrar->validarNombre("ricardo124");
        $nombreConEspacios = $this->controllerRegistrar->validarNombre("ric ardo");
        
        $this->assertTrue($nombreCorrecto);

        $this->assertFalse($nombreConNumerosAlPrincipio);
        $this->assertFalse($nombreConNumerosAlFinal);
        $this->assertFalse($nombreConNumerosAlMedio);
        $this->assertFalse($nombreConEspacios);
    }

    public function testQueValidaElApellido(){
        $apellidoCorrecto = $this->controllerRegistrar->validarApellido("pérez");
        $apellidoConNumerosAlPrincipio = $this->controllerRegistrar->validarApellido("45pérez");
        $apellidoConNumerosAlMedio = $this->controllerRegistrar->validarApellido("pé34rez");
        $apellidoConNumerosAlFinal = $this->controllerRegistrar->validarApellido("pérez788");
        $apellidoConEspacios = $this->controllerRegistrar->validarApellido("pé rez");

        $this->assertTrue($apellidoCorrecto);

        $this->assertFalse($apellidoConNumerosAlPrincipio);
        $this->assertFalse($apellidoConNumerosAlFinal);
        $this->assertFalse($apellidoConNumerosAlMedio);
        $this->assertFalse($apellidoConEspacios);
    }

    public function testQueValidaElDni(){
        $dniCorrecto = $this->controllerRegistrar->validarDni("56874455");
        $dniConLetrasAlPrincipio = $this->controllerRegistrar->validarDni("re962415");
        $dniConLetrasAlMedio = $this->controllerRegistrar->validarDni("954rs421");
        $dniConLetrasAlFinal = $this->controllerRegistrar->validarDni("956214gd");
        $dniConEspacios = $this->controllerRegistrar->validarDni("9654 214");

        $this->assertTrue($dniCorrecto);

        $this->assertFalse($dniConLetrasAlPrincipio);
        $this->assertFalse($dniConLetrasAlFinal);
        $this->assertFalse($dniConLetrasAlMedio);
        $this->assertFalse($dniConEspacios);
    }

    public function testQueValidaCalle(){
        $calleCorrecto = $this->controllerRegistrar->validarCalle("avenida 9 de julio");

        $calleIncorrecta = $this->controllerRegistrar->validarCalle("avenida 9 #! de julio");

        $this->assertTrue($calleCorrecto);
        $this->assertFalse($calleIncorrecta);
    }

    public function testQueValidaNumeroDeCalle(){
        $nroCalleCorrecto = $this->controllerRegistrar->validarNroCalle("99999");
        $nroCalleConLetrasAlPrincipio = $this->controllerRegistrar->validarNroCalle("q9999");
        $nroCalleConLetrasAlMedio = $this->controllerRegistrar->validarNroCalle("99f99");
        $nroCalleConLetrasAlFinal = $this->controllerRegistrar->validarNroCalle("9999f");
        $nroCalleConEspacios = $this->controllerRegistrar->validarNroCalle("99 99");

        $this->assertTrue($nroCalleCorrecto);

        $this->assertFalse($nroCalleConLetrasAlPrincipio);
        $this->assertFalse($nroCalleConLetrasAlFinal);
        $this->assertFalse($nroCalleConLetrasAlMedio);
        $this->assertFalse($nroCalleConEspacios);
    }

    public function testQueValidaLocalidad(){
        $localidadCorrecto = $this->controllerRegistrar->validarLocalidad("nuñez 9 de julio");

        $localidadIncorrecta = $this->controllerRegistrar->validarLocalidad("nuñez 9 #! de julio");

        $this->assertTrue($localidadCorrecto);
        $this->assertFalse($localidadIncorrecta);
    }

    public function testQueValidaTelefono(){
        $telefonoCorrecto = $this->controllerRegistrar->validarTelefono("11 63537883");
        $telefonoConLetrasAlPrincipio = $this->controllerRegistrar->validarTelefono("f34 3434254");
        $telefonoConLetrasAlMedio = $this->controllerRegistrar->validarTelefono("11 635gg378");
        $telefonoConLetrasAlFinal = $this->controllerRegistrar->validarTelefono("11 635378ge");

        $this->assertTrue($telefonoCorrecto);

        $this->assertFalse($telefonoConLetrasAlPrincipio);
        $this->assertFalse($telefonoConLetrasAlFinal);
        $this->assertFalse($telefonoConLetrasAlMedio);
    }

    public function testQueValidaCuil(){
        $cuilCorrecto = $this->controllerRegistrar->validarCuil("20-53756432-3");
        $cuilConLetrasAlPrincipio = $this->controllerRegistrar->validarCuil("e0-53756432-4");
        $cuilConLetrasAlMedio = $this->controllerRegistrar->validarCuil("20-53gh6432-4");
        $cuilConLetrasAlFinal = $this->controllerRegistrar->validarCuil("20-53756432-f");

        $this->assertTrue($cuilCorrecto);

        $this->assertFalse($cuilConLetrasAlPrincipio);
        $this->assertFalse($cuilConLetrasAlFinal);
        $this->assertFalse($cuilConLetrasAlMedio);
    }

    public function testQueValidaEmail(){
        $emailCorrecto = $this->controllerRegistrar->validarEmail("ricardop@marketplace.com");
        $emailPuntoNet = $this->controllerRegistrar->validarEmail("ricardop@marketplace.net");
        $emailSinArroba = $this->controllerRegistrar->validarEmail("emailmarketplace.com");
        $emailSinPuntoCom = $this->controllerRegistrar->validarEmail("email@marketplace");

        $this->assertTrue($emailCorrecto);
        $this->assertTrue($emailPuntoNet);

        $this->assertFalse($emailSinArroba);
        $this->assertFalse($emailSinPuntoCom);
    }

    public function testQueValidaContraseñasIguales(){
        $contraseña = "12345678";
        $contraseñaIncorrecta = "87654321";

        $contraseñasIguales = $this->controllerRegistrar->validarPassword($contraseña, $contraseña);
        $contraseñasIncorrectas = $this->controllerRegistrar->validarPassword($contraseña, $contraseñaIncorrecta);

        $this->assertTrue($contraseñasIguales);
        $this->assertFalse($contraseñasIncorrectas);
    }
}