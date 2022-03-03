<?php include_once('../Controladores/controladorSucursales.php') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sucursales</h1>
    <p class="mb-4"> Sección de Sucursales, donde se mostraran los datos siguiente: Código, Nombre de la Sucursal,
         Ciudad en la que se encuentra y su respectiva Dirección <a target="_blank"
            href="https://datatables.net"> official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sucursales</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre Sucursal</th>
                            <th>Ciudad</th>
                            <th>Direccion</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $datosSucursales = listarSucursales();
                        
                            for($i = 0; $i < sizeof($datosSucursales); $i++){
                        ?>
                        <tr>
                            <td><?php echo $datosSucursales[$i]['IdSucursal'] ?></td>
                            <td><?php echo $datosSucursales[$i]['NombreSucursal'] ?></td>
                            <td><?php echo $datosSucursales[$i]['NombreCiudad'] ?></td>
                            <td><?php echo $datosSucursales[$i]['Direccion'] ?></td>

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
