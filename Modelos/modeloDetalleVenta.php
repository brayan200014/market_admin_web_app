<?php

    class DetalleVenta {
        private $idventa; 
        private $idproducto; 
        private $cantidad; 
        private $precio;
        private $db; 
        private $DetalleVenta;
        private $productoArrayRecibido;
        private $cantidadArrayRecibido; 
        private $precioArrayRecibido; 
       
       
        public function getProductoArrayRecibido() {
            return  $this-> productoArrayRecibido;
          }
 
          public function setProductoArrayRecibido($arreglo) {
              $this->productoArrayRecibido= $arreglo;
          }

          public function getCantidadArrayRecibido() {
            return  $this-> cantidadArrayRecibido;
          }
 
          public function setCantidadArrayRecibido($arreglo) {
              $this->cantidadArrayRecibido= $arreglo;
          }

          public function getPrecioArrayRecibido() {
            return  $this-> precioArrayRecibido;
          }
 
          public function setPrecioArrayRecibido($arreglo) {
              $this->precioArrayRecibido= $arreglo;
          }

        public function getIdVenta() {
            return $this-> idventa; 
        }

        public function setIdVenta($id) {
            $this->idventa= $id;
        }

        public function getIdProducto() {
            return $this-> idproducto; 
        }

        public function setIdProducto($id) {
            $this->idproducto= $id;
        }

        public function getCantidad() {
            return $this-> cantidad; 
        }

        public function setCantidad($cant) {
            $this->cantidad= $cant;
        }

        public function getPrecio() {
            return $this-> precio; 
        }

        public function setPrecio($prec) {
            $this->precio= $prec;
        }

        public function __construct() {
            $this-> DetalleVenta= array();
            $this-> db= new PDO('mysql:host=34.224.30.50:3306;dbname=BasePortales',
              "proyectoportales2","proyectoportales2" );
        }


        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function setGuardarDetalleVenta() {
            self::setNames();
            $consulta= 'INSERT INTO DetalleVenta(Ventas_IdVenta, Productos_IdProducto, Cantidad,PrecioVenta) 
            values('. $this->idventa .', '. $this->idproducto .', '. $this->cantidad .', '. $this->precio .');';
            $result= $this->db->query($consulta);

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