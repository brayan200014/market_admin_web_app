<?php
    //Incluir modelo de Proveedores
    include_once('../Modelos/modeloProveedores.php')
?>

<?php
    //Funcion que devuelve las ventas que hay en la base de datos obtenidas desde el modelo
    function listarProveedores(){
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

    function getDatosProveedoresEditar() {
        if(isset($_GET['id'])){
            $id= $_GET['id']; 
            $proveedorModelo= new Proveedor();
            $datosProveedorEditar= $proveedorModelo-> getDatosProveedoresEditar($id);
            if(!empty($datosProveedorEditar)) {
                return $datosProveedorEditar; 
            }
            else 
            {
                return false;
            }
        
            
        }
    }

    if(isset($_POST['modificarProveedor']))
    {
        $id = $_POST['id'];
        $NombreProveedor = $_POST['id'];
        $Contacto = $_POST['Contacto'];
        $Email = $_POST['Email'];

        if(updateProveedorEnviado($id, $NombreProveedor, $Contacto, $Email))
        {
            echo "
                    <script>
                        window.location = '../Paginas/listadoProveedores.php?value=1'
                    </script>
                 ";
        }
        else
        {
            echo "
                    <script>
                        alert('Error al actualizar el Proveedor');
                    </script>
                 ";
                 
        }
    }




    function updateProveedorEnviado($idProveedorGet, $NombreProveedorGet, $ContactoGet, $EmailGet) {
       
        $modeloProveedor = new Proveedor();
        return $modeloProveedor->updateProveedor($idProveedorGet, $NombreProveedorGet, $ContactoGet, $EmailGet);

    }


    function eliminarProveedor($id){
        $modeloProveedor = new Proveedor();
        return $modeloProveedor->deleteProveedor($id);
    }
    
?>