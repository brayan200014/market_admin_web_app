<?php 
include_once('../Controladores/controladorCompra.php');
?>

<h1 class="h3 mb-2 text-gray-800">Registro de Compras</h1>
    <form action="" method= "POST" enctype="application/x-www-form-urlencoded" >
        <div class="mb-3">
            <label for="IdEmpleado" class="form-label">ID del Empleado</label>
            <input type="text" class="form-control" id="IdEmpleado" name="IdEmpleado" placeholder="Ingrese el Id del Empleado">
        </div>
        <div class="mb-3">
            <label for="IdSucursal" class="form-label">ID de Sucursal</label>
            <input type="text" class="form-control" id="IdSucursal" name="IdSucursal" placeholder="Ingrese el Id de la Sucursal">
        </div>
        <div class="mb-3">
            <label for="IdProveedor" class="form-label">ID de Proveedor</label>
            <input type="text" class="form-control" id="IdProveedor" name="IdProveedor" placeholder="Ingrese el Id del Proveedor">
        </div>
        <div class="mb-3">
            <label for="ISV" class="form-label">Impuesto sobre la Venta</label>
            <input type="text" class="form-control" id="ISV" placeholder="Ingrese el ISV" name="ISV">
        </div>

        <h2 class="h3 mb-2 text-gray-800">Detalle de Compra</h2>

        <div class="container-fluid" id="containerFilaVenta">
            <div class=".container-fluid d-flex flex-wrap justify-content-between" >
                <div class="mb-3">
                    <label for="IdProducto" class="form-label">ID del Producto</label>
                    <input type="text" class="form-control" id="IdProducto" name="Producto[]"  placeholder="Ingrese el id del Producto">
                </div>
                <div class="mb-3">
                    <label for="Cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="Cantidad" name="Cantidad[]" placeholder="Ingrese la cantidad">
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="Precio" name="Precio[]" placeholder="Ingrese el precio">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center"><button type="button" id="Agregar" onclick="agregarFila()" class="btn btn-outline-primary btn-sm">Agregar fila detalle</button></div>
        <div class="d-flex justify-content-end"><button class="btn btn-primary" type= "submit" name="guardarCompra" onClick="<?php validar()?>">Agregar Compra</button></div> <br>
    </form>