<?php

    class Sucursal{

        private $sucursal;
        private $db;

        public function __construct() {
            $this->sucursal = array();
            $this->db = new PDO('mysql:host=34.224.30.50;dbname=BasePortales', "proyectoportales2", "proyectoportales2");
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        //OBTENER SUCURSAL
        public function ObtenerSucursal(){

            self::setNames();

            $sql = " SELECT IdSucursal, NombreSucursal, Direccion, NombreCiudad
                    FROM Sucursales s
                    INNER JOIN Ciudades c
                    ON s.Ciudades_IdCiudad = c.IdCiudad";

            foreach ($this->db->query($sql) as $res) {
                $this->sucursal[] = $res;
            }
            return $this->sucursal;
            $this->db = null;
        }

        //BUSCAR SUCURSAL
        public function buscarSucursal($id) {

            self::setNames();
            $sql = "SELECT IdEmpleado, CONCAT(Nombre, ' ', Apellido) AS Nombre, Identidad, Telefono, NombreSucursal, p.DescripcionPuesto
                    FROM Empleados e
                    INNER JOIN Sucursales s
                    ON e.Sucursales_IdSucursal = s.IdSucursal  
                    INNER JOIN Puestos p
                    ON e.Puestos_IdPuesto = p.IdPuesto
                    WHERE idEmpleado = $id";
            foreach ($this->db->query($sql) as $res) {
                $this->sucursal[] = $res;
            }
            return $this->sucursal;
            $this->db = null;
        }

        //GUARDAR SUCURSAL
        public function GuardarSucursal($Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){

            self::setNames();
            $sql = "INSERT INTO Empleados( Nombre, Apellido, Telefono, Direccion, Email, FechaContratacion, Estado, Sucursales_IdSucursal, Puestos_IdPuesto) 
                    VALUES ( '$Nombre', '$Apellido', '$Telefono', '$Direccion', '$Email', '$FechaContratacion' , '$Estado' , $Sucursales_IdSucursal, $Puestos_IdPuesto)";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        //LLENADO DE COMBOBOX CIUDAD DESDE LA BD
        public function ObtenerCiudades(){

            self::setNames();

            $sql = "SELECT * FROM Puestos";

            foreach ($this -> db -> query($sql) as $result){
                $this -> sucursal[] = $result;
            }

            return $this -> sucursal;
            $this -> db -> null;
        }

        //ELIMINAR SUCURSALES
        public function deleteEmployees($id) {

            self::setNames();
            $sql = "DELETE FROM Empleados WHERE IdEmpleado = $id";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        //ACTUALIZAR SUCURSALES
        public function UpdateEmployees($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){
            self::setNames();
    
            $sql="UPDATE empleados SET 
            Nombre='$Nombre',
            Apellido='$Apellido',
            Telefono='$Telefono',
            Direccion='$Direccion',
            Email='$Email',
            FechaContratacion='$FechaContratacion',
            Estado='$Estado',
            Sucursales_IdSucursal='$Sucursales_IdSucursal',
            Puestos_IdPuesto='$Puestos_IdPuesto',
            WHERE IdEmpleado='$id'";
    
            $result=$this->db->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }
        }

    }

?>
