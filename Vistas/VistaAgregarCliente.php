<?php include_once("../Controladores/controladorClientes.php") ?>

<h1 class="h3 mb-2 text-gray-800">Registro del Cliente</h1>

<form action="" method= "POST" enctype="application/x-www-form-urlencoded" >

<div class="mb-3">
  <label for="IdCliente" class="form-label">ID del Cliente</label>
  <input type="text" class="form-control" id="IdCliente" name="IdCliente" placeholder="Ingrese el id del cliente">
</div>

<div class="mb-3">
  <label for="Nombre" class="form-label">Nombre del cliente</label>
  <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del cliente">
</div>

<div class="mb-3">
  <label for="Apellido" class="form-label">Apellido</label>
  <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese el apellido del cliente">
</div>

<div class="mb-3">
  <label for="Tel" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="Tel" name="Tel" placeholder="Ingrese el Telefono">
</div>

<div class="mb-3">
  <label for="direccion" class="form-label">Direccion</label><br>
  <textarea name="direccion" cols="40" rows="5" id="direccion" placeholder="Ingrese la direccion"></textarea>
</div>

<div class="mb-3">
  <label for="correo" class="form-label">Email</label>
  <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo del cliente">
</div>

<div class="mb-3">
  <label for="iden" class="form-label">Identidad</label>
  <input type="text" class="form-control" id="iden" name="iden" placeholder="Ingrese la identidad del cliente">
</div>

<div class="mb-3">
  <label for="RTN" class="form-label">RTN</label>
  <input type="text" class="form-control" id="RTN" name="RTN" placeholder="Ingrese el RTN">
</div>

<div class="d-flex justify-content-center"><button type="button" id="Agregar" onclick="agregarFila()" class="btn btn-outline-primary btn-sm">Agregar fila detalle</button></div>
<div class="d-flex justify-content-end"><button class="btn btn-primary" type= "submit" onclick="<?php validarDatosVentas() ?>" >Agregar Venta</button></div> <br>
 </form>