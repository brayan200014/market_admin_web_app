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
                                            $listaProveedores = listarProveedores();
                                            for($i=0; $i < sizeof($listaProveedores); $i++ ) {
                                                $id = $listaProveedores[$i]['IdProveedor'];
                                        ?>
                                        <tr>
                                            <td> <?php echo $listaProveedores[$i]['IdProveedor'] ?></td>
                                            <td><?php echo $listaProveedores[$i]['NombreProveedor'] ?></td>
                                            <td><?php echo $listaProveedores[$i]['Contacto'] ?></td>
                                            <td><?php echo $listaProveedores[$i]['Email'] ?></td>                                                
                                            <td> 
                                            <a href="../Paginas/actualizarProveedor.php?id= <?php echo $listaProveedores[$i]['IdProveedor'] ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-pen"></i></a>
                                            <a href="../Paginas/eliminarProveedor.php?id= <?php echo $listaProveedores[$i]['IdProveedor'] ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                       <?php  } ?>
                                    </tbody>
                                </table>