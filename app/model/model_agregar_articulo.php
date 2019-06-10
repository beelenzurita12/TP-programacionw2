<?php

    class Model_agregar_articulo extends Model{

	    public function __construct(){
		    parent::__construct();
	    }

	    public function agregarProducto(){
            $insertSql = "INSERT INTO producto (nombre, descripcion, precio, cantidad, categoria, fecha_publicacion ) VALUES";
            $insertSql .= "(:nombre, :descripcion, :precio, :cantidad, :categoria, :fecha_publicacion)";

            $insertImage = "INSERT INTO imagen (idProducto, imagen) VALUES (:id, :imagen)";
            $connection = $this->getConnection();
            $fecha = date("d/m/y H:i:s");

		    try {
                $queryInsert = $connection->prepare($insertSql);
                $resultadoSelect = $queryInsert->execute([":nombre" => $_POST["nombre"], ":descripcion" => $_POST["descripcion"],
                    ":precio" => $_POST["precio"], ":cantidad" => $_POST["cantidad"], ":categoria" => $_POST["categoria"], ":fecha_publicacion" => $fecha]);
            
                $queryImage = $connection->prepare($insertImage);
                $queryImage->execute([":id" => $connection->lastInsertId(), ":imagen" => file_get_contents($_FILES["imagenes"]["tmp_name"])]);

            } catch (Exception $e) {
                echo 'error: ' . $e->getMessage();
            }
	    }
    }
?>