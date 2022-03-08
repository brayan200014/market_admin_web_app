<?php
    include_once('../Controladores/controladorProductos.php');

    //Recibe la petición de eliminar un producto
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if(deshabilitarProducto($id)){
            echo "<script>
                    alert('Producto eliminado con exito');
                    window.location= '../Vistas/tablaProductos.php'
                </script>";
        }
        else{
            echo "<script>
                    alert('Error al eliminar el producto');
                    window.location= '../Vistas/tablaProductos.php'
                </script>";
        }
      }

?>