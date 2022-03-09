<?php
    include_once('../Controladores/controladorClientes.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(eliminarCliente($id)){
            header('Location: ../Paginas/paginatablaclientes.php?valueEli=1');
        }
    }

?>