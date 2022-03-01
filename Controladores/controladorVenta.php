<?php include_once('../Modelos/modeloVenta.php')?>
<?php include_once('../Modelos/modeloDetalleVenta.php') ?>

<?php 



    
    function validarDatosVentas() {
        if(!empty($_POST)) {
            setGuardarVentaEnviada();

        }
    }

   function getVentasRegistradas() {
        $modeloVenta= new Venta();
        $ventas= $modeloVenta->getVentas();
        return $ventas;
    }
    
   

    function setGuardarVentaEnviada() {
        $modeloVenta= new Venta();
        $idcliente= htmlspecialchars($_POST['IdCliente']);
        $modeloVenta->setIdCliente($idcliente);
        $idSucursal= htmlspecialchars($_POST['IdSucursal']);
        $modeloVenta->setIdSucursal($idSucursal);
        $idusuario=  htmlspecialchars($_POST['IdUsuario']);
        $modeloVenta->setIdUsuario($idusuario);
        $isv= htmlspecialchars($_POST['ISV']);
        $modeloVenta->setISV($isv);
        $modeloVenta->setGuardarVenta();
        $idVentaAgregado= $modeloVenta-> getIdVentaAgregado();

        $modeloDetalle= new DetalleVenta();
        $ProductoArrayRecibido= $_POST['Producto'];
        $CantidadArrayRecibido= $_POST['Cantidad'];
        $PrecioArrayRecibido= $_POST['Precio'];

        $count= sizeof($ProductoArrayRecibido);

        for($i=0; $i<$count; $i++) {
            $modeloDetalle -> setIdProducto($ProductoArrayRecibido[$i]);
            $modeloDetalle -> setCantidad($CantidadArrayRecibido[$i]);
            $modeloDetalle -> setPrecio($PrecioArrayRecibido[$i]);
            $modeloDetalle -> setIdVenta($idVentaAgregado[0]['IdVenta']);
            $modeloDetalle -> setGuardarDetalleVenta();
        }

        
    }

?>

