<?php

include_once __DIR__ . "/../core/view.php";
include_once __DIR__ . "/../core/controller.php";
include_once __DIR__ . "/../core/routes.php";

class simpleTest extends \PHPUnit\Framework\TestCase{
    private $view;

    /**
     * @before
     */
    public function setupController(){
        $this->view = new View();
    }

    public function testQueGeneraElArchivoVista(){
        $viewGotten = $this->view->generate("", "template_view.php");

        $vistaSolicitada = "";
        $viewWaited = include __DIR__ . "/../app/view/template_view.php";

        $this->assertFileEquals($viewWaited, $viewGotten);
    }
}