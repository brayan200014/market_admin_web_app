<?php
    include_once('../Controladores/controladorSucursales.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if(cambiarEstadoSucursal($id)){
                echo "<script>
                alert('Sucursal deshabilitada con exito');
                window.location= '../Paginas/listarSucursales.php'
            </script>";
        }
            else{
                echo "<script>
                alert('Error al deshabilitar la Sucursal');
                </script>";
            }
      }
?>