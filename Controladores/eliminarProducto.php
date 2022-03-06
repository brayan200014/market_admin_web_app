<?php
    include_once('../Controladores/controladorProductos.php');

    //Recibe la petición de eliminar un producto
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if(deshabilitarProducto($id)){
            header('Location: ../Vistas/tablaProductos.php');
        }
      }

?>