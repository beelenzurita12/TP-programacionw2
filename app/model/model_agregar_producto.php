<?php

    class Model_agregar_producto extends Model{

	    public function __construct(){
		    parent::__construct();
        }
        
        public function obtenerProducto($idProducto){
            $selectProductos = "SELECT * FROM producto WHERE idProducto = :idProducto";
		    $conexion = $this->getConnection();

		    $queryProducto = $conexion->prepare($selectProductos);
		    $queryProducto->execute([":idProducto" => $idProducto]);

		    return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        }

	    public function agregarProducto(){
            $insertSql = "INSERT INTO producto (idUsuario, nombre, descripcion, precio, cantidad, categoria, fecha_publicacion) VALUES";
            $insertSql .= "(:id, :nombre, :descripcion, :precio, :cantidad, :categoria, :fecha_publicacion)";

            $insertImage = "INSERT INTO imagen (idProducto, imagen) VALUES (:id, :imagen)";
            $connection = $this->getConnection();
            $fecha = date("y-m-d-H-i-s");

		    try {
                $queryInsert = $connection->prepare($insertSql);
                $resultadoSelect = $queryInsert->execute([":id" => $_SESSION["idUsuario"],":nombre" => $_POST["nombre"], ":descripcion" => $_POST["descripcion"],
                    ":precio" => $_POST["precio"], ":cantidad" => $_POST["cantidad"], ":categoria" => $_POST["categoria"], ":fecha_publicacion" => $fecha]);

                $idProducto = $connection->lastInsertId();

                for($i = 0; $i < count($_FILES['imagenes']['name']); $i++){
                    $filename = $fecha . "-" . $_FILES['imagenes']['name'][$i];

                    move_uploaded_file($_FILES['imagenes']['tmp_name'][$i], __DIR__ . "/../../public/upload/$filename");

                    $queryImage = $connection->prepare($insertImage);
                    $queryImage->execute([":id" => $idProducto, ":imagen" => $filename]);
                }

            } catch (Exception $e) {
                echo 'error: ' . $e->getMessage();
            }
        }

        public function editarProducto(){
            $updateProducto = "UPDATE producto SET nombre = :nombre, descripcion = :descripcion, precio = :precio, cantidad = :cantidad, categoria = :categoria";
            $updateProducto .= "WHERE id = :idProducto";
            $conexion = $this->getConnection();

            $updateProducto = $conexion->prepare($updateProducto);
            $updateProducto->execute([":nombre" => $_POST["nombre"], ":descripcion" => $_POST["descripcion"],
            ":precio" => $_POST["precio"], ":cantidad" => $_POST["cantidad"], ":categoria" => $_POST["categoria"], ":idProducto" => $idProducto]);

            // Eliminar las imagenes
            if(!empty($_FILES['imagenes']['name'])){

            }else {

            }

        }
    }
?>