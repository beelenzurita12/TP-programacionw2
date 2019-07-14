<?php

class Model_compra extends Model{

    public function __construct(){
        parent::__construct();

    }

    public function generarCompra($idProducto, $cantidad, $entrega){
        $insertCompra = "INSERT INTO compra (idProducto, cantidad, formaDeEntrega, fecha) ";
        $insertCompra .= "VALUES (:idProducto, :cantidad, :entrega, now())";
        $conexion = $this->getConnection();

        $queryCompra = $conexion->prepare($insertCompra);
        $queryCompra->execute([":idProducto" => $idProducto, ":cantidad" => $cantidad, ":entrega" => $entrega]);

        return $conexion->lastInsertId();
    }

    public function obtenerInfoDeCompra($idCompra){
        $selectCompra = "SELECT p.nombre as nombreProducto, p.descripcion, p.precio, u.*, c.*, i.imagen FROM compra c INNER JOIN producto p ";
        $selectCompra .= "ON p.idProducto = c.idProducto INNER JOIN usuario u ON u.idUsuario = p.idUsuario ";
        $selectCompra .= "INNER JOIN imagen i ON c.idProducto = i.idProducto WHERE idCompra = :idCompra ";
        $selectCompra .= "GROUP BY p.idProducto";

        $queryCompra = $this->getConnection()->prepare($selectCompra);
        $queryCompra->execute([":idCompra" => $idCompra]);

        return $queryCompra->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function obtenerMensajes($idCompra){
        $selectMensajes = "SELECT m.*, u.nombre, u.apellido FROM mensajeCompra m INNER JOIN usuario u ";
        $selectMensajes .= "ON m.idReceptor = u.idUsuario WHERE idCompra = :idCompra";
        $conexion = $this->getConnection();

        $queryMensajes = $conexion->prepare($selectMensajes);
        $queryMensajes->execute([":idCompra" => $idCompra]);

        $resultado = $queryMensajes->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();

        return $resultado; 
    }

    public function obtenerLasComprasHechas($idUsuario){
        $selectCompra = "SELECT p.nombre as nombreProducto, p.descripcion, p.precio, c.*, i.imagen FROM compra c ";
        $selectCompra .= "INNER JOIN producto p ON p.idProducto = c.idProducto INNER JOIN imagen i ";
        $selectCompra .= "ON c.idProducto = i.idProducto GROUP BY c.idCompra";
        $conexion = $this->getConnection();

        $queryCompra = $conexion->prepare($selectCompra);
        $queryCompra->execute();

        $resultado = $queryCompra->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();

        return $resultado;
    }
}