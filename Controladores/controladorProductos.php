<?php
    include_once('../Modelos/modeloProductos.php');
    function listarProductos(){
        $modeloProducto = new Producto();
        return $modeloProducto->getProductos();
    }

    function listarCategorias(){
        $modeloProducto = new Producto();
        return $modeloProducto->getCategorias();
    }
?>