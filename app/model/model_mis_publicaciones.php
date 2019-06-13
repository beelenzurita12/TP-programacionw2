<?php

    class Model_mis_publicaciones extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function obtenerProductos($idUsuario){
            $selectProductos = "SELECT p.*, i.* FROM producto as p INNER JOIN imagen as i ";
		    $selectProductos .= "ON p.id = i.idProducto WHERE idUsuario = :idUsuario";
		    $conexion = $this->getConnection();

		    $queryProducto = $conexion->prepare($selectProductos);
		    $queryProducto->execute([":idUsuario" => $idUsuario]);

		    return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        }

        public function editarProducto($idProducto){
            $updateImagen = "UPDATE imagen SET imagen = :imagen WHERE idProducto = :idProducto";
            $updateProducto = "UPDATE producto SET nombre = :nombre, descripcion = :descripcion, precio = :precio, cantidad = :cantidad, categoria = :categoria";
            $updateProducto .= "WHERE id = :idProducto";

            $conexion = $this->getConnection();

            $updateImagen = $conexion->prepare($updateImagen);
            $updateProducto = $conexion->prepare($updateProducto);

            $updateImagen->execute([":idProducto" => $idProducto]);
            $updateProducto->execute([":idProducto" => $idProducto]);
        }

        public function eliminarProducto($idProducto){
            $deleteImagen = "DELETE FROM imagen WHERE idProducto = :idProducto";
		    $deleteProducto = "DELETE FROM producto WHERE id = :idProducto";

		    $conexion = $this->getConnection();

		    $queryImagen = $conexion->prepare($deleteImagen);
		    $queryProducto = $conexion->prepare($deleteProducto);

		    $queryImagen->execute([":idProducto" => $idProducto]);
		    $queryProducto->execute([":idProducto" => $idProducto]);
        }
    }
?>