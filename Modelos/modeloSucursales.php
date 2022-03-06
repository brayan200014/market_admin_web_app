<?php

    class Sucursal{

        private $sucursal;
        private $db;
        private $ciudad;

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

            $sql = "SELECT IdSucursal, NombreSucursal, Direccion, NombreCiudad
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
            $sql = "SELECT IdSucursal, NombreSucursal, Direccion, NombreCiudad
                    FROM Sucursales s
                    INNER JOIN Ciudades c
                    ON s.Ciudades_IdCiudad = c.IdCiudad
                    WHERE idSucursal = $id";
            foreach ($this->db->query($sql) as $res) {
                $this->sucursal[] = $res;
            }
            return $this->sucursal;
            $this->db = null;
        }

        //GUARDAR SUCURSAL
        public function setSucursal($NombreSucursal, $Direccion, $Estado, $Ciudades_IdCiudad){

            self::setNames();
            $sql = "INSERT INTO Sucursales( NombreSucursal, Direccion, Estado, Ciudades_IdCiudad) 
                    VALUES ('$NombreSucursal', '$Direccion', $Estado ,$Ciudades_IdCiudad)";
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

            $sql = "SELECT * FROM Ciudades";

            foreach ($this -> db -> query($sql) as $result){
                $this -> ciudad[] = $result;
            }

            return $this -> ciudad;
            $this -> db -> null;
        }

        //ACTUALIZAR SUCURSALES
      public function UpdateSucursal($id, $NombreSucursal, $Direccion, $Estado, $Ciudades_IdCiudad){
        self::setNames();
        $sql = "UPDATE Sucursales SET NombreSucursal = '$NombreSucursal', Direccion='$Direccion', Estado= $Estado, Ciudades_IdCiudad= $Ciudades_IdCiudad WHERE IdSucursal = $id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    //CAMBIAR ESTADO DE LA SUCURSAL
    public function offSucursal($id) {

        self::setNames();
        $sql = "UPDATE Sucursales SET Estado = false WHERE IdSucursal = $id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /* NO ES RECOMENDABLE BORRAR DATOS PERO SI LO DESEAN SERIA: ELIMINAR SUCURSALES
    public function deleteSucursales($id) {

        self::setNames();
        $sql = "DELETE FROM Sucursales WHERE IdSucursal = $id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }*/
}

?>
