<?php

include_once('../Controladores/controladorProductos.php');

if (isset($_POST['insertarProducto'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $isv = $_POST['isv'];
    $img = $_POST['urlimagen'];
    $categoriaId = $_POST['categoria'];

    if(agregarProducto($nombre, $descripcion, $isv, $img, true , $categoriaId)){
        header('Location: ../Vistas/tablaProductos.php');
    }
}

?>