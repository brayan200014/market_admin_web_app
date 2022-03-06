<?php

    include_once('../Modelos/modeloEmpleados.php');
    function listarEmpleados()
    {
    $modeloEmpleados = new Empleado();
    return $modeloEmpleados->ObtenerEmployees();
    }

    function listarSucursales(){
        $modeloEmpleados = new Empleado();
        return $modeloEmpleados->ObtenerSucursal();
    }

    function listarPuestos(){
        $modeloEmpleados = new Empleado();
        return $modeloEmpleados->ObtenerPuestos();
    }

    //GUARDAR EMPLEADOS
    function guardarEmpleado($Nombre, $Apellido, $Identidad, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){
        $modeloEmpleados= new Empleado();
        return $modeloEmpleados->setEmployees($Nombre, $Apellido, $Identidad, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto);
    }

    //Recibe la petición de guardar
    if (isset($_POST['insertarEmpleado'])) {
        $Nombre = $_POST['nombre'];
        $Apellido = $_POST['apellido'];
        $Identidad = $_POST['identidad'];
        $Telefono = $_POST['telefono'];
        $Direccion = $_POST['direccion'];
        $Email = $_POST['email'];
        $FechaContratacion = $_POST['fechaC'];
        $Sucursales_IdSucursal = $_POST['sucursal'];
        $Puestos_IdPuesto= $_POST['puesto'];
    
        if(guardarEmpleado($Nombre, $Apellido, $Identidad, $Telefono, $Direccion, $Email, $FechaContratacion, true, $Sucursales_IdSucursal, $Puestos_IdPuesto)){
            header('Location: ../Paginas/agregarSucursales.php');
        }
    }

?>
