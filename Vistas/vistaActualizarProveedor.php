<?php
include_once("../Controladores/controladorProveedores.php");
?>
<?php
$idGet = $_GET['id'];
$datos = getDatosProveedoresEditar();
?>
<h1 class="h3 mb-2 text-gray-800">Actualizar Venta</h1>
<form class="needs-validation" style="margin: 5%" novalidate action="" method="POST" enctype="application/x-www-form-urlencoded">
    <div class="mb-3">
        <label for="NombreProveedor" class="form-label">Nombre Proveedor</label>
        <input type="text" class="form-control needs-validation" id="NombreProveedor" name="NombreProveedor" placeholder="Ingrese el Nombre del Proveedor" value="<?php echo $datos[0]['NombreProveedor'] ?>" required pattern="[a-zA-Z0-9]+">
        <div class="valid-feedback">
            Formato Valido
        </div>
        <div class="invalid-feedback">
            Este campo no puede estar vacio y debe tener un formato valido.
        </div>
    </div>
    <div class="mb-3">
        <label for="Contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control needs-validation" id="Contacto" name="Contacto" placeholder="Ingrese el Contacto del Proveedor" value="<?php echo $datos[0]['Contacto'] ?>" required pattern="[0-9]+">
        <div class="valid-feedback">
            Formato Valido
        </div>
        <div class="invalid-feedback">
            Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
        </div>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control needs-validation" id="Email" name="Email" placeholder="Ingrese el Email del Proveedor" value="<?php echo $datos[0]['Email'] ?>" required pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$">
        <div class="valid-feedback">
            Formato Valido
        </div>
        <div class="invalid-feedback">
            Este campo no puede estar vacio y debe tener un formato valido de letras, numeros, "@", "." ejemplo: jefferson_sanchezr@unicah.edu 
        </div>
    </div>

    <div class="d-flex justify-content-end"><button class="btn btn-warning fw-bold float-end mr-2" type="submit" onclick="<?php validarDatosUpdateProveedor($idGet) ?>">Actualizar Proveedor</button>
        <a class="btn btn-secondary fw-bold float-end" href="../Paginas/listadoVentas.php">Cancelar</a>
    </div> <br>
</form>