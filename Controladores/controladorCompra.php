<?php   
include_once('../Modelos/modeloCompras.php');
include_once('../Modelos/modeloDetalleCompra.php');
?>

<?php

    function getComprasRegistradas(){
        $modeloCompras = new Compra();
        $compras = $modeloCompras->getCompras();
        return $compras;
    }

    function setGuardarCompraEnviada(){
        $modeloCompras = new Compra();
        $idEmpleado = htmlspecialchars($_POST['IdEmpleado']);
        $modeloCompras->setIdEmpleado($idEmpleado);
        $idSucursal = htmlspecialchars($_POST['IdSucursal']);
        $modeloCompras->setIdSucursal($idSucursal);
        $idProveedor = htmlspecialchars($_POST['IdProveedor']);
        $modeloCompras->setIdProveedor($idProveedor);
        $isv = htmlspecialchars($_POST['ISV']);
        $modeloCompras->setISV($isv);
        $modeloCompras->setGuardarCompra();
        $idCompraAgregada = $modeloCompras->getIdCompraAgregado();

        $modeloDetalleCompra = new DetalleCompra();
        $ProductoArrayRecibido = $_POST['Producto'];
        $CantidadArrayRecibido = $_POST['Cantidad'];
        $PrecioArrayRecibido = $_POST['Precio'];

        $count = sizeof($PrecioArrayRecibido);

        for($i = 0; $i < $count; $i++){
            $modeloDetalleCompra->setIdProducto($ProductoArrayRecibido[$i]);
            $modeloDetalleCompra->setCantidad($CantidadArrayRecibido[$i]);
            $modeloDetalleCompra->setPrecio($PrecioArrayRecibido[$i]);
            $modeloDetalleCompra->setIdCompra($idCompraAgregada[0]['IdCompra']);
            $modeloDetalleCompra->setGuardarDetalleCompra();
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