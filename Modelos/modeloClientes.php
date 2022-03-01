<?php
    class Cliente{

        private $idCliente;
        private $nombre;
        private $apellido;
        private $telefono;
        private $direccion;
        private $correo;
        private $identidad;
        private $rtn;

        public function __construct() {
            $this->producto = array();
            $this->db = new PDO('mysql:host=34.224.30.50;dbname=BasePortales', "proyectoportales2", "proyectoportales2");
        }

        private function setNames() {
            return $this->db->query("SET NAMES 'utf8'");
        }

        

    }
?>