<?php

class Model_comentarios extends Model{

    public function __constructor(){
        parent::__constructor();
    }

    public function enviarComentario($comentario, $idUsuario, $idProducto){
        $fecha = date("y-m-d H-i-s");

        $insertComentario = "INSERT INTO comentario (comentario, idUsuario, idProducto, fechaPublicacion)";
        $insertComentario .= " VALUES (:comentario, :idUsuario, :idProducto, :fecha)";

        $queryComentario = $this->getConnection()->prepare($insertComentario);
        $queryComentario->execute([":comentario" => $comentario, ":idUsuario" => $idUsuario, 
            ":idProducto" => $idProducto, ":fecha" => $fecha]);

        $this->closeConnection();
    }

    public function obtenerComentarios($idProducto){
        $selectComentario = "SELECT u.nombre, u.apellido, c.* FROM comentario c ";
        $selectComentario .= "INNER JOIN usuario u ON c.idUsuario = u.idUsuario WHERE c.idProducto = :id";

        $queryComentario = $this->getConnection()->prepare($selectComentario);
        $queryComentario->execute([":id" => $idProducto]);

        $resultado = $queryComentario->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();

        return $resultado; 
    }
}