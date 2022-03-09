<?php   
include_once('../Modelos/modeloCompras.php');
include_once('../Modelos/modeloDetalleCompra.php');
?>

<?php

    if(isset($_POST['IdCompraExtraido'])){
        $boolean = updateCompraEnviada($_POST['IdCompraExtraido']);
        echo "<script>window.location= '../Paginas/listadoCompras.php?valueact='+$boolean</script>";
    }

    if(isset($_POST['validar'])){
        $boolean = setGuardarCompraEnviada();
        echo "<script>window.location = '../Paginas/listadoCompras.php?value='+$boolean</script>";
    }

    function getDatosCompraEditar(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $compraModelo = new Compra();
            $detalleModelo = new DetalleCompra();
            $datosCompraEditar = $compraModelo->getDatosCompraEditar($id);
            $datosDetalleCompraEditar = $detalleModelo->getDetalleCompraEditar($id);
            if(!empty($datosCompraEditar)){
                return $datosCompraEditar;
            }
            else{
                return false;
            }
        }
    }

    function getDatosDetalleCompraEditar(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $detalleModelo = new DetalleCompra();
            $datosDetalleCompraEditar = $detalleModelo->getDetalleCompraEditar($id);
            if(!empty($datosDetalleCompraEditar)){
                return $datosDetalleCompraEditar;
            }
            else{
                return false;
            }
        }
    }

    function getComprasRegistradas(){
        $modeloCompras = new Compra();
        $compras = $modeloCompras->getCompras();
        return $compras;
    }

    function setGuardarCompraEnviada(){

        $acumulador=0;
        $CantidadArrayRecibido = $_POST['Cantidad'];
        $PrecioArrayRecibido = $_POST['Precio'];

        for($i=0; $i<sizeof($CantidadArrayRecibido); $i++){
            $acumulador+=($CantidadArrayRecibido[$i]*$PrecioArrayRecibido[$i]);
        }

        $modeloCompras = new Compra();
        $idEmpleado = htmlspecialchars($_POST['IdEmpleado']);
        $modeloCompras->setIdEmpleado($idEmpleado);
        $idSucursal = htmlspecialchars($_POST['IdSucursal']);
        $modeloCompras->setIdSucursal($idSucursal);
        $idProveedor = htmlspecialchars($_POST['IdProveedor']);
        $modeloCompras->setIdProveedor($idProveedor);
        $isv = htmlspecialchars($_POST['ISV']);
        $modeloCompras->setISV($isv);
        $modeloCompras->setSubtotal($acumulador);
        $boolean = $modeloCompras->setGuardarCompra();
        $idCompraAgregada = $modeloCompras->getIdCompraAgregado();

        $modeloDetalleCompra = new DetalleCompra();
        $ProductoArrayRecibido = $_POST['Producto'];

        $count = sizeof($PrecioArrayRecibido);

        for($i = 0; $i < $count; $i++){
            $modeloDetalleCompra->setIdProducto($ProductoArrayRecibido[$i]);
            $modeloDetalleCompra->setCantidad($CantidadArrayRecibido[$i]);
            $modeloDetalleCompra->setPrecio($PrecioArrayRecibido[$i]);
            $modeloDetalleCompra->setIdCompra($idCompraAgregada[0]['IdCompra']);
            $modeloDetalleCompra->setGuardarDetalleCompra();
        }

        if($boolean==true){
            return true;
        }
        else{
            return false;
        }

    }

    function updateCompraEnviada($idCompraGet){
        $acumulador=0;
        $CantidadArrayRecibido=$_POST['Cantidad'];
        $PrecioArrayRecibido=$_POST['Precio'];

        for($i=0; $i<sizeof($CantidadArrayRecibido); $i++){
            $acumulador+=($CantidadArrayRecibido[$i]*$PrecioArrayRecibido[$i]);
        }

        $modeloCompras = new Compra();
        $idEmpleado = htmlspecialchars($_POST['IdEmpleado']);
        $modeloCompras->setIdEmpleado($idEmpleado);
        $idSucursal = htmlspecialchars($_POST['IdSucursal']);
        $modeloCompras->setIdSucursal($idSucursal);
        $idProveedor = htmlspecialchars($_POST['IdProveedor']);
        $modeloCompras->setIdProveedor($idProveedor);
        $isv = htmlspecialchars($_POST['ISV']);
        $modeloCompras->setISV($isv);
        $modeloCompras->setSubtotal($acumulador);
        $boolean = $modeloCompras->updateCompra($idCompraGet);

        $datosDetalle = getDatosDetalleCompraEditar();

        $modeloDetalle = new DetalleCompra();
        $ProductoArrayRecibido = $_POST['Producto'];
        $PrecioArrayRecibido = $_POST['Precio'];

        $count = sizeof($ProductoArrayRecibido);

        for($i=0; $i<$count; $i++){
            $modeloDetalle ->setIdProducto($ProductoArrayRecibido[$i]);
            $modeloDetalle->setCantidad($CantidadArrayRecibido[$i]);
            $modeloDetalle->setPrecio($PrecioArrayRecibido[$i]);
            $modeloDetalle-> updateDetalleCompra($idCompraGet, $datosDetalle[$i]['Productos_IdProducto']);
        }

        if($boolean==true){
            return true;
        }
        else{
            return false;
        }

    }

    function validar()
    {
        if(!empty($_POST))
        {
            setGuardarCompraEnviada();   
        }
        else
        {
            print_r($_POST);
        }
    }

?>