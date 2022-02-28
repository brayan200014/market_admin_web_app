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

        public function getEmployees() {

            self::setNames();
            $sql = "SELECT IdEmpleado, CONCAT(Nombre, ' ', Apellido) As Nombre, Telefono, Email, NombreSucursal, NombreCiudad
                    FROM Empleados INNER JOIN Sucursales s
                    ON Empleados.Sucursales_IdSucursal = s.IdSucursal
                    INNER JOIN Ciudades c 
                    ON  s. Ciudades_IdCiudad = c. IdCiudad";
            foreach ($this->db->query($sql) as $res) {
                $this->empleado[] = $res;
            }
            return $this->empleado;
            $this->db = null;
        }

        public function serchEmployees($id) {

            self::setNames();
            $sql = "SELECT IdEmpleado, CONCAT(Nombre, ' ', Apellido) As Nombre, Telefono, Email, NombreSucursal, NombreCiudad
                    FROM Empleados INNER JOIN Sucursales s
                    ON Empleados.Sucursales_IdSucursal = s.IdSucursal
                    INNER JOIN Ciudades c 
                    ON  s. Ciudades_IdCiudad = c. IdCiudad
                    WHERE idEmpleado = $id";
            foreach ($this->db->query($sql) as $res) {
                $this->empleado[] = $res;
            }
            return $this->empleado;
            $this->db = null;
        }

        public function setEmployees($Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $sucursalesId, $PuestosId) {

            self::setNames();
            $sql = "INSERT INTO Empleados( Nombre, Apellido, Telefono, Direccion, Email, FechaContratacion, Estado, sucursalesId, PuestosId ) 
                    VALUES ( '$Nombre', '$Apellido', '$Telefono', $Direccion, '$Email', $FechaContratacion , $Estado , '$sucursalesId', '$PuestosId')";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

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

    }

?>