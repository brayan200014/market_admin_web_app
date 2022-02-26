<?php include_once('../Controladores/controladorProductos.php') ?>
<?php include_once('../Plantilla/header.php') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Productos</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $datosProductos = listar();
                        
                            for($i = 0; $i < sizeof($datosProductos); $i++){
                        ?>
                        <tr>
                            <td><?php echo $datosProductos[$i]['IdProducto'] ?></td>
                            <td><?php echo $datosProductos[$i]['NombreProducto'] ?></td>
                            <td><?php echo $datosProductos[$i]['DescripcionProducto'] ?></td>
                            <td><?php echo $datosProductos[$i]['NombreCategoria'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include_once('../Plantilla/footer.php') ?>