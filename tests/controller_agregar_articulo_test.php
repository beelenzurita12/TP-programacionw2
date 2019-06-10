<?php

include __DIR__ . "/../core/controller.php";
include __DIR__ . "/../app/controller/controller_agregar_articulo.php";
include __DIR__ . "/../core/view.php";

class SimpleAgregarTest extends \PHPUnit\Framework\TestCase{
    private $controllerAgregar;

    /**
     * @before
     */
    public function setupAgregar(){
        $this->controllerAgregar = new Controller_agregar_articulo();
    }

    public function testQueValidaInputPost(){
        $inputsCorrectos = ["nombre" => "un nombre", "descripcion" => " una descripcion", "precio" => "154", 
        "cantidad" => "34", "categoria" => "electro", "fecha_publicacion" => "15/152/1999"];
        
        $sonValidos = $this->controllerAgregar->validarInputsPost($inputsCorrectos);

        $inputsSinNombre = ["nombre" => "", "descripcion" => " una descripcion", "precio" => "154", 
        "cantidad" => "34", "categoria" => "electro", "fecha_publicacion" => "15/152/1999"];
        
        $inputsSinOtros = ["nombre" => "un nombre", "descripcion" => "", "precio" => "", 
        "cantidad" => "34", "categoria" => "", "fecha_publicacion" => "15/152/1999"];
        
        $esValidoSinNombre = $this->controllerAgregar->validarInputsPost($inputsSinNombre);
        $esValidoSinVarios = $this->controllerAgregar->validarInputsPost($inputsSinOtros);

        $this->assertTrue($sonValidos);

        $this->assertFalse($esValidoSinNombre);
        $this->assertFalse($esValidoSinVarios); // validar que no se permita campos con espacio
    }

    public function testQueValidaInputSinEspacios(){
        $inputsCorrectos = ["nombre" => "un nombre", "descripcion" => " una descripcion", "precio" => "154", 
        "cantidad" => "34", "categoria" => "electro", "fecha_publicacion" => "15/152/1999"];
        
        $inputsConEspacio = ["nombre" => "un nombre", "descripcion" => "  ", "precio" => "154", 
        "cantidad" => "34", "categoria" => "electro", "fecha_publicacion" => "15/152/1999"];
        
        $inputsValido = $this->controllerAgregar->validarQueNoTenganSoloEspacios($inputsCorrectos);
        
        $esValidoConEspacio = $this->controllerAgregar->validarQueNoTenganSoloEspacios($inputsConEspacio);

        $this->assertTrue($inputsValido["inputValido"]);
        
        $this->assertFalse($esValidoConEspacio["inputValido"]);
    }
}