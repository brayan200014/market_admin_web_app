<?php
    include_once('../Modelos/modeloClientes.php');
    function listarClientes(){
        $modeloClientes = new cliente();
        return $modeloClientes->obtenerClientes();
    }

    function deleteClientes($id){
        $modeloClientes = new cliente();
        return $modeloClientes->deleteClientes($id);
    }

    function updateClientes($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email, $RTN){
            
        $modeloClientes=new Empleado();
        return $modeloClientes-> updateClientes($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email,$RTN);
    }

    //GUARDAR EMPLEADOS
    function setClientes($Nombre, $Apellido, $Telefono, $Direccion, $Email,$RTN){
        
        $modeloClientes = new Empleado();
        return $modeloClientes -> setClientes($Nombre, $Apellido, $Telefono, $Direccion, $Email,$RTN);
    }
?>

