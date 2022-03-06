<?php

    include_once('../Modelos/modeloUsuario.php');

    function iniciarSesion($usuario, $clave){
        $modeloUsuario = new Usuario();
        return $modeloUsuario->verificarUsuario($usuario, $clave);
    }

    function consultarUsuario($id){
        $modeloUsuario = new Usuario();
        return $modeloUsuario->buscarUsuario($id);
    }

    function cambiarContrasena($id, $clave){
        $modeloUsuario = new Usuario();
        return $modeloUsuario->modificarUsuario($id, $clave);
    }

    if (isset($_POST['modificarUsuario'])) {
        $id = $_GET['id'];
        $clave = $_POST['clave'];

        if(cambiarContrasena($id, $clave)){
            
        }
        
    }

?>