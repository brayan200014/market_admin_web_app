<?php

    class Compra {

        private $IdCompra;
        private $FechaCompra;
        private $Subtotal;
        private $ISV;
        private $Empleados_IdEmpleado;
        private $Sucursales_IdSucursal;
        private $Proveedores_IdProveedor; 
        private $db;
        private $compra;
        private $idCompraAgregado;

        public function getIdCompra(){
            return $this-> IdCompra;
        }

        public function setIdCompra($id){
            $this->IdCompra = $id;
        }

        public function getFechaCompra(){
            return $this-> FechaCompra;
        }

        public function setFechaCompra($fecha){
            $this->FechaCompra = $fecha;
        }

        public function getSubtotal(){
            return $this-> Subtotal;
        }

        public function setSubtotal($sub){
            $this->Subtotal = $sub;
        }

        public function getISV(){
            return $this->ISV;
        }

        public function setISV($isv){
            $this->ISV = $isv;
        }

        public function getIdEmpleado(){
            return $this->Empleados_IdEmpleado;
        }

        public function setIdEmpleado($id){
            $this->Empleados_IdEmpleado = $id;
        }

        public function getIdSucursal(){
            return $this->Sucursales_IdSucursal;
        }

        public function setIdSucursal($id){
            $this->Sucursales_IdSucursal = $id;
        }

        public function getIdProveedor(){
            return $this->Proveedores_IdProveedor;
        }

        public function setIdProveedor($id){
            $this->Proveedores_IdProveedor = $id;
        }

        public function __construct(){
            $this-> compra = array();
            $this-> db = new PDO('mysql:host=34.224.30.50:3306;dbname=BasePortales',
            "proyectoportales2", "proyectoportales2");
        }

        private function setNames(){
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function getCompras(){
            $consulta = 'SELECT c.IdCompra, c.FechaCompra,concat(E.Nombre, " ", E.Apellido) as Empleado, S.NombreSucursal, p.NombreProveedor, c.Subtotal, c.ISV, ((c.Subtotal * c.ISV)+c.Subtotal) as Total  FROM 
            Compras c inner join Proveedores p on c.Proveedores_IdProveedor = p.IdProveedor 
            left join Empleados E on c.Empleados_IdEmpleado = E.IdEmpleado
            inner join Sucursales S on E.Sucursales_IdSucursal = S.IdSucursal;';
            foreach($this->db->query($consulta) as $res){
                $this->compra[] = $res;
            }

            return $this->compra;
            $this->db = null;
        }

        public function setGuardarCompra(){
            self::setNames();
            $fechadeHoy = date("Ymd");
            $consulta = "INSERT INTO Compras(FechaCompra, Subtotal,ISV, Empleados_IdEmpleado, Sucursales_IdSucursal, Proveedores_IdProveedor) 
            values('".$fechadeHoy."', '".$this->Subtotal."' , '".$this->ISV."', '".$this->Empleados_IdEmpleado."', '".$this->Sucursales_IdSucursal."', '".$this->Proveedores_IdProveedor."')";
            $result = $this->db->query($consulta);

            if($result){
                return true;
            }
            else{
                return false;
            }

            $this->db = null;

        }

        public function getIdCompraAgregado(){
            self::setNames();
            $consulta = 'SELECT MAX(IdCompra) IdCompra from Compras;';
            foreach($this->db->query($consulta) as $res){
                $this->idCompraAgregado[] = $res;
            }
            return $this->idCompraAgregado;
            $this->db = null;
        }

        public function getDatosCompraEditar($id){
            self::setNames();
            $consulta = "SELECT * from Compras where IdCompra = '".$id."';";
            foreach($this->db->query($consulta) as $res){
                $datosCompraEditar[] = $res;
            }
            return $datosCompraEditar;
            $this->db = null;
        }

        public function updateCompra($idCompraEnviado){
            self::setNames();
            $fechadeHoy = date("Ymd");
            $consulta = "UPDATE Compras set FechaCompra = '".$fechadeHoy."', Subtotal = '".$this->Subtotal."',ISV = '".$this->ISV."', Empleados_IdEmpleado = '".$this->Empleados_IdEmpleado."', Sucursales_IdSucursal = '".$this->Sucursales_IdSucursal."' , Proveedores_IdProveedor = '".$this->Proveedores_IdProveedor."' where IdCompra = '".$idCompraEnviado."';";
            $result = $this->db->query($consulta);

            if($result) {
                return true;
            }
            else 
            {
                return false; 
            } 
        }


    }

?>