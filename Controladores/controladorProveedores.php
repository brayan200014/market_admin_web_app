<?php
    //Incluir modelo de Proveedores
    include_once('../Modelos/modeloProveedores.php')
?>

<?php
    //Funcion que devuelve las ventas que hay en la base de datos obtenidas desde el modelo
    function listarVentas(){
        $modeloProveedor = new Proveedor();
        $proveedores = $modeloProveedor->getProveedores();
        return $proveedores;
    }

    function GuardarProveedor(){
        $modeloProveedor = new Proveedor();
        $NombreProveedor = htmlspecialchars($_POST['NombreProveedor']);
        $modeloProveedor->setNombreProveedor($NombreProveedor);
        $Contacto = htmlspecialchars($_POST['Contacto']);
        $modeloProveedor->setContacto($Contacto);
        $Email = htmlspecialchars($_POST['Email']);
        $modeloProveedor->setEmail($Email);
        $modeloProveedor->setGuardarProveedor();
    }

    function validar()
    {
        if(!empty($_POST))
        {
            GuardarProveedor();   
        }
        else
        {
            print_r($_POST);
        }
    }
    
?>