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

?>