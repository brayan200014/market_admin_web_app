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

    function modificarUsuario($id, $clave, $correo){
        $modeloUsuario = new Usuario();
        return $modeloUsuario->modificarUsuario($id, $clave, $correo);
    }

    if (isset($_POST['modificarUsuario'])) {
        $id = $_POST['id'];
        $clave = $_POST['clave'];
        $correo = $_POST['correo'];

        if(modificarUsuario($id, $clave, $correo)){
            echo "<script>
                    window.location= '../Paginas/editarUsuario.php?id=$id&value=1';
                </script>";
        }
        else{
            echo "<script>
                    alert('Error al moficar el usuario');
                    window.location= '../Paginas/editarUsuario.php?id=$id';
                </script>";
        }
        
    }

?>