<?php
    include_once('../Modelos/modeloClientes.php');
    function listarClientes(){
        $modeloClientes = new cliente();
        return $modeloClientes->obtenerClientes();
    }
?>
<?php

        function obtenerClientes(){
            require_once('../Modelos/modeloClientes.php');
            $cliente = new cliente();
            return 
        }

        function deleteClientes($id){
            require_once('../Modelos/modeloClientes.php');
            $Clientes = new cliente();
            return $Clientes->deleteClientes($id);
        }
    
        function updateClientes($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email, $RTN){
            require_once('../Modelos/modeloClientes.php');
            $Clientes=new Empleado();
            return $Clientes-> updateClientes($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email,$RTN);
        }
    
        function setClientes($Nombre, $Apellido, $Telefono, $Direccion, $Email,$RTN){
            require_once('../Modelos/modeloClientes.php');
            $Clientes = new Empleado();
            return $Clientes -> setClientes($Nombre, $Apellido, $Telefono, $Direccion, $Email,$RTN);
        }
?>

