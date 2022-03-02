<?php

    class Empleado{

        private $empleado;
        private $db;

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
                    ON e.Puestos_IdPuesto = p.IdPuesto";

            foreach ($this->db->query($sql) as $res) {
                $this->empleado[] = $res;
            }
            return $this->empleado;
            $this->db = null;
        }

        //BUSCAR EMPLEADOS
        public function serchEmployees($id) {

            self::setNames();
            $sql = "SELECT IdEmpleado, CONCAT(Nombre, ' ', Apellido) AS Nombre, Identidad, Telefono, NombreSucursal, p.DescripcionPuesto
                    FROM Empleados e
                    INNER JOIN Sucursales s
                    ON e.Sucursales_IdSucursal = s.IdSucursal  
                    INNER JOIN Puestos p
                    ON e.Puestos_IdPuesto = p.IdPuesto
                    WHERE IdEmpleado = $id";
            foreach ($this->db->query($sql) as $res) {
                $this->empleado[] = $res;
            }
            return $this->empleado;
            $this->db = null;
        }

        //GUARDAR EMPLEADOS
        public function setEmployees($Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto, $Identidad){

            self::setNames();
            $sql = "INSERT INTO Empleados( Nombre, Apellido, Telefono, Direccion, Email, FechaContratacion, Estado, Sucursales_IdSucursal, Puestos_IdPuesto, Identidad) 
                    VALUES ( '$Nombre', '$Apellido', '$Telefono', '$Direccion', '$Email', '$FechaContratacion' , '$Estado' , $Sucursales_IdSucursal, $Puestos_IdPuesto, '$Identidad')";
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
                $this -> empleado[] = $result;
            }

            return $this -> empleado;
            $this -> db -> null;
        }

        //ELIMINAR EMPLEADOS
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

        //ACTUALIZAR EMPLEADOS
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
