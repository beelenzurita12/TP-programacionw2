<?php

class Model_carrito_de_compras extends Model{

    public function __constructor(){
        parent::__constructor();
    }

    public function existeElProducto($idProducto = false){
        if($idProducto){
            $countProducto = "SELECT count(*) as existeProducto FROM producto WHERE idProducto = :idProducto";
            $conexion = $this->getConnection();

            $queryProducto = $conexion->prepare($countProducto);
            $queryProducto->execute([":idProducto" => $idProducto]);
            
            $existeProducto = $queryProducto->fetchAll(PDO::FETCH_ASSOC)[0];

            $this->closeConnection();
            
            if($existeProducto > 0){
                return true;
            }
        }

        return false;
    }

    public function agregarAlCarrito($idProducto, $idUsuario){
        $conexion = $this->getConnection();

        $insertProducto = "INSERT INTO carrito (idUsuario, idProducto, fechaInsercion) VALUES (:idUsuario, :idProducto, :fechaInsercion)";
        $fecha = date("y-m-d H:i:s");

        $insertQuery = $conexion->prepare($insertProducto);
        
        $insertQuery->execute([":idUsuario" => $idUsuario, ":idProducto" => $idProducto, ":fechaInsercion" => $fecha]);
        $this->closeConnection();
    }

    public function productosEnCarrito($idUsuario){
        $selectProductos = "SELECT count(*) as total FROM carrito WHERE idUsuario = :idUsuario";
        $conexion = $this->getConnection();

        $queryProducto = $conexion->prepare($selectProductos);
        $queryProducto->execute([":idUsuario" => $idUsuario]);
        
        $result = $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
        $this->closeConnection();

        return $result[0]['total'];
    }
}