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

            $sql = "Select * From Clientes WHERE IdCliente = $id";

            foreach ($this->db->query($sql) as $res) {
                $this->clientes[] = $res;
            }
            return $this->clientes;
            $this->db = null;
        }

        public function setClientes($Nombre, $Apellido, $Telefono, $Direccion, $Email, $Identidad, $RTN){
            self::setNames();

            $sql="INSERT INTO Clientes(Nombre, Apellido, Telefono, Direccion, Email, Identidad, RTN)
                    VALUES ('$Nombre', '$Apellido', '$Telefono', '$Direccion', '$Email', '$Identidad', $RTN)";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }        
        }   
        
        public function updateClientes($IdCliente,$Nombre, $Apellido, $Telefono, $Direccion, $Email, $Identidad, $RTN){
            self::setNames();

            $sql="UPDATE Clientes SET Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono',Direccion='$Direccion', Email='$Email', Identidad='$Identidad', RTN='$RTN'
            WHERE IdCliente='$IdCliente'";

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