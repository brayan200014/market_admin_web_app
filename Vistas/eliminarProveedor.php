<?php
    include_once('../Controladores/controladorProveedores.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if((eliminarProveedor($id)))
        {
            echo "<script>
            alert('Proveedor eliminado con Exito.');
            window.location= '../Paginas/listadoProveedores.php'
        </script>";
        }
        else{
            echo "<script>
            alert('Error al eliminar el Proveedor');
            </script>";
        }
    }
?>