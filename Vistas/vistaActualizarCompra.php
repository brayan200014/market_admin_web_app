<?php  include_once("../Controladores/controladorCompra.php")?>
<?php $idGet = $_GET['id']; $datos=getDatosCompraEditar(); ?>
<h1 class="h3 mb-2 text-gray-800">Registro de Compras</h1>
    <form class="needs-validation" novalidate action="" method= "POST" enctype="application/x-www-form-urlencoded" >
        <div class="mb-3">
            <label for="IdEmpleado" class="form-label">ID del Empleado</label>
            <input type="text" class="form-control needs-validation" id="IdEmpleado" name="IdEmpleado" value="<?php echo $datos[0]['Empleados_IdEmpleado'] ?>" placeholder="Ingrese el Id del Empleado" required pattern="[0-9]+">
            <div class="valid-feedback">
                Formato Valido
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
            </div>
        </div>
        <div class="mb-3">
            <label for="IdSucursal" class="form-label">ID de Sucursal</label>
            <input type="text" class="form-control needs-validation" id="IdSucursal" name="IdSucursal" value="<?php echo $datos[0]['Sucursales_IdSucursal'] ?>" placeholder="Ingrese el Id de la Sucursal" required pattern="[0-9]+">
        </div>
        <div class="mb-3">
            <label for="IdProveedor" class="form-label">ID de Proveedor</label>
            <input type="text" class="form-control needs-validation" id="IdProveedor" name="IdProveedor" value="<?php echo $datos[0]['Proveedores_IdProveedor'] ?>" placeholder="Ingrese el Id del Proveedor" required pattern="[0-9]+">
            <div class="valid-feedback">
                Formato Valido
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
            </div>
        </div>
        <div class="mb-3">
            <input type="hidden" class="form-control needs-validation" id="IdCompraExtraido" name="IdCompraExtraido"  value="<?php echo $idGet ?>" required pattern="[0-9]+">
        </div>
        <div class="mb-3">
            <label for="ISV" class="form-label">Impuesto sobre la Venta</label>
            <input type="text" class="form-control needs-validation" id="ISV" placeholder="Ingrese el ISV" value="<?php echo $datos[0]['ISV'] ?>" name="ISV" required pattern="^[0-9]+([.][0-9]+)?$">
            <div class="valid-feedback">
                Formato Valido
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
            </div>
        </div>

        <h2 class="h3 mb-2 text-gray-800">Detalle de Compra</h2>

        <?php $datosDetalleCompra = getDatosDetalleCompraEditar();
            for($i=0; $i<sizeof($datosDetalleCompra); $i++){  
        ?>

<div class="container-fluid" id="containerFila">
            <div class=".container-fluid d-flex flex-wrap justify-content-between" >
                <div class="mb-3">
                    <label for="IdProducto" class="form-label">ID del Producto</label>
                    <input type="text" class="form-control needs-validation" id="IdProducto" name="Producto[]"  placeholder="Ingrese el id del Producto" required pattern="[0-9]+">
                    <div class="valid-feedback">
                        Formato Valido
                    </div>
                    <div class="invalid-feedback">
                        Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control needs-validation" id="Cantidad" name="Cantidad[]" placeholder="Ingrese la cantidad" required pattern="[0-9]+">
                    <div class="valid-feedback">
                        Formato Valido
                    </div>
                    <div class="invalid-feedback">
                        Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="text" class="form-control needs-validation" id="Precio" name="Precio[]" placeholder="Ingrese el precio" required pattern="^[0-9]+([.][0-9]+)?$">
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
        <div class="d-flex justify-content-end"><button class="btn btn-warning fw-bold float-end mr-2"  type= "submit" onclick="" >Actualizar Compra</button>
        <a class="btn btn-secondary fw-bold float-end" href="../Paginas/listadoVCompras.php">Cancelar</a>
        </div> <br>
    </form>
