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
}