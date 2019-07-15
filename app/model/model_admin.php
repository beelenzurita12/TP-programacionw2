<?php 

    class Model_admin extends Model{

        public function __constructor(){
            parent::__constructor();
        }   
        
        public function obtenerUsuariosHabilidatos(){
            $selectUsuarios = "SELECT u.idUsuario, u.tipoUsuario, nombre, apellido, email ";
            $selectUsuarios .= "FROM usuario u INNER JOIN estadoUsuario e ON e.idUsuario = u.idUsuario ";
            $selectUsuarios .= "WHERE e.habilitado = true";
            $conexion = $this->getConnection();

            $queryUsuarios = $conexion->prepare($selectUsuarios);
            $queryUsuarios->execute();

            return $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);
        }

        public function obtenerUsuariosDeshabilitados(){
            $selectUsuarios = "SELECT u.idUsuario, u.tipoUsuario, nombre, apellido, email ";
            $selectUsuarios .= "FROM usuario u INNER JOIN estadoUsuario e ON e.idUsuario = u.idUsuario ";
            $selectUsuarios .= "WHERE e.habilitado = false";
            $conexion = $this->getConnection();

            $queryUsuarios = $conexion->prepare($selectUsuarios);
            $queryUsuarios->execute();

            return $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);
        }

        public function bloquearUsuario($idUsuario){
            $updateEstado = "UPDATE estadoUsuario SET habilitado = 0 WHERE idUsuario = :idUsuario";
            $conexion = $this->getConnection();

            $queryEstado = $conexion->prepare($updateEstado);
            $queryEstado->execute([":idUsuario" => $idUsuario]);
        }
        
        public function desbloquearUsuario($idUsuario){
            $updateEstado = "UPDATE estadoUsuario SET habilitado = 1 WHERE idUsuario = :idUsuario";
            $conexion = $this->getConnection();

            $queryEstado = $conexion->prepare($updateEstado);
            $queryEstado->execute([":idUsuario" => $idUsuario]);
        }
    }
?>