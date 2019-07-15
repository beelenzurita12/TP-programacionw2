<?php

class Model_mensaje extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function productosVendidos($idVendedor){
        $selectVendido = "SELECT i.imagen, p.nombre, p.descripcion, c.fecha, c.idCompra, m.mensaje FROM producto p ";
        $selectVendido .= "INNER JOIN compra c ON c.idProducto = p.idProducto INNER JOIN imagen i ";
        $selectVendido .= "ON i.idProducto = p.idProducto  INNER JOIN mensajeCompra m ON c.idCompra = m.idCompra ";
        $selectVendido .= "WHERE p.idUsuario = :idVendedor GROUP BY p.idProducto";
        $conexion = $this->getConnection();

        $queryVendido = $conexion->prepare($selectVendido);
        $queryVendido->execute([":idVendedor" => $idVendedor]);

        $resultado = $queryVendido->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();

        return $resultado;
    }

    public function obtenerMensajes($idCompra){
        $selectMensajes = "SELECT m.*, u.nombre, u.apellido FROM mensajeCompra m ";
        $selectMensajes .= "INNER JOIN usuario u ON m.idEmisor = u.idUsuario WHERE m.idCompra = :idCompra ";
        $selectMensajes .= "ORDER BY fechaMensaje ASC";
        $conexion = $this->getConnection();

        $queryMensajes = $conexion->prepare($selectMensajes);
        $queryMensajes->execute([":idCompra" => $idCompra]);

        $resultado = $queryMensajes->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();

        return $resultado;
    }

    public function enviarMensaje($idCompra, $mensaje, $idEmisor, $idReceptor){
        include_once __DIR__ . "/model_comentarios.php";

        $comentario = new Model_comentarios();
        $comentario->enviarMensaje($idCompra, $mensaje, $idEmisor, $idReceptor);
    }  
}