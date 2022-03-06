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
    function guardarSucursal($NombreSucursal, $Direccion, $Ciudades_IdCiudad){
        $modeloSucursal= new Sucursal();
        return $modeloSucursal->setSucursal($NombreSucursal, $Direccion, $Ciudades_IdCiudad);
    }

    if (isset($_POST['insertarSucursal'])) {
        $NombreSucursal = $_POST['nombreS'];
        $Direccion = $_POST['direccionS'];
        $Ciudades_IdCiudad= $_POST['ciudad'];
    
        if(guardarSucursal($NombreSucursal, $Direccion, $Ciudades_IdCiudad)){
            header('Location: ../Paginas/agregarSucursales.php');
        }
    }

?>