<?php

    class Producto{

        private $producto;
        private $db;
        private $categorias;

        public function __construct() {
            $this->producto = array();
            $this->db = new PDO('mysql:host=34.224.30.50;dbname=BasePortales', "proyectoportales2", "proyectoportales2");
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        //Busca la informacion de todos los productos
        public function getProductos() {

            self::setNames();
            $sql = "SELECT IdProducto, NombreProducto, DescripcionProducto, ISV, Imagen, Estado, c.NombreCategoria
                    FROM Productos p INNER JOIN Categorias c
                    WHERE p.Categorias_IdCategoria = c.IdCategoria";
            foreach ($this->db->query($sql) as $res) {
                $this->producto[] = $res;
            }
            return $this->producto;
            $this->db = null;
        }

        //Busca un solo producto por id
        public function serchProducto($id) {

            self::setNames();
            $sql = "SELECT * FROM Productos WHERE IdProducto = $id";
            foreach ($this->db->query($sql) as $res) {
                $this->producto[] = $res;
            }
            return $this->producto;
            $this->db = null;
        }

        //Lista las categorias
        public function getCategorias() {

            self::setNames();
            $sql = "SELECT * FROM Categorias";
            foreach ($this->db->query($sql) as $res) {
                $this->categorias[] = $res;
            }
            return $this->categorias;
            $this->db = null;
        }

        public function setProductos($nombre, $descripcion, $isv, $img, $estado, $categoriaId) {

            self::setNames();
            $sql = "INSERT INTO Productos( NombreProducto, DescripcionProducto, ISV, Imagen, Estado, Categorias_IdCategoria ) 
                    VALUES ( '$nombre', '$descripcion', $isv, '$img', $estado, $categoriaId )";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function updateProducts($id, $nombre, $descripcion, $isv, $img, $estado, $categoriaId){
            self::setNames();
            $sql = "UPDATE Productos SET NombreProducto = '$nombre' , DescripcionProducto = '$descripcion', ISV = $isv, Imagen = '$img', Estado = $estado, Categorias_IdCategoria = $categoriaId WHERE IdProducto = $id";
            $result = $this->db->query($sql);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteProducto($id) {

            self::setNames();
            $sql = "DELETE FROM Productos WHERE IdProducto = $id";
            $result = $this->db->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

    }

?>