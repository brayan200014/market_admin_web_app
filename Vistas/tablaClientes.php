<?php
include_once('../Controladores/controladorClientes.php')
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Clientes</h1>
        <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nombre</th>
                            <th>Identidad</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $datosClientes = listarClientes();
                            for($i = 0; $i < sizeof($datosClientes); $i++){
                        ?>
                        <tr>
                            <td><?php echo $datosClientes[$i]['IdCliente'] ?></td>
                            <td><?php echo $datosClientes[$i]['Nombre'] ?></td>
                            <td><?php echo $datosClientes[$i]['Identidad'] ?></td>
                            <td><?php echo $datosClientes[$i]['Telefono'] ?></td>
                            <td><?php echo $datosClientes[$i]['Email'] ?></td>
                            <td>
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>