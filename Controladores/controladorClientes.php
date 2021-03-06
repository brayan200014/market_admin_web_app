<?php
    include_once('../Modelos/modeloClientes.php');
    function listarClientes(){
        $modeloClientes = new cliente();
        return $modeloClientes->obtenerClientes();
    }
 
    function agregarCliente($Nombre, $Apellido, $Telefono, $Direccion, $Email,$Identidad, $RTN){
        $modeloClientes = new cliente();
        return $modeloClientes->setClientes($Nombre, $Apellido, $Telefono, $Direccion, $Email, $Identidad,$RTN);
    }


    function modificarCliente($IdCliente, $Nombre, $Apellido,$Telefono,$Direccion, $Email, $Identidad, $RTN){
        $modeloClientes = new cliente();
        return $modeloClientes->updateClientes($IdCliente, $Nombre, $Apellido,$Telefono,$Direccion, $Email, $Identidad, $RTN);
    }

    function consultarCliente($id){
        $modeloClientes = new cliente();
        return $modeloClientes->serchClientes($id);
    }

    function eliminarCliente($id){
        $modeloClientes = new cliente();
        return $modeloClientes->deleteClientes($id);
    }
    
    if(isset($_POST['agregarCliente'])){
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Telefono = $_POST['Telefono'];
        $Direccion = $_POST['Direccion'];
        $Email = $_POST['Email'];
        $Identidad = $_POST['Identidad'];
        $RTN = $_POST['RTN'];
        
        
        if(agregarCliente($Nombre, $Apellido, $Telefono,$Direccion, $Email, $Identidad, $RTN)){
            echo "<script>
                    window.location= '../Paginas/paginaAgregarCliente.php?valueagg=1'
                </script>";
        }else{
            echo "<script>
                    alert('Error al ingresar el cliente');
                </script>";
        }
        
    }

    if(isset($_POST['modificarCliente'])){
        $IdCliente = $_POST['IdCliente'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Telefono = $_POST['Telefono'];
        $Direccion = $_POST['Direccion'];
        $Email = $_POST['Email'];
        $Identidad = $_POST['Identidad'];
        $RTN = $_POST['RTN'];

        if(modificarCliente($IdCliente ,$Nombre, $Apellido, $Telefono,$Direccion, $Email, $Identidad, $RTN)){
            echo "<script>
                    window.location= '../Paginas/paginatablaclientes.php?valuemod=1'
                </script>";
        }else{
            echo "<script>
                    alert('Error al modificar el cliente');
                </script>";
        }
    }
?>

