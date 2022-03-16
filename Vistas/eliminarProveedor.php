<?php
    include_once('../Controladores/controladorProveedores.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if((eliminarProveedor($id)))
        {
            echo "<script>
            window.location= '../Paginas/listadoProveedores.php?valueDelete=1'
        </script>";
        }
        else{
            echo "<script>
            alert('Error al eliminar el Proveedor');
            </script>";
        }
    }
?>