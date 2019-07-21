<?php 

    class Model_calificar extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function generarCalificacion($idCompra, $idProducto, $idVendedor, $comentario, $calificacion){
            $insertCalificacion = "INSERT INTO calificacion (idUsuario, idProducto, comentario, calificacion, idCompra) ";
            $insertCalificacion .= "VALUES (:idUsuario, :idProducto, :comentario, :calificacion, :idCompra)";
            $conexion = $this->getConnection();

            $queryCalificacion = $conexion->prepare($insertCalificacion);
            $queryCalificacion->execute([":idUsuario" => $idVendedor, ":idProducto" => $idProducto,
            ":comentario" => $comentario, ":calificacion" => $calificacion, ":idCompra" => $idCompra]);

            $this->closeConnection();
        }
    }
?>