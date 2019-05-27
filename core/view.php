<?php

class View{

    public function __construct(){
    }

    public function generate($vistaSolicitada, $templateBase, $data = false){
        include __DIR__ . "/../app/view/$templateBase";
    }

}