<?php

class Controller{

    public $model;
    protected $view;

    public function __construct(){
        $this->view = new View();
    }
}