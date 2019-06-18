<?php

    class Model_resultados_de_busqueda extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function buscarProductos($busqueda){
            $selectProductos = "SELECT p.*, i.* FROM producto as p INNER JOIN imagen as i ";
            $selectProductos .= "ON p.idProducto = i.idProducto WHERE p.nombre LIKE :busqueda";
            $selectProductos .= " OR p.categoria LIKE :busqueda GROUP BY p.idProducto";
		    $conexion = $this->getConnection();

		    $queryProducto = $conexion->prepare($selectProductos);
		    $queryProducto->execute([":busqueda" => "%" . $busqueda . "%"]);

		    return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>