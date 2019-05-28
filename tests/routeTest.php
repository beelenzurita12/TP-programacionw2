<?php

require_once __DIR__ . "/../core/controller.php";
require_once __DIR__ . "/../core/view.php";
require_once __DIR__ . "/../core/routes.php";

    class SimpleTestRoute extends \PHPUnit\Framework\TestCase{
        private $route;

    /**
     * @before
     */
        public function setupRoute(){
            $url = "/TP-programacionw2/inicio/index?parametros";
            $this->route = new Routes($url);
        }

        public function testQueParseaRuta() {
            $arrayObtenido = $this->route->parseRoute();
        
            $arrayEsperado = ["", "TP-programacionw2", "inicio", "index"];

            $this->assertEquals($arrayEsperado, $arrayObtenido);
        }

        public function testQueObtieneElModuloDeLaUrl(){
            $arrayObtenido = $this->route->parseRoute();
            $moduleGotten = $this->route->extractModule($arrayObtenido);

            $moduleWaited = "inicio";
            $wrongModule = "inivciooo";

            $this->assertEquals($moduleWaited, $moduleGotten);
            $this->assertNotEquals($wrongModule, $moduleGotten);
        }

        public function testQueObtieneActionDeLaUrl(){
            $arrayObtenido = $this->route->parseRoute();
            $actionGotten = $this->route->extractAction($arrayObtenido);

            $actionWaited = "index";
            $wrongAction = "indexx";

            $this->assertEquals($actionWaited, $actionGotten);
            $this->assertNotEquals($wrongAction, $actionGotten);
        }

        public function testQueRegresaUnModuloPorDefecto(){
            $url = "/TP-programacionw2";
            $route = new Routes($url);

            $arrayObtenido = $route->parseRoute();

            $moduleGotten = $route->extractModule($arrayObtenido);

            $moduleWaited = "inicio";
        
            $this->assertEquals($moduleWaited, $moduleGotten);
        }

        public function testQueRegresaUnActionPorDefecto(){
            $url = "/TP-programacionw2";
            $route = new Routes($url);

            $arrayObtenido = $route->parseRoute();

            $actionGotten = $route->extractAction($arrayObtenido);

            $actionWaited = "index";
        
            $this->assertEquals($actionWaited, $actionGotten);
        }

        public function testQueRetornaFalseParaUnControllerInvalido(){
            $url = "/TP-programacionw2/moduloInvalido/";
            $route = new Routes($url);

            $arrayObtenido = $route->parseRoute();

            $moduleGotten = $route->extractModule($arrayObtenido);

            $controllerGotten = $route->createController($moduleGotten);
        
            $this->assertFalse($controllerGotten);
        }

        public function testQueRetornaFalseParaUnModelInvalido(){
            $url = "/TP-programacionw2/moduloInvalido/";
            $route = new Routes($url);

            $arrayObtenido = $route->parseRoute();

            $moduleGotten = $route->extractModule($arrayObtenido);

            $modelGotten = $route->createModel($moduleGotten);
        
            $this->assertFalse($modelGotten);
        }

        public function testQueCreaUnObjetoController(){
            $arrayObtenido = $this->route->parseRoute();
            $moduleGotten = $this->route->extractModule($arrayObtenido);

            $controllerGotten = $this->route->createController($moduleGotten);
            $controllerWaited = new Controller_inicio();
            $modelMock = new Model_inicio();

            $controllerWaited->model = $modelMock;

            $this->assertEquals($controllerWaited, $controllerGotten);
        }

        public function testQueCreaUnObjetoModel(){
            $arrayObtenido = $this->route->parseRoute();
            $moduleGotten = $this->route->extractModule($arrayObtenido);

            $modelGotten = $this->route->createModel($moduleGotten);
            $modelWaited = new Model_inicio();

            $this->assertEquals($modelWaited, $modelGotten);
        }
    }
?>