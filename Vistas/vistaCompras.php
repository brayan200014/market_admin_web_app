<?php
include_once('../Controladores/controladorCompra.php');
?>

<?php if(isset($_GET['value']) && $_GET['value']==1) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Registro Guardado con exito
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if(isset($_GET['valueact']) && $_GET['valueact']==1) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Registro Actualizado con Exito
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>

<h1 class="h3 mb-2 text-gray-800">Compras Registradas</h1>
                  <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Compras</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Compra</th>
                                            <th>Fecha Compra</th>
                                            <th>Empleado</th>
                                            <th>Sucursal</th>
                                            <th>Proveedor</th>
                                            <th>Subtotal</th>
                                            <th>ISV</th>
                                            <th>Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Compra</th>
                                            <th>Fecha Compra</th>
                                            <th>Empleado</th>
                                            <th>Sucursal</th>
                                            <th>Proveedor</th>
                                            <th>Subtotal</th>
                                            <th>ISV</th>
                                            <th>Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $comprasRegistradas= getComprasRegistradas();
                                            for($i=0; $i < sizeof($comprasRegistradas); $i++ ) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $comprasRegistradas[$i]['IdCompra'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['FechaCompra'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['Empleado'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['NombreSucursal'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['NombreProveedor'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['Subtotal'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['ISV'] ?></td>
                                            <td><?php echo $comprasRegistradas[$i]['Total'] ?></td>
                                            <td> <a href="../Paginas/verDetalleVenta.php?id= <?php echo $comprasRegistradas[$i]['IdCompra'] ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-eye"></i></a>
                                        <a href="../Paginas/actualizarCompra.php?id= <?php echo $comprasRegistradas[$i]['IdCompra'] ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a></td>                           
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>