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
        private $idVentaAgregado;
        

        

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

         public function setGuardarVenta(){
            
             self::setNames();
             $hoy = date("Ymd"); 

         
                $consulta='INSERT INTO Ventas(FechaVenta, Subtotal,ISV, Clientes_IdCliente, Usuarios_IdUsuario, Sucursales_IdSucursal)
                values('.$hoy.','. $this->subtotal .','. $this->ISV .','.$this->idCliente.','.$this->idUsuario.','.$this->idSucursal.');';
                 $result= $this->db->query($consulta); 
  
              if($result) {
  
                
  
                  return true;
              }
              else 
              {
                 
                 return false;
              }
         
            
        }

       

        public function getIdVentaAgregado() {
            self::setNames();
            $consulta= 'select MAX(IdVenta) IdVenta from Ventas;';
            foreach($this->db->query($consulta) as $res) {
                $this->idVentaAgregado[]= $res;
         }

         return $this->idVentaAgregado;
         $this->db= null;
        }

        
        public function getDatosVentaEditar($id) {
            $datosVentaEditar;
            self::setNames();
            $consulta= 'SELECT *  from Ventas WHERE IdVenta= '.$id.';';
            foreach($this->db->query($consulta) as $res) {
                $datosVentaEditar[]= $res;
         }

         return $datosVentaEditar;
         $this->db= null;
        }

        public function getSucursales() {
            $datosSucursales;
            self::setNames();
            $consulta= 'SELECT IdSucursal, NombreSucursal FROM Sucursales;';
            foreach($this->db->query($consulta) as $res) {
                $datosSucursales[]= $res;
         }

         return $datosSucursales;
         $this->db= null;
        }

        public function updateVenta($IdVentaEnviado) {
            self::setNames();
            $consulta= ' UPDATE Ventas SET Clientes_IdCliente='. $this->idCliente .',Sucursales_IdSucursal='. $this->idSucursal .', 
            Usuarios_IdUsuario='. $this->idUsuario .', Subtotal='. $this->subtotal .', ISV='. $this->ISV .' where IdVenta='. $IdVentaEnviado .';';
            $result= $this->db->query($consulta);

            if($result) {
                setcookie('valid', 'Se actualizo con exito',time() + 60*60*24*30,'/'); 
                return true;
            }
            else 
            {
               
                return false; 
            } 
           
        }

    }
?>