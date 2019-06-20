<?php

    class Model_producto extends Model{

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

        public function obtenerProductos($idUsuario){
            $selectProductos = "SELECT p.*, i.* FROM producto as p INNER JOIN imagen as i ";
		    $selectProductos .= "ON p.idProducto = i.idProducto GROUP BY p.idProducto HAVING p.idUsuario = :idUsuario";
		    $conexion = $this->getConnection();

		    $queryProducto = $conexion->prepare($selectProductos);
		    $queryProducto->execute([":idUsuario" => $idUsuario]);

		    return $queryProducto->fetchAll(PDO::FETCH_ASSOC);
        }

	    public function agregarProducto(){
            $conexion = $this->getConnection();

            $insertSql = "INSERT INTO producto (idUsuario, nombre, descripcion, precio, cantidad, categoria, fecha_publicacion) VALUES";
            $insertSql .= "(:id, :nombre, :descripcion, :precio, :cantidad, :categoria, :fecha_publicacion)";
            $fecha = date("y-m-d-H-i-s");

		    try {
                $queryInsert = $conexion->prepare($insertSql);
                $resultadoSelect = $queryInsert->execute([":id" => $_SESSION["idUsuario"],":nombre" => $_POST["nombre"], ":descripcion" => $_POST["descripcion"],
                    ":precio" => $_POST["precio"], ":cantidad" => $_POST["cantidad"], ":categoria" => $_POST["categoria"], ":fecha_publicacion" => $fecha]);

                $idProducto = $conexion->lastInsertId();
                $this->insertarImagen($idProducto, $conexion, $fecha);

            } catch (Exception $e) {
                echo 'error: ' . $e->getMessage();
            }
        }

        public function editarProducto($idProducto){
            $updateProducto = "UPDATE producto SET nombre = :nombre, descripcion = :descripcion, precio = :precio, cantidad = :cantidad, categoria = :categoria";
            $updateProducto .= " WHERE idProducto = :idProducto";
            $conexion = $this->getConnection();

            $updateProducto = $conexion->prepare($updateProducto);
            $updateProducto->execute([":nombre" => $_POST["nombre"], ":descripcion" => $_POST["descripcion"], 
                ":precio" => $_POST["precio"], ":cantidad" => $_POST["cantidad"], ":categoria" => $_POST["categoria"], ":idProducto" => $idProducto]);

            // Si no hay imagenes termina
            var_dump(empty($_FILES['imagenes']['name'][0]));
            if(empty($_FILES['imagenes']['name'][0])){
                echo "no imagen";
                return;

            } else {
                $this->eliminarImagenes($idProducto);
                
                $fecha = date("y-m-d-H-i-s");
                $this->insertarImagen($idProducto, $conexion, $fecha);
                
            }
        }

        public function eliminarProducto($idProducto){
		    $deleteProducto = "DELETE FROM producto WHERE idProducto = :idProducto";
		    $conexion = $this->getConnection();
            
		    $queryProducto = $conexion->prepare($deleteProducto);
            $this->eliminarImagenes($idProducto);
            $queryProducto->execute([":idProducto" => $idProducto]);
        }

        private function insertarImagen($idProducto, $conexion, $fecha){
            $insertImage = "INSERT INTO imagen (idProducto, imagen) VALUES (:id, :imagen)";

            for($i = 0; $i < count($_FILES['imagenes']['name']); $i++){
                $filename = $fecha . "-" . $_FILES['imagenes']['name'][$i];

                move_uploaded_file($_FILES['imagenes']['tmp_name'][$i], __DIR__ . "/../../public/upload/$filename");

                $queryImage = $conexion->prepare($insertImage);
                $queryImage->execute([":id" => $idProducto, ":imagen" => $filename]);
            }
        }

        private function eliminarImagenes($idProducto){
            $selectImagen = "SELECT imagen as imagenUrl FROM imagen WHERE idProducto = :idProducto";
            $deleteImagen = "DELETE FROM imagen WHERE idProducto = :idProducto";

            $querySelect = $this->getConnection()->prepare($selectImagen);
            $querySelect->execute([":idProducto" => $idProducto]);

            $resultadoSelect = $querySelect->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultadoSelect as $key => $fileName){
                unlink(__DIR__ . "/../../public/upload/" . $fileName['imagenUrl']);
            }

            $queryDelete = $this->getConnection()->prepare($deleteImagen);
            $queryDelete->execute([":idProducto" => $idProducto]);
        }
    }
?>