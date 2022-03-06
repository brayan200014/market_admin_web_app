<?php

    Class Usuario{
        private $usuario;
        private $db;

        public function __construct() {
            $this->usuario = array();
            $this->db = new PDO('mysql:host=34.224.30.50;dbname=BasePortales', "proyectoportales2", "proyectoportales2");
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function getUsuarios() {

            self::setNames();
            $sql = "SELECT * FROM Usuarios";
            foreach ($this->db->query($sql) as $res) {
                $this->usuario[] = $res;
            }
            return $this->usuario;
            $this->db = null;
        }

        public function setUsuario($usuario, $correo, $clave, $idEmpleado) {

            self::setNames();
            $sql = "INSERT INTO Usuarios (NombreUsuario, Correo, Contrasena, FechaCreacion, Estado, Empleados_IdEmpleado)
                    VALUES ('$usuario','$correo', '$clave', NOW(), true, $idEmpleado);";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function buscarUsuario($id){
            self::setNames();
            $sql = "SELECT * FROM Usuarios WHERE IdUsuario = $id";
            $result = $this->db->query($sql);

            foreach ($this->db->query($sql) as $res) {
                $this->usuario[] = $res;
            }
            return $this->usuario;
            $this->db = null;
        }

        public function verificarUsuario($usuario, $contrasena){
            self::setNames();
            $sql = "SELECT * FROM Usuarios 
                    WHERE NombreUsuario = '$usuario' AND Contrasena = '$contrasena'";
            $result = $this->db->query($sql);

            foreach ($this->db->query($sql) as $res) {
                $this->usuario[] = $res;
            }
            return $this->usuario;
            $this->db = null;
        }
    }

?>