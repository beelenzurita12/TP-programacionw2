<?php

    class Model_compra extends Model{

        public function __construct(){
            parent::__construct();

        }

        public function generarCompra($idUsuario, $idProducto, $cantidad, $entrega){
            $insertCompra = "INSERT INTO compra (idUsuario, idProducto, cantidad, formaDeEntrega, fecha) ";
            $insertCompra .= "VALUES (:idUsuario, :idProducto, :cantidad, :entrega, now())";
            $conexion = $this->getConnection();

            $queryCompra = $conexion->prepare($insertCompra);
            $queryCompra->execute([":idUsuario" => $idUsuario, ":idProducto" => $idProducto, ":cantidad" => $cantidad, ":entrega" => $entrega]);

            return $conexion->lastInsertId();
        }

        public function obtenerInfoDeCompra($idCompra){
            $selectCompra = "SELECT p.nombre as nombreProducto, p.descripcion, p.precio, u.*, c.fecha, c.formaDeEntrega, ";
            $selectCompra .= "c.idCompra, c.idProducto, i.imagen FROM compra c INNER JOIN producto p ";
            $selectCompra .= "ON p.idProducto = c.idProducto INNER JOIN usuario u ON u.idUsuario = p.idUsuario ";
            $selectCompra .= "INNER JOIN imagen i ON c.idProducto = i.idProducto WHERE idCompra = :idCompra ";
            $selectCompra .= "GROUP BY p.idProducto";

            $queryCompra = $this->getConnection()->prepare($selectCompra);
            $queryCompra->execute([":idCompra" => $idCompra]);

            return $queryCompra->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function obtenerMensajes($idCompra){
            $selectMensajes = "SELECT m.*, u.nombre, u.apellido FROM mensajeCompra m INNER JOIN usuario u ";
            $selectMensajes .= "ON m.idEmisor = u.idUsuario WHERE idCompra = :idCompra";
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
            $selectCompra .= "ON c.idProducto = i.idProducto WHERE c.idUsuario = :idUsuario GROUP BY c.idCompra";
            $conexion = $this->getConnection();

            $queryCompra = $conexion->prepare($selectCompra);
            $queryCompra->execute([":idUsuario" => $idUsuario]);

            $resultado = $queryCompra->fetchAll(PDO::FETCH_ASSOC);
            $this->closeConnection();

            return $resultado;
        }

        public function modificarCantidad($idProducto, $cantidad){
            $selectCantidad = "SELECT cantidad FROM producto WHERE idProducto = :idProducto";
            $conexion = $this->getConnection();

            $queryCantidad = $conexion->prepare($selectCantidad);
            $queryCantidad->execute([":idProducto" => $idProducto]);

            $cantidadDisponible = $queryCantidad->fetchAll(PDO::FETCH_ASSOC)[0]["cantidad"];

            $updateProducto = "UPDATE producto SET cantidad = :cantidad WHERE idProducto = :idProducto";
            $cantidadRestante = intval($cantidadDisponible) - intval($cantidad);

            $queryProducto = $conexion->prepare($updateProducto);
            $queryProducto->execute([":cantidad" => $cantidadRestante, ":idProducto" => $idProducto]);
        }

        public function obtenerPorcentajeDeVenta($idProducto, $cantidad){
            $respuesta = $this->obtenerInfoDelProducto($idProducto);

            $idVendedor = $respuesta["idUsuario"];
            $precio = $respuesta["precio"];

            $montoComision = $this->obtenerComision($precio, $cantidad);

            $insertComision = "INSERT INTO pagosComision (idVendedor, montoComision) ";
            $insertComision .= "VALUES (:idVendedor, :montoComision)";
            $conexion = $this->getConnection();

            $queryComision = $conexion->prepare($insertComision);
            $queryComision->execute([":idVendedor" => $idVendedor, ":montoComision" => $montoComision]);
        }

        public function comprobarSiCalifico($idCompra){
            $selectCalifico = "SELECT count(*) as califico FROM calificacion WHERE idCompra = :idCompra";
            $conexion = $this->getConnection();

            $queryCalifico = $conexion->prepare($selectCalifico);
            $queryCalifico->execute([":idCompra" => $idCompra]);

            $califico = $queryCalifico->fetchAll(PDO::FETCH_ASSOC)[0]["califico"];
            $this->closeConnection();

            return ($califico == 1) ? true : false;
        }

        private function obtenerInfoDelProducto($idProducto){
            $selectIdVendedor = "SELECT idUsuario, precio FROM producto WHERE idProducto = :idProducto";
            $conexion = $this->getConnection();

            $queryIdVendedor = $conexion->prepare($selectIdVendedor);
            $queryIdVendedor->execute([":idProducto" => $idProducto]);

            return $queryIdVendedor->fetchAll(PDO::FETCH_ASSOC)[0];
        }

        private function obtenerComision($precio, $cantidad){
            $montoTotal = intval($precio) * intval($cantidad);
            
            return 0.04 * $montoTotal;
        }
    }
?>