<?php

    class Model_post extends Model{
	
	    public function __construct(){
		    parent::__construct();
	    }

	    public function obtenerProducto($idProducto){
		    $selectProductos = "SELECT p.*, i.*, u.nombre as nombreUsuario, u.localidad FROM producto as p INNER JOIN imagen as i ";
			$selectProductos .= "ON p.idProducto = i.idProducto INNER JOIN usuario u ON p.idUsuario = u.idUsuario";
			$selectProductos .= " WHERE p.idProducto = :idProducto";
	        $conexion = $this->getConnection();

	        $queryProducto = $conexion->prepare($selectProductos);
	        $queryProducto->execute([":idProducto" => $idProducto]);

	        $resultadoProducto = [];
            $i = 0;
        
	        while($resultadoFila = $queryProducto->fetch(PDO::FETCH_ASSOC)){

	    	    if($i == 0){
					$resultadoProducto["nombreUsuario"] = $resultadoFila["nombreUsuario"];
					$resultadoProducto["localidad"] = $resultadoFila["localidad"];
	    		    $resultadoProducto["idProducto"] = $resultadoFila["idProducto"];
		    	    $resultadoProducto["idUsuario"] = $resultadoFila["idUsuario"];
		    	    $resultadoProducto["nombre"] = $resultadoFila["nombre"];
		    	    $resultadoProducto["descripcion"] = $resultadoFila["descripcion"];
		    	    $resultadoProducto["precio"] = $resultadoFila["precio"];
		    	    $resultadoProducto["cantidad"] = $resultadoFila["cantidad"];
		    	    $resultadoProducto["categoria"] = $resultadoFila["categoria"];
		    	    $resultadoProducto["fecha_publicacion"] = $resultadoFila["fecha_publicacion"];
		    	    $resultadoProducto["duracion_publicacion"] = $resultadoFila["duracion_publicacion"];
		    	    $resultadoProducto["imagen"][$i] = $resultadoFila["imagen"];
	    	
	    	    } else {
	    		    $resultadoProducto["imagen"][$i] = $resultadoFila["imagen"];	
	    	    }

	    	    $i++;
            }
        
	        return $resultadoProducto;
	    }

	    public function esPropietarioDeLaPublicacion($idUsuario, $idProducto){
		    $selectUsuario = "SELECT count(*) as esPropietario FROM usuario a INNER JOIN producto p";
		    $selectUsuario .= " ON a.idUsuario = p.idUsuario WHERE a.idUsuario = :idUsuario AND p.idProducto = :idProducto";

		    $queryUsuario = $this->getConnection()->prepare($selectUsuario);
		    $queryUsuario->execute([":idUsuario" => $idUsuario, ":idProducto" => $idProducto]);

			$resultado = $queryUsuario->fetchall(PDO::FETCH_ASSOC);
		
		    if($resultado[0]['esPropietario'] > 0){
			    return true;

		    } else {
			    return false;
		    }
		}

		public function productosRelacionados($categoria, $idProducto){
			$selectProductos = "SELECT p.nombre, p.precio, p.idProducto, i.imagen FROM producto p";
			$selectProductos .= " INNER JOIN imagen i ON p.idProducto = i.idProducto ";
			$selectProductos .= " WHERE p.categoria = :categoria AND p.idProducto != :idProducto ";
			$selectProductos .= " GROUP BY p.idProducto LIMIT 4";

			$queryProducto = $this->getConnection()->prepare($selectProductos);
			$queryProducto->execute([":categoria" => $categoria, ":idProducto" => $idProducto]);

			return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function obtenerComentarios($idProducto){
			include_once __DIR__ . "/model_comentarios.php";

			$modelComentarios = new Model_comentarios();

			return $modelComentarios->obtenerComentarios($idProducto);
		}

		public function obtenerCalificacionDelUsuario($idProducto){
			$idVendedor = $this->obtenerInfoDelProducto($idProducto)[0]["idUsuario"];

			$selectCalificaciones = "SELECT sum(calificacion) as calificacion, count(*) as cantidad ";
			$selectCalificaciones .= "FROM calificacion WHERE idUsuario = :idUsuario GROUP BY idUsuario";
			$conexion = $this->getConnection();

			$queryCalificaciones = $conexion->prepare($selectCalificaciones);
			$queryCalificaciones->execute([":idUsuario" => $idVendedor]);
			$calificaciones = $queryCalificaciones->fetchAll(PDO::FETCH_ASSOC);

			if(sizeof($calificaciones)){
				$calificacionPromedio = intval($calificaciones[0]["calificacion"]) / intval($calificaciones[0]["cantidad"]);
				
				return $calificacionPromedio;

			} else {
				return "No tiene aún calificaciones";
			}
		}

		public function obtenerInfoDelProducto($idProducto){
			include_once __DIR__ . "/model_producto.php";
			$modelProducto = new Model_producto();

			return $modelProducto->obtenerProducto($idProducto);
		}
    }
?>