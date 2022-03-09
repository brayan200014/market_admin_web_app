<?php

    class DetalleCompra{
        private $idCompra;
        private $idProducto;
        private $cantidad; 
        private $precio;
        private $db; 
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

        public function getIdCompra() {
            return $this-> idCompra; 
        }

        public function setIdCompra($id) {
            $this->idCompra= $id;
        }

        public function getIdProducto() {
            return $this-> idProducto; 
        }

        public function setIdProducto($id) {
            $this->idProducto= $id;
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
            $this->detalleCompra = array();
            $this->db = new PDO('mysql:host=34.224.30.50:3306;dbname=BasePortales',
            "proyectoportales2", "proyectoportales2");
        }

        private function setNames(){
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function setGuardarDetalleCompra(){
            self::setNames();
            $consulta = 'INSERT INTO DetalleCompra(Compras_IdCompra, Productos_IdProducto, Cantidad, PrecioCompra) 
            values ('.$this->idCompra.','.$this->idProducto.','.$this->cantidad.','.$this->precio.');';
            $result = $this->db->query($consulta);

            if($result){
                return true;
            }
            else{
                return false;
            }

        }

        public function getDetalleCompraEditar($id){
            self::setNames();
            $consulta = "SELECT * from DetalleCompra WHERE Compras_IdCompra = '".$id."';";
            foreach($this->db->query($consulta) as $res){
                $datosDetalleCompraEditar[] = $res;
            }

            return $datosDetalleCompraEditar;
            $this->db=null;
        }

        public function updateDetalleCompra($IdCompraEnviado, $IdProductoEnviado){
            self::setNames();
            $consulta = "UPDATE DetalleCompra set Productos_IdProducto = '".$this->idProducto."', Cantidad = '".$this->cantidad."', PrecioCompra = '".$this->precio."' where Compras_IdCompra = '".$IdCompraEnviado."' and Productos_IdProducto = '".$IdProductoEnviado."';";
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