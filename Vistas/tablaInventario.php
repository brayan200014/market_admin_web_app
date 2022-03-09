<?php 
    include_once('../Controladores/controladorProductos.php');

    if(isset($_GET['idPro'])) {
        $id = $_GET['idPro'];
        
        if($id!=null){
            $datosInventario = listarInventario($id);
        }
    }
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventario</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Inventario por sucursal</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Sucursal</th>
                        <th>Existencia</th>
                        <th>Precio de Venta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < sizeof($datosInventario); $i++){
                    ?>
                        <tr>
                            <td><?php echo $datosInventario[$i]['Productos_IdProducto'] ?></td>
                            <td><?php echo $datosInventario[$i]['NombreSucursal'] ?></td>
                            <td><?php echo $datosInventario[$i]['CantidadExistencia'] ?></td>
                            <td><?php echo $datosInventario[$i]['PrecioVenta'] ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row ml-2">
    <a class="btn btn-secondary fw-bold float-end" href="../Paginas/productoTabla.php">Regresar</a>
</div>