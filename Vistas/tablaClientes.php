<?php
include_once('../Controladores/controladorClientes.php')
?>

<?php if(isset($_GET['valuemod']) && $_GET['valuemod']==1) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Cliente modificado con exito
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<?php if(isset($_GET['valueEli']) && $_GET['valueEli']==1) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Cliente eliminado con exito
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>

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
                            <th>Opciones</th>
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
                                <a class="btn btn-primary" href="../Paginas/editarClientes.php?id=<?php echo $datosClientes[$i]['IdCliente']?>">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a class="btn btn-danger" href="../Controladores/eliminarCliente.php?id=<?php echo $datosClientes[$i]['IdCliente']?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td> 
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