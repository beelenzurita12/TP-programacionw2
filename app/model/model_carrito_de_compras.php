<?php

class Model_carrito_de_compras extends Model{

    public function __constructor(){
        parent::__constructor();
    }

    public function obtenerProductosCarrito($idUsuario){
        $selectProductos = "SELECT p.nombre, p.precio, c.id as idCarrito, count(c.idProducto) as cantidad FROM carrito c ";
        $selectProductos .= "INNER JOIN producto p ON c.idProducto = p.idProducto WHERE c.idUsuario = :idUsuario GROUP BY p.idProducto";
        $conexion = $this->getConnection();

        $queryProducto = $conexion->prepare($selectProductos);
        $queryProducto->execute([":idUsuario" => $idUsuario]);

        $resultado = $queryProducto->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
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

    public function existeElProductoEnCarrito($idUsuario, $idCarrito = false){
        if(!$idCarrito){
            return false;
        }

        $selectProducto = "SELECT count(*) as existe FROM carrito WHERE id = :idCarrito AND idUsuario = :usuario";
        $conexion = $this->getConnection();

        $queryProducto = $conexion->prepare($selectProducto);
        $queryProducto->execute([":idCarrito" => $idCarrito, ":usuario" => $idUsuario]);

        $resultado = $queryProducto->fetchAll(PDO::FETCH_ASSOC);

        if($resultado[0]['existe'] == 0){
            return false;
        }

        return true;
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

        $this->closeConnection();

        return $result[0]['total'];
    }

    public function eliminarProductoDelCarrito($idUsuario, $idCarrito){
        $deleteProducto = "DELETE FROM carrito WHERE id = :idCarrito AND idUsuario = :idUsuario";
        $conexion = $this->getConnection();

        $queryDelete = $conexion->prepare($deleteProducto);
        $queryDelete->execute([":idUsuario" => $idUsuario, ":idCarrito" => $idCarrito]);
    }
}