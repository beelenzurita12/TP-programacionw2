<?php 

    class Model_inicio extends Model{

        public function __constructor(){
            parent::__constructor();
        }   
        
        public function obtenerProductos(){
            $selectProductos = "SELECT p.*, i.* FROM producto p INNER JOIN imagen i";
            $selectProductos .= " ON p.idProducto = i.idProducto GROUP BY p.idProducto LIMIT 8";
            $conexion = $this->getConnection();

            $queryProducto = $conexion->prepare($selectProductos);
            $queryProducto->execute();

            return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>