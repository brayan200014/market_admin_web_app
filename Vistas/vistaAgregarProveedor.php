<?php

//Incluir el Controlador de Proveedores
include_once("../Controladores/controladorProveedores.php");

?>

<h1 class="h3 mb-2 text-gray-800">Registro de Proveedores</h1>
<form action="" method= "POST" enctype="application/x-www-form-urlencoded" >
    <div class="mb-3">
        <label for="NombreProveedor" class="form-label">Nombre del Proveedor</label>
        <input type="text" class="form-control" id="NombreProveedor" name="NombreProveedor" placeholder="Ingrese el Nombre del Proveedor">
    </div>
    <div class="mb-3">
        <label for="Contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control" id="Contacto" name="Contacto" placeholder="Ingrese el Contacto del Proveedor">
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control" id="Email" name="Email" placeholder="Ingrese el Email del Proveedor">
    </div>
    <br>
    <div class="d-flex justify-content-end"><button class="btn btn-primary" type= "submit" name="guardarProveedor" onclick="<?php validar()?>">Agregar Proveedor</button></div> 
    <br>
    <br>
</form>
