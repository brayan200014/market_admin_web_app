<?php

//Incluir el Controlador de Proveedores
include_once("../Controladores/controladorProveedores.php");

?>

<h1 class="h3 mb-2 text-gray-800">Registro de Proveedores</h1>
<form class="needs-validation" novalidate action="" method= "POST" enctype="application/x-www-form-urlencoded" >
    <div class="mb-3">
        <label for="NombreProveedor" class="form-label">Nombre del Proveedor</label>
        <input type="text" class="form-control needs-validation" id="NombreProveedor" name="NombreProveedor" placeholder="Ingrese el Nombre del Proveedor" required pattern="[a-zA-Z0-9]+">
        <div class="valid-feedback">
            Formato Valido
        </div>
        <div class="invalid-feedback">
            Este campo no puede estar vacio y debe tener un formato valido de solo letras y numeros.
        </div>
    </div>
    <div class="mb-3">
        <label for="Contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control needs-validation" id="Contacto" name="Contacto" placeholder="Ingrese el Contacto del Proveedor" required pattern="[0-9]+">
        <div class="valid-feedback">
            Formato Valido
        </div>
        <div class="invalid-feedback">
            Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
        </div>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control needs-validation" id="Email" name="Email" placeholder="Ingrese el Email del Proveedor" required pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$">
        <div class="valid-feedback">
            Formato Valido
        </div>
        <div class="invalid-feedback">
            Este campo no puede estar vacio y debe tener un formato valido de letras, numeros, "@", "." ejemplo: jefferson_sanchezr@unicah.edu 
        </div>
    </div>
    <br>
    <div class="d-flex justify-content-end"><button class="btn btn-primary" type= "submit" name="guardarProveedor" onclick="<?php validar()?>">Agregar Proveedor</button></div> 
    <br>
    <br>
</form>
