<?php

    class Venta {
        private $idVenta;
        private $fechaVenta;
        private $subtotal; 
        private $ISV; 
        private $idSucursal; 
        private $idCliente;
        private $idUsuario;
        private $db;
        private $venta;

        

       public function getIdVenta() {
           return  $this-> idVenta; 
        }

        public function setIdVenta($id) {
            $this-> idVenta= $id;
        }

        public function getFechaVenta() {
            return $this-> fechaVenta; 
        }

        
        public function setFechaVenta($fecha) {
            $this-> fechaVenta= $fecha;
        }

        public function getSubtotal() {
            return $this-> subtotal; 
        }

        
        public function setSubtotal($subtotalEnviado) {
            $this-> subtotal= $subtotalEnviado;
        }

        public function getISV() {
            return $this-> ISV; 
        }

        
        public function setISV($ISV_) {
            $this-> ISV= $ISV_;
        }

        public function getIdCliente() {
            return  $this-> idCliente; 
         }
 
         public function setIdCliente($id) {
             $this-> idCliente= $id;
         }

         public function getIdSucursal() {
            return  $this-> idSucursal; 
         }
 
         public function setIdSucursal($id) {
             $this-> idSucursal= $id;
         }

         public function getIdUsuario() {
            return  $this-> idUsuario; 
         }
 
         public function setIdUsuario($id) {
             $this-> idUsuario= $id;
         }

         public function __construct() {
             $this-> venta= array();
             $this-> db= new PDO('mysql:host=34.224.30.50:3306;dbname=BasePortales',
               "proyectoportales2","proyectoportales2" );
         }


         private function setNames() {
             return $this->db->query("SET NAMES 'utf8'");
         }

         public function getVentas() {
             self::setNames();
             $consulta= 'SELECT IdVenta,V.FechaVenta,C.Identidad, S.NombreSucursal, U.NombreUsuario, V.Subtotal,V.ISV, ((V.Subtotal*V.ISV)+Subtotal) Total  FROM
             Ventas V inner join Clientes C on V.Clientes_IdCliente=C.IdCliente
             inner join Sucursales  S on V.Sucursales_IdSucursal=S.IdSucursal
             inner join Usuarios U on V.Usuarios_IdUsuario= U.IdUsuario';
             foreach($this->db->query($consulta) as $res) {
                    $this->venta[]= $res;
             }

             return $this->venta;
             $this->db= null;
         }

        


    }
?>