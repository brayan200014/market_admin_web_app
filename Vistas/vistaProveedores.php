<?php

//Incluir el controlador de Proveedores
include_once('../Controladores/controladorProveedores.php');

?>

<h1 class="h3 mb-2 text-gray-800">Proveedores Registrados</h1>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Proveedores</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Proveedor</th>
                                            <th>Nombre Proveedor</th>
                                            <th>Contacto</th>
                                            <th>Email</th>
                                            <th>Editar / Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Proveedor</th>
                                            <th>Nombre Proveedor</th>
                                            <th>Contacto</th>
                                            <th>Email</th>
                                            <th>Editar / Eliminar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $listaProveedores = listarVentas();
                                            for($i=0; $i < sizeof($listaProveedores); $i++ ) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $listaProveedores[$i]['IdProveedor'] ?></td>
                                            <td><?php echo $listaProveedores[$i]['NombreProveedor'] ?></td>
                                            <td><?php echo $listaProveedores[$i]['Contacto'] ?></td>
                                            <td><?php echo $listaProveedores[$i]['Email'] ?></td>
                                            <td><button class="btn btn-primary" type="submit"><i class="fas fa-eye"></i></button><button class="btn btn-primary" type="submit"><i class="fas fa-pen"></i></button><button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button></td>                           
                                        </tr>
                                       <?php  } ?>
                                    </tbody>
                                </table>