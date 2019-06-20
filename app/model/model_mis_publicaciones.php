<?php

    class Model_mis_publicaciones extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function obtenerProductos($idUsuario){
            $selectProductos = "SELECT p.*, i.* FROM producto as p INNER JOIN imagen as i ";
		    $selectProductos .= "ON p.idProducto = i.idProducto GROUP BY p.idProducto HAVING p.idUsuario = :idUsuario";
		    $conexion = $this->getConnection();

		    $queryProducto = $conexion->prepare($selectProductos);
		    $queryProducto->execute([":idUsuario" => $idUsuario]);

		    return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>