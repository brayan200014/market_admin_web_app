<?php

    class Empleado{

        private $empleado;
        private $db;
        private $puesto;
        private $sucursal;

        public function __construct() {
            $this->empleado = array();
            $this->db = new PDO('mysql:host=34.224.30.50;dbname=BasePortales', "proyectoportales2", "proyectoportales2");
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        //OBTENER EMPLEADOS
        public function ObtenerEmployees() {

            self::setNames();

            $sql = "SELECT IdEmpleado, CONCAT(Nombre, ' ', Apellido) AS Nombre, Identidad, Telefono, NombreSucursal, p.DescripcionPuesto
                    FROM Empleados e
                    INNER JOIN Sucursales s
                    ON e.Sucursales_IdSucursal = s.IdSucursal  
                    INNER JOIN Puestos p
                    ON e.Puestos_IdPuesto = p.IdPuesto
                    WHERE e.Estado = 1";

            foreach ($this->db->query($sql) as $res) {
                $this->empleado[] = $res;
            }
            return $this->empleado;
            $this->db = null;
        }

        //BUSCAR EMPLEADOS
        public function serchEmployees($id) {

            self::setNames();
            $sql = "SELECT * FROM Empleados WHERE IdEmpleado= $id";
            foreach ($this->db->query($sql) as $res) {
                $this->empleado[] = $res;
            }
            return $this->empleado;
            $this->db = null;
        }

        //GUARDAR EMPLEADOS
        public function setEmployees($Nombre, $Apellido, $Identidad, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){

            self::setNames();
            $sql = "INSERT INTO Empleados( Nombre, Apellido, Identidad, Telefono, Direccion, Email, FechaContratacion, Estado, Sucursales_IdSucursal, Puestos_IdPuesto) 
                    VALUES ( '$Nombre', '$Apellido', '$Identidad', '$Telefono', '$Direccion', '$Email', '$FechaContratacion', $Estado , $Sucursales_IdSucursal, $Puestos_IdPuesto)";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        //LLENADO DE COMBOBOX PUESTOS DESDE LA BD
        public function ObtenerPuestos(){

            self::setNames();

            $sql = "SELECT * FROM Puestos";

            foreach ($this -> db -> query($sql) as $result){
                $this -> puesto[] = $result;
            }

            return $this -> puesto;
            $this -> db -> null;
        }


         //LLENADO DE COMBOBOX SUCURSALES DESDE LA BD
         public function ObtenerSucursal(){

            self::setNames();

            $sql = "Select IdSucursal, NombreSucursal from Sucursales;";

            foreach ($this -> db -> query($sql) as $result){
                $this -> sucursal[] = $result;
            }

            return $this -> sucursal;
            $this -> db -> null;
        }

        //ACTUALIZAR EMPLEADO
        public function UpdateEmployees($id, $Nombre, $Apellido, $Identidad, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){
            self::setNames();
            $sql = "UPDATE Empleados SET Nombre = '$Nombre' ,Apellido= '$Apellido', Identidad= '$Identidad', Telefono='$Telefono', Direccion='$Direccion', FechaContratacion='$FechaContratacion', Estado=$Estado, Sucursales_IdSucursal=$Sucursales_IdSucursal, Puestos_IdPuesto= $Puestos_IdPuesto WHERE IdEmpleado = $id";
            $result = $this->db->query($sql);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }

         //CAMBIAR ESTADO DEL EMPLEADO
         public function offEmpleado($id) {

            self::setNames();
            $sql = "UPDATE Empleados SET Estado = false WHERE IdEmpleado = $id";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

    }

?>
