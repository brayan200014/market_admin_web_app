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
?>