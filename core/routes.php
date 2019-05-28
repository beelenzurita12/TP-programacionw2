<?php

    class Routes {

        private $url;

        public function __construct($url){
            $this->url = $url;
        }

        public function start(){
            $ruta = $this->parseRoute();

            $moduleName = $this->extractModule($ruta);
            $actionName = $this->extractAction($ruta);
            // $_GET = obtener parámetros aquí 

            $controller = $this->createController($moduleName);
            $this->executeActionFromController($controller, $actionName);
        }

        // Para los test necesita estar públic pero en producción private
        public function parseRoute(){
            $urlAndParams = explode("?", $this->url);
            return explode("/", $urlAndParams[0]);
        }

        public function extractModule($route){
            // var_dump($route);
            $minRoute = 4;
            return !empty($route[2]) ? $route[2] : "inicio"; 
        }

        public function extractAction($route){
            return !empty($route[3]) ? $route[3] : "index"; // El action será método de Controller_...
        }

        public function createController($moduleName){
            $controllerName = "Controller_$moduleName";
            $controllerFile = strtolower($controllerName) . ".php";
            $controllerPath = __DIR__ . "/../app/controller/$controllerFile";

            $controller = false;

            if(file_exists($controllerPath)){
                include $controllerPath;

                $controller = new $controllerName;

                $model = $this->createModel($moduleName);
    
                if($model){
                    $controller->model = $model;
                }
            }

            return $controller;
        }

        public function createModel($modelName){
            $modelName = "Model_$modelName";
            $modelFile = strtolower($modelName) . ".php";
            $modelPath = __DIR__ . "/../app/model/$modelFile";

            $model = false;

            if(file_exists($modelPath)){
                include_once $modelPath;

                $model = new $modelName;
            }

            return $model;
        }

        public function executeActionFromController($controller, $action){
            var_dump($controller);
            var_dump($action);
            if(method_exists($controller, $action)){
                $controller->$action();

            } else {
                // Manejar error
            }
        }
    }
?>