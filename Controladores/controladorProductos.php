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

    function agregarProducto($nombre, $descripcion, $isv, $img, $estado, $categoriaId){
        $modeloProducto = new Producto();
        return $modeloProducto->setProductos($nombre, $descripcion, $isv, $img, $estado, $categoriaId);
    }

    function consultarProducto($id){
        $modeloProducto = new Producto();
        return $modeloProducto->serchProducto($id);
    }
?>