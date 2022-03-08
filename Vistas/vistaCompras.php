<?php
include_once('../Controladores/controladorCompra.php');
?>

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
                                            <td><button class="btn btn-primary" type="submit"><i class="fas fa-eye"></i></button><button class="btn btn-primary" type="submit"><i class="fas fa-pen"></i></button><button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button></td>                           
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>