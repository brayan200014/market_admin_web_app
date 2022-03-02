<?php
    include_once('../Modelos/modeloProductos.php');
    function listarProductos(){
        $modeloProducto = new Producto();
        return $modeloProducto->getProductos();
    }

    function listarCatgeroias(){
        $modeloProducto = new Producto();
        return $modeloProducto->getCategorias();
    }
?>