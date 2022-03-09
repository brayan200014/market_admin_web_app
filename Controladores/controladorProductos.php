<?php
    include_once('../Modelos/modeloProductos.php');
    
    function listarProductos(){
        $modeloProducto = new Producto();
        return $modeloProducto->getProductos();
    }

    function listarInventario($id){
        $modeloProducto = new Producto();
        return $modeloProducto->serchInventario($id);
    }

    function listarCategorias(){
        $modeloProducto = new Producto();
        return $modeloProducto->getCategorias();
    }

    function agregarProducto($nombre, $descripcion, $isv, $img, $estado, $categoriaId){
        $modeloProducto = new Producto();
        return $modeloProducto->setProductos($nombre, $descripcion, $isv, $img, $estado, $categoriaId);
    }

    function modificarProducto($id, $nombre, $descripcion, $isv, $img, $estado, $categoriaId){
        $modeloProducto = new Producto();
        return $modeloProducto->updateProducts($id, $nombre, $descripcion, $isv, $img, $estado, $categoriaId);
    }

    function consultarProducto($id){
        $modeloProducto = new Producto();
        return $modeloProducto->serchProducto($id);
    }

    function deshabilitarProducto($id){
        $modeloProducto = new Producto();
        return $modeloProducto->deleteProducto($id);
    }

    //Recibe la petición de insertar un nuevo producto
    if (isset($_POST['insertarProducto'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $isv = $_POST['isv'];
        $img = $_POST['urlimagen'];
        $categoriaId = $_POST['categoria'];
    
        if(agregarProducto($nombre, $descripcion, $isv, $img, true , $categoriaId)){
            echo "<script>
                    alert('Producto ingresado con exito');
                    window.location= '../Paginas/productoFormulario.php'
                </script>";
        }
        else{
            echo "<script>
                    alert('Error al ingresar el producto');
                </script>";
        }
    }

    //Recibe la petición de modificar un producto
    if (isset($_POST['modificarProducto'])) {
        $id = $_POST['id'];
        $nombre= $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $isv = $_POST['isv'];
        $img = $_POST['urlimagen'];
        $categoriaId = $_POST['categoria'];
      
        if(modificarProducto($id, $nombre, $descripcion, $isv, $img, true , $categoriaId)){
            echo "<script>
                    alert('Producto modificado con exito');
                    window.location= '../Paginas/productoTabla.php'
                </script>";
        }
        else{
            echo "<script>
                    alert('Error al modificar el producto');
                </script>";
        }
    }
?>