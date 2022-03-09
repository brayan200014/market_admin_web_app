<?php include_once('../Controladores/controladorVenta.php') ?>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Ventas Registradas</h1>
                  <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de ventas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Venta</th>
                                            <th>Fecha Venta</th>
                                            <th>Identidad Cliente</th>
                                            <th>Sucursal</th>
                                            <th>Usuario</th>
                                            <th>Subtotal</th>
                                            <th>ISV</th>
                                            <th>Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID Venta</th>
                                            <th>Fecha Venta</th>
                                            <th>Identidad Cliente</th>
                                            <th>Sucursal</th>
                                            <th>Usuario</th>
                                            <th>Subtotal</th>
                                            <th>ISV</th>
                                            <th>Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
                                        <?php
                                            $ventasRegistradas= getVentasRegistradas();
                                            for($i=0; $i < sizeof($ventasRegistradas); $i++ ) {
                                            $id= $ventasRegistradas[$i]['IdVenta'];
                                        ?>
                                          <tr>  
                                        <td> <?php echo $ventasRegistradas[$i]['IdVenta'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['FechaVenta'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['Identidad'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['NombreSucursal'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['NombreUsuario'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['Subtotal'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['ISV'] ?></td>
                                        <td><?php echo $ventasRegistradas[$i]['Total'] ?></td>
                                        <td> <a href="../Paginas/actualizarVenta.php?id= <?php echo $ventasRegistradas[$i]['IdVenta'] ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-eye"></i></a>
                                        <a href="../Paginas/actualizarVenta.php?id= <?php echo $ventasRegistradas[$i]['IdVenta'] ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a>
                                            
                                        </tr>
                                       
                                       <?php  } ?>

                                    </tbody>
                                </table>