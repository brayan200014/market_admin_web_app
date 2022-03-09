<?php
    include_once('../Controladores/controladorProductos.php');

    //Recibe la petición de eliminar un producto
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if(deshabilitarProducto($id)){
            echo "<script>
                    window.location= '../Paginas/productoTabla.php?valueDelete=1'
                </script>";
        }
        else{
            echo "<script>
                    alert('Error al eliminar el producto');
                    window.location= '../Paginas/productoTabla.php'
                </script>";
        }
      }

?>