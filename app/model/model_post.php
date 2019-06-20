<?php

    class Model_post extends Model{
	
	    public function __construct(){
		    parent::__construct();
	    }

	    public function obtenerProducto($idProducto){
		    $selectProductos = "SELECT p.*, i.* FROM producto as p INNER JOIN imagen as i ";
	        $selectProductos .= "ON p.idProducto = i.idProducto WHERE p.idProducto = :idProducto";
	        $conexion = $this->getConnection();

	        $queryProducto = $conexion->prepare($selectProductos);
	        $queryProducto->execute([":idProducto" => $idProducto]);

	        $resultadoProducto = [];
            $i = 0;
        
	        while($resultadoFila = $queryProducto->fetch(PDO::FETCH_ASSOC)){

	    	    if($i == 0){
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
    }
?>