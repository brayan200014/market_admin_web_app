<?php
    include_once('../Controladores/controladorEmpleados.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if(cambiarEstadoEmpleados($id))
        {
            echo "<script>
            alert('Empleado deshabilitado con exito');
            window.location= '../Paginas/listarEmpleados.php'
        </script>";
        }
        else{
            echo "<script>
            alert('Error al deshabilitar el empleado');
            </script>";
            }
    }
?>