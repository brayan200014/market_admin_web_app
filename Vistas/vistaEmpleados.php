<?php include_once('../Controladores/controladorEmpleados.php') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Empleados</h1>
    <p class="mb-4"> Sección de Empleados, donde se mostraran los datos de: Codigo, Nombre y Apellido del Empleado,
         Numero de Telefono para su posterior contacto, Nombre de la Sucursal donde labora y el Puesto que desempeña <a target="_blank"
            href="https://datatables.net"> official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Empleados</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>No. Identidad</th>
                            <th>Telefono</th>
                            <th>Sucursal</th>
                            <th>Puesto</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $datosEmpleados = listarEmpleados();
                        
                            for($i = 0; $i < sizeof($datosEmpleados); $i++){
                        ?>
                        <tr>
                            <td><?php echo $datosEmpleados[$i]['IdEmpleado'] ?></td>
                            <td><?php echo $datosEmpleados[$i]['Nombre'] ?></td>
                            <td><?php echo $datosEmpleados[$i]['Identidad'] ?></td>
                            <td><?php echo $datosEmpleados[$i]['Telefono'] ?></td>
                            <td><?php echo $datosEmpleados[$i]['NombreSucursal'] ?></td>
                            <!--<td> echo $datosEmpleados[$i]['NombreCiudad'] </td>-->
                            <td><?php echo $datosEmpleados[$i]['DescripcionPuesto'] ?></td>

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
