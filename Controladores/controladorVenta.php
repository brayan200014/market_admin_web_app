
<?php include_once('../Modelos/modeloVenta.php')?>
<?php include_once('../Modelos/modeloDetalleVenta.php') ?>

<?php 

        if(isset($_POST['IdVentaExtraido'])) {
            $boolean= updateVentaEnviada($_POST['IdVentaExtraido']);
            echo "<script>window.location= '../Paginas/listadoVentas.php?valueact='+$boolean</script>";
        }
         if(isset($_POST['validar'])) {
            $boolean= setGuardarVentaEnviada();
            echo "<script>window.location= '../Paginas/listadoVentas.php?value='+$boolean</script>";
        }
       
        function getDatosVentaEditar() {
            if(isset($_GET['id'])){
                $id= $_GET['id']; 
                $ventaModelo= new Venta();
                $detalleModelo= new DetalleVenta();
                $datosVentaEditar= $ventaModelo-> getDatosVentaEditar($id);
                $datosDetalleVentaEditar= $detalleModelo-> getDetalleVentaEditar($id);
                if(!empty($datosVentaEditar)) {
                    return $datosVentaEditar; 
                }
                else 
                {
                    return false;
                } 
            } 
        }

        function getDatosDetalleVentaEditar() {
            if(isset($_GET['id'])){
                $id= $_GET['id']; 
                $detalleModelo= new DetalleVenta();
                $datosDetalleVentaEditar= $detalleModelo-> getDetalleVentaEditar($id);
                if(!empty($datosDetalleVentaEditar)) {
                    return $datosDetalleVentaEditar; 
                }
                else 
                {
                    return false;
                }    
            } 
        }
    
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

    function getSucursalesRegistradas() {
        $modeloVenta= new Venta();
        $sucursales= $modeloVenta->getSucursales();
        return $sucursales;
    }

    function setGuardarVentaEnviada() {

        $acumulador=0;
        $CantidadArrayRecibido= $_POST['Cantidad'];
        $PrecioArrayRecibido= $_POST['Precio'];

        for($i=0; $i<sizeof($CantidadArrayRecibido); $i++){
            $acumulador+= ($CantidadArrayRecibido[$i]*$PrecioArrayRecibido[$i]);
        }
        $modeloVenta= new Venta();
        $idcliente= htmlspecialchars($_POST['IdCliente']);
        $modeloVenta->setIdCliente($idcliente);
        $idSucursal= htmlspecialchars($_POST['IdSucursal']);
        $modeloVenta->setIdSucursal($idSucursal);
        $idusuario=  htmlspecialchars($_POST['IdUsuario']);
        $modeloVenta->setIdUsuario($idusuario);
        $isv= htmlspecialchars($_POST['ISV']);
        $modeloVenta->setISV($isv);
        $modeloVenta->setSubtotal($acumulador);
        $boolean= $modeloVenta->setGuardarVenta();
        $idVentaAgregado= $modeloVenta-> getIdVentaAgregado();

        $modeloDetalle= new DetalleVenta();
        $ProductoArrayRecibido= $_POST['Producto'];

        $count= sizeof($ProductoArrayRecibido);

        for($i=0; $i<$count; $i++) {
            $modeloDetalle -> setIdProducto($ProductoArrayRecibido[$i]);
            $modeloDetalle -> setCantidad($CantidadArrayRecibido[$i]);
            $modeloDetalle -> setPrecio($PrecioArrayRecibido[$i]);
            $modeloDetalle -> setIdVenta($idVentaAgregado[0]['IdVenta']);
            $modeloDetalle -> setGuardarDetalleVenta();

        }


        if($boolean==true) {
            return true;
       }else 
       {
           return false; 
       }
    }


    function updateVentaEnviada($idVentaGet) {

        $acumulador=0;
        $CantidadArrayRecibido= $_POST['Cantidad'];
        $PrecioArrayRecibido= $_POST['Precio'];

        for($i=0; $i<sizeof($CantidadArrayRecibido); $i++){
            $acumulador+= ($CantidadArrayRecibido[$i]*$PrecioArrayRecibido[$i]);
        }
       
            $modeloVenta= new Venta();
            $idcliente= htmlspecialchars($_POST['IdCliente']);
            $modeloVenta->setIdCliente($idcliente);
            $idSucursal= htmlspecialchars($_POST['IdSucursal']);
            $modeloVenta->setIdSucursal($idSucursal);
            $idusuario=  htmlspecialchars($_POST['IdUsuario']);
            $modeloVenta->setIdUsuario($idusuario);
            $isv= htmlspecialchars($_POST['ISV']);
            $modeloVenta->setISV($isv);
            $modeloVenta->setSubtotal($acumulador);
            $boolean= $modeloVenta->updateVenta($idVentaGet);

            $datosDetalle= getDatosDetalleVentaEditar();
    
            $modeloDetalle= new DetalleVenta();
            $ProductoArrayRecibido= $_POST['Producto'];
            $PrecioArrayRecibido= $_POST['Precio'];

    
            $count= sizeof($ProductoArrayRecibido);
    
            for($i=0; $i<$count; $i++) {
                $modeloDetalle -> setIdProducto($ProductoArrayRecibido[$i]);
                $modeloDetalle -> setCantidad($CantidadArrayRecibido[$i]);
                $modeloDetalle -> setPrecio($PrecioArrayRecibido[$i]); 
                $modeloDetalle -> updateDetalleVenta($idVentaGet, $datosDetalle[$i]['Productos_IdProducto']);
        }
        
        if($boolean==true) {
            return true;
       }else 
       {
           return false; 
       }
       
    }


?>

