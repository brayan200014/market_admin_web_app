<?php include_once('../Controladores/controladorSucursales.php') ?>

<?php if(isset($_GET['value']) && $_GET['value']==1) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Registro modificado con exito
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if(isset($_GET['valueDelete']) && $_GET['valueDelete']==1) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Registro eliminado con exito
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sucursales</h1>
    <p class="mb-4"> Sección de Sucursales, donde se mostraran los datos siguiente: Código, Nombre de la Sucursal,
         Ciudad en la que se encuentra y su respectiva Dirección <a target="_blank"
            href="../Vistas/vistaAgregarSucursal.php"> Agrega una nueva Sucursal</a>.</p>

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
                            <th>Opciones</th>
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
                               <a class="btn btn-primary" href="../Paginas/modificarSucursal.php?id=<?php echo $datosSucursales[$i]['IdSucursal']?>">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a class="btn btn-danger" href="../Vistas/vistaEliminarSucursal.php?id=<?php echo $datosSucursales[$i]['IdSucursal']?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
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

