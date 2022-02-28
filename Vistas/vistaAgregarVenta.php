<?php include_once("../Controladores/controladorVenta.php") ?>
<h1 class="h3 mb-2 text-gray-800">Registro de Ventas</h1>
<form action="" method= "POST" enctype="application/x-www-form-urlencoded" >
<div class="mb-3">
  <label for="IdCliente" class="form-label">ID del Cliente</label>
  <input type="text" class="form-control" id="IdCliente" name="IdCliente" placeholder="Ingrese el id del cliente">
</div>
<div class="mb-3">
  <label for="IdSucursal" class="form-label">ID de Sucursal</label>
  <input type="text" class="form-control" id="IdSucursal" name="IdSucursal" placeholder="Ingrese el id de la sucursal">
</div>
<div class="mb-3">
  <label for="IdUsuario" class="form-label">ID de Usuario</label>
  <input type="text" class="form-control" id="IdUsuario" name="IdUsuario" placeholder="Ingrese el id del Usuario">
</div>
<div class="mb-3">
  <label for="ISV" class="form-label">Impuesto sobre la Venta</label>
  <input type="text" class="form-control" id="ISV" placeholder="Ingrese el ISV" name="ISV">
</div>

<h2 class="h3 mb-2 text-gray-800">Detalle de Venta</h2>

<div class="container-fluid" id="containerFila">
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
<div class="d-flex justify-content-end"><button class="btn btn-primary" type= "submit" >Agregar Venta</button></div> <br>
 </form>

