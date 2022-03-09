<?php

    class Proveedor{

        //Atributos de la clase
        private $IdProveedor;
        private $NombreProveedor;
        private $Contacto;
        private $Email;
        private $proveedor;
        private $db;

        //Encapsulamiento
        public function getIdProveedor(){
            return $this->IdProveedor;
        }

        public function setIdProveedor($id){
            $this->IdProveedor = $id;
        }

        public function getNombreProveedor(){
            return $this->NombreProveedor;
        }

        public function setNombreProveedor($nombre){
            $this->NombreProveedor = $nombre;
        }

        public function getContacto(){
            return $this->Contacto;
        }

        public function setContacto($contact){
            $this->Contacto = $contact;
        }

        public function getEmail(){
            return $this->Email;
        }

        public function setEmail($correo){
            $this->Email = $correo;
        }

        //Metodo de conexion a la base de datos
        public function __construct(){
            $this->proveedor = array();
            $this->db = new PDO('mysql:host=34.224.30.50:3306;dbname=BasePortales', 
            "proyectoportales2","proyectoportales2");
        }

        private function setNames(){
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function getProveedores(){
            self::setNames();
            $consulta = 'SELECT * from Proveedores;';
            foreach($this->db->query($consulta) as $res){
                $this->proveedor[] = $res;
            }

            return $this->proveedor;
            $this->db = null;
        }

        public function setGuardarProveedor(){
            self::setNames();
            $consulta = "INSERT INTO Proveedores(NombreProveedor, Contacto, Email) 
            values ('".$this->NombreProveedor."', '".$this->Contacto."', '".$this->Email."');";
            $result = $this->db->query($consulta);

            if($result){
                return true;
            }
            else{
                return false;
            }

            $this->db = null;
        }

        public function updateProveedor($IdProveedor) {
            self::setNames();
            $consulta= "UPDATE Proveedores set NombreProveedor = '".$this->NombreProveedor."', Contacto = '".$this->Contacto."', Email = '".$this->Email."' where IdProveedor = '".$IdProveedor."';";
            $result= $this->db->query($consulta);

            if($result) {
                return true;
            }
            else 
            {
               
                return false; 
            } 
            $this->db = null;
        }

        public function getDatosProveedoresEditar($id) {
            self::setNames();
            $consulta= "SELECT *  from Proveedores WHERE IdProveedor = '".$id."';";
            foreach($this->db->query($consulta) as $res) {
                $datosProveedorEditar[]= $res;
            }
        
            return $datosProveedorEditar;
         $this->db= null;
        }

        public function deleteProveedor($id){
            self::setNames();
            $consulta = "DELETE FROM Proveedores WHERE IdProveedor = '".$id."'; ";
            $result = $this->db->query($consulta);

            if($result) {
                return true;
            }
            else 
            {
               
                return false; 
            } 
            $this->db = null;

        }




    }

?>