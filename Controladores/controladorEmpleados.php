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
    function setEmployees(){
            
        require_once("../Modelos/modeloEmpleados.php");
        $modeloEmpleados= new Empleado();
        $modeloEmpleados->Nombre = $_POST['Nombre'];
        $modeloEmpleados->Apellido = $_POST['Apellido'];
        $modeloEmpleados->Identidad = $_POST['Identidad'];
        $modeloEmpleados->Telefono = $_POST['Telefono'];
        $modeloEmpleados->Direccion = $_POST['Direccion'];
        $modeloEmpleados->Email = $_POST['Email'];
        $modeloEmpleados->FechaContratacion = $_POST['FechaContratacion'];
        $modeloEmpleados->Estado = $_POST['Estado'];
        $modeloEmpleados->Sucursales_IdSucursal = $_POST['Sucursales_IdSucursal'];
        $modeloEmpleados->Puestos_IdPuesto = $_POST['Puestos_IdPuesto'];  

        return $modeloempleado -> setEmployees($Nombre, $Apellido, $Identidad, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto);
    }

?>
