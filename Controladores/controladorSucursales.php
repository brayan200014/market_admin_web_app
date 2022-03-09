<?php
      include_once('../Modelos/modeloSucursales.php');
       function listarSucursales(){
       $modeloSucursal = new Sucursal();
       return $modeloSucursal-> ObtenerSucursal();
   }

   function listarCiudades(){
    $modeloSucursal = new Sucursal();
    return $modeloSucursal->ObtenerCiudades();
    }

    //GUARDAR SUCURSAL
    function guardarSucursal($NombreSucursal, $Direccion, $Estado, $Ciudades_IdCiudad){
        $modeloSucursal= new Sucursal();
        return $modeloSucursal->setSucursal($NombreSucursal, $Direccion, $Estado, $Ciudades_IdCiudad);
    }

    if (isset($_POST['insertarSucursal'])) {
        $NombreSucursal = $_POST['nombreS'];
        $Direccion = $_POST['direccionS'];
        $Ciudades_IdCiudad= $_POST['ciudad'];
    
        if(guardarSucursal($NombreSucursal, $Direccion, true, $Ciudades_IdCiudad)){
            echo "<script>
            window.location= '../Paginas/agregarSucursales.php?value=1'
        </script>";
        }
        else{
            echo "<script>
            alert('Error al ingresar la Sucursal deseada');
        </script>";
        }
    }

    //ACTUALIZAR SUCURSAL
    function modificarSucursal($id, $NombreSucursal, $Direccion, $Estado, $Ciudades_IdCiudad){
        $modeloSucursal = new Sucursal();
        return $modeloSucursal->UpdateSucursal($id, $NombreSucursal, $Direccion,$Estado, $Ciudades_IdCiudad);
    }

    function consultaSucursal($id){
        $modeloSucursal = new Sucursal();
        return $modeloSucursal->buscarSucursal($id);
    }

    if (isset($_POST['modificarSucursales'])) {
        $id = $_POST['id'];
        $NombreSucursal= $_POST['nombreS'];
        $Direccion = $_POST['direccionS'];
        $Ciudades_IdCiudad = $_POST['ciudad'];
        
      
        if(modificarSucursal($id, $NombreSucursal, $Direccion, true ,$Ciudades_IdCiudad)){
            echo "<script>
            window.location= '../Paginas/listarSucursales.php?value=1'
        </script>";
        }
        else{
            echo "<script>
            alert('Error al modificar la Sucursal');
            </script>";
        }
    }

    //CAMBIAR ESTADO DE LA SUCURSAL
    function cambiarEstadoSucursal($id){
        $modeloSucursal = new Sucursal();
        return $modeloSucursal->offSucursal($id);
    }


?>