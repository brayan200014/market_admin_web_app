<?php
      include_once('../Modelos/modeloEmpleados.php');
       function listarEmpleados(){
       $modeloEmpleados = new Empleado();
       return $modeloEmpleados->ObtenerEmployees();
   }
?>

<?php
    class controladorEmpleado{
        public function __construct(){
        }

        //FUNCIÓN OBTENER PUESTOS EMPLEADOS
        function ObtenerPuestos(){

            require_once("../Modelos/modeloEmpleados.php");
            $empleado = new Empleado();
            $datos = $empleado -> ObtenerPuestos();
            return $datos;
        }

        //FUNCIÓN OBTENER EMPLEADOS
         function ObtenerEmployees(){

            require_once("../Modelos/modeloEmpleados.php");
            $empleado = new Empleado();
             return $empleado -> ObtenerEmployees();
        }
        
        //FUNCIÓN ELIMINAR EMPLEADOS
        function deleteEmployees($id){
            
            require_once("../Modelos/modeloEmpleados.php");
            $empleado = new Empleado();
            return $empleado -> deleteEmployees($id);
        }

        //FUNCIÓN ACTUALIZAR EMPLEADOS
        function UpdateEmployees($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){
            
            require_once("../Modelos/modeloEmpleados.php");
            $empleado=new Empleado();
            return $empleado-> UpdateEmployees($id, $Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto);
        }

        //GUARDAR EMPLEADOS
        function setEmployees($Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto){
            
            require_once("../Modelos/modeloEmpleados.php");
            $empleado = new Empleado();
            return $empleado -> setEmployees($Nombre, $Apellido, $Telefono, $Direccion, $Email, $FechaContratacion, $Estado, $Sucursales_IdSucursal, $Puestos_IdPuesto);
        }


    }
?>