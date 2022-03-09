<?php include_once("../Controladores/controladorVenta.php") ?>
<?php  $idGet= $_GET['id']; $datos=getDatosVentaEditar(); ?>
<h1 class="h3 mb-2 text-gray-800">Detalle Factura: <?php echo $idGet ?> </h1>
<form class="needs-validation" style="margin: 5%" novalidate action="" method= "POST" enctype="application/x-www-form-urlencoded" >
<?php $datosDetalleVenta= getDatosDetalleVentaEditar(); 
     for($i=0; $i<sizeof($datosDetalleVenta); $i++) {
?>

<div class="container-fluid" id="containerFilaVenta">
<div class=".container-fluid d-flex flex-wrap justify-content-between" >
<div class="mb-3">
  <label for="IdProducto" class="form-label">ID del Producto</label>
  <input type="text" class="form-control needs-validation" id="IdProducto" name="Producto[]" value="<?php echo $datosDetalleVenta[$i]['Productos_IdProducto'] ?>" placeholder="Ingrese el id del Producto" disabled required pattern="[0-9]+" >
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>
<div class="mb-3">
  <label for="Cantidad" class="form-label">Cantidad</label>
  <input type="text" class="form-control needs-validation" id="Cantidad" name="Cantidad[]" placeholder="Ingrese la cantidad" value="<?php echo $datosDetalleVenta[$i]['Cantidad'] ?>" disabled required pattern="[0-9]+">
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>
<div class="mb-3">
  <label for="Precio" class="form-label">Precio</label>
  <input type="text" class="form-control needs-validation" id="Precio" name="Precio[]" placeholder="Ingrese el precio" value="<?php echo $datosDetalleVenta[$i]['PrecioVenta'] ?>" disabled required pattern="^[0-9]+([.][0-9]+)?$">
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
<div class="d-flex justify-content-end">
<a class="btn btn-secondary fw-bold float-end" href="../Paginas/listadoVentas.php">Cancelar</a>
</div> <br>
 </form>
 