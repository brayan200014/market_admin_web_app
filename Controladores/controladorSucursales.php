<?php
      include_once('../Modelos/modeloSucursales.php');
       function listarSucursales(){
       $modeloSucursal = new Sucursal();
       return $modeloSucursal-> ObtenerSucursal();
   }
?>