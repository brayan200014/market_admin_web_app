<?php

    include_once('../Modelos/modeloUsuario.php');

    function iniciarSesion($usuario, $clave){
        $modeloUsuario = new Usuario();
        return $modeloUsuario->verificarUsuario($usuario, $clave);
    }

?>