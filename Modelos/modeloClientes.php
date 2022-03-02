<?php
    class Cliente{

        private $clientes;
        private $db;

        public function __construct() {
            $this->producto = array();
            $this->db = new PDO('mysql:host=34.224.30.50;dbname=BasePortales', "proyectoportales2", "proyectoportales2");
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function obtenerClientes(){
            self::setNames();

            $sql = "Select IdCliente, CONCAT(Nombre, ' ', Apellido) AS Nombre, Apellido, Telefono, Direccion, Email, Identidad, RTN From Clientes";

            foreach ($this->db->query($sql) as $res) {
                $this->clientes[] = $res;
            }
            return $this->clientes;
            $this->db = null;
        }

        public function serchClientes($id){
            self::setNames();

            $sql = "Select IdCliente, Nombre, Apellido, Telefono, Direccion, Email, Identidad, RTN From Clientes
            WHERE IdCliente = $id";

            foreach ($this->db->query($sql) as $res) {
                $this->clientes[] = $res;
            }
            return $this->clientes;
            $this->db = null;
        }

        public function setClientes($nombre, $apellido, $telefono, $direccion, $email, $identidad, $rtn){
            self::setNames();

            $sql="INSERT INTO Clientes(Nombre, Apellido, Direccion, Email, Identidad, RTN)
                    VALUES ('$nombre', '$apellido', '$telefono', '$direccion', '$email', '$identidad', $rtn)";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }        
        }   
        
        public function updateClientes($id, $nombre, $apellido, $telefono, $direccion, $email, $identidad, $rtn){
            self::setNames();

            $sql="UPDATE Clientes SET Nombre='$nombre', Apellido='$apellido', Direccion='$direccion', Email='$email', Identidad='$apellido', RTN='$rtn'
            WHERE IdCliente='$id'";

            $result=$this->db->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function deleteClientes($id){
            self::setNames();

            $sql="DELETE FROM Clientes WHERE IdCliente=$id";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

    }
?>