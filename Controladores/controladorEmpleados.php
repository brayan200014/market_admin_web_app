<?php
    include_once('../Modelos/modeloEmpleados.php');
    function listar(){
        $modeloEmpleados = new Empleado();
        return $modeloEmpleados->getEmployees();
    }
?>