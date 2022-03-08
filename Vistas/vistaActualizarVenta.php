<?php include_once("../Controladores/controladorVenta.php") ?>
<?php  $idGet= $_GET['id']; $datos=getDatosVentaEditar(); ?>
<h1 class="h3 mb-2 text-gray-800">Actualizar Venta</h1>
<form class="needs-validation" style="margin: 5%" novalidate action="" method= "POST" enctype="application/x-www-form-urlencoded" >
<div class="mb-3">
  <label for="IdCliente" class="form-label">ID del Cliente</label>
  <input type="text" class="form-control needs-validation" id="IdCliente" name="IdCliente" placeholder="Ingrese el id del cliente" value="<?php echo $datos[0]['Clientes_IdCliente'] ?>" required pattern="[0-9]+">
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>
<div class="mb-3">
  <label for="IdSucursal" class="form-label">Sucursal</label>
  <select class="form-control" id="IdSucursal" name="IdSucursal">
                <?php
                    $datosSucursales = getSucursalesRegistradas();

                    for($i = 0; $i < sizeof($datosSucursales); $i++){
                        if($datosSucursales[$i]['IdSucursal'] == $datos[0]['Sucursales_IdSucursal']){
                ?>
                        <option value="<?php echo $datosSucursales[$i]['IdSucursal']; ?>" selected><?php echo $datosSucursales[$i]['NombreSucursal']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $datosSucursales[$i]['IdSucursal']; ?>"><?php echo $datosSucursales[$i]['NombreSucursal']; ?></option>
                <?php
                        }
                    }
                ?>
            </select>
            <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio, debe elegir una sucursal.
  </div>
 
</div>
<div class="mb-3">
  <label for="IdUsuario" class="form-label">ID de Usuario</label>
  <input type="text" class="form-control needs-validation" id="IdUsuario" name="IdUsuario" placeholder="Ingrese el id del Usuario" value="<?php echo $datos[0]['Usuarios_IdUsuario'] ?>" required pattern="[0-9]+">
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>
<div class="mb-3">
  <label for="ISV" class="form-label">Impuesto sobre la Venta</label>
  <input type="text" class="form-control needs-validation" id="ISV" placeholder="Ingrese el ISV" name="ISV" value="<?php echo $datos[0]['ISV'] ?>" required pattern="^[0-9]+([.][0-9]+)?$">
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros y punto
  </div>
</div>

<h2 class="h3 mb-2 text-gray-800">Detalle de Venta</h2>

<?php $datosDetalleVenta= getDatosDetalleVentaEditar(); 
     for($i=0; $i<sizeof($datosDetalleVenta); $i++) {
?>

<div class="container-fluid" id="containerFilaVenta">
<div class=".container-fluid d-flex flex-wrap justify-content-between" >
<div class="mb-3">
  <label for="IdProducto" class="form-label">ID del Producto</label>
  <input type="text" class="form-control needs-validation" id="IdProducto" name="Producto[]" value="<?php echo $datosDetalleVenta[$i]['Productos_IdProducto'] ?>" placeholder="Ingrese el id del Producto" required pattern="[0-9]+" >
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>
<div class="mb-3">
  <label for="Cantidad" class="form-label">Cantidad</label>
  <input type="text" class="form-control needs-validation" id="Cantidad" name="Cantidad[]" placeholder="Ingrese la cantidad" value="<?php echo $datosDetalleVenta[$i]['Cantidad'] ?>" required pattern="[0-9]+">
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>
<div class="mb-3">
  <label for="Precio" class="form-label">Precio</label>
  <input type="text" class="form-control needs-validation" id="Precio" name="Precio[]" placeholder="Ingrese el precio" value="<?php echo $datosDetalleVenta[$i]['PrecioVenta'] ?>" required pattern="^[0-9]+([.][0-9]+)?$">
  <div class="valid-feedback">
            Formato Valido
     </div>
      <div class="invalid-feedback">
           Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
      </div>
</div>
</div>
</div>
<?php }?>

           
<div class="d-flex justify-content-end"><button class="btn btn-warning fw-bold float-end mr-2" type= "submit" onclick="<?php validarDatosUpdateVenta($idGet) ?>" >Actualizar Venta</button>
<a class="btn btn-secondary fw-bold float-end" href="../Paginas/listadoVentas.php">Cancelar</a>
</div> <br>
 </form>
 