<?php include_once('../Modelos/modeloVenta.php')?>

<?php 
   function getVentasRegistradas() {
        $modeloVenta= new Venta();
        $ventas= $modeloVenta->getVentas();
        return $ventas;
    }
?>
