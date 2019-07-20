<?php

class Controller_calificar extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->irAHomeSiNoEstaLogueado();

        $this->paginaNoEncontrada();
    }

    public function calificarUsuario(){
        $this->irAHomeSiNoEstaLogueado();

        if(empty($_POST["comentario"] || empty($_POST["calificacion"]) || empty($_POST["idCompra"]))){
            return $this->paginaNoEncontrada();
        }

        $idProducto = $_POST["idProducto"];
        $idVendedor = $_POST["idVendedor"];
        $comentario = $_POST["comentario"];
        $calificacion = $_POST["calificacion"];
        $idCompra = $_POST["idCompra"];

        $this->model->generarCalificacion($idCompra, $idProducto, $idVendedor, $comentario, $calificacion);

        header("location: ". $_SERVER["HTTP_REFERER"]);
    }
}