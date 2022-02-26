<?php
    include_once('Modelos/modeloProductos.php');
    function listar(){
        $modeloProducto = new Producto();
        return $modeloProducto->getProductos();
    }
?>