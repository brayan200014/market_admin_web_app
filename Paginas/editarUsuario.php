<?php 
    include_once('../Controladores/controladorUsuario.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if($id!=null){
            $datos = consultarUsuario($id);
        }
    }
?>
<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Usuario</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorUsuario.php" method="POST" novalidate>
        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
        <div class="m-4 position-relative">
            <label for="nombre" class="form-label">Nombre usuario</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos[0]['NombreUsuario'] ?>" disabled required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $datos[0]['Correo'] ?>" required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="clave" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="clave" name="clave" value="<?php echo $datos[0]['Contrasena'] ?>" required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip"></div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="idEmpleado" class="form-label">Codigo de empleado</label>
            <input type="text" class="form-control" id="idEmpleado" name="idEmpleado" value="<?php echo $datos[0]['Empleados_IdEmpleado'] ?>" disabled required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip"></div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div> 
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-2" type="submit" name="modificarUsuario">Guardar cambios</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Vistas/prueba.php">Regresar</a>
        </div>
    </form>
</div>