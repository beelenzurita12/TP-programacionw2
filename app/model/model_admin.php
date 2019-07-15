<?php 

    class Model_admin extends Model{

        public function __constructor(){
            parent::__constructor();
        }   
        
        public function obtenerUsuarios(){
            $selectUsuarios = "SELECT idUsuario, tipoUsuario, nombre, apellido, email FROM usuario";
            $conexion = $this->getConnection();

            $queryUsuarios = $conexion->prepare($selectUsuarios);
            $queryUsuarios->execute();

            return $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>