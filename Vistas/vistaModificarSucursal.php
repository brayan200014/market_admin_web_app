<?php include_once('../Controladores/controladorSucursales.php') ?>

<div class="p-5">
    <center><h1 class="h3 m-4 text-gray-800">Modificar Sucursales</h1></center>
    <br>
    <form class="g-3 needs-validation" novalidate>
        <div class="m-4 position-relative">
            <label for="nombre" class="form-label">Nombre de la sucursal:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de sucursal" required>

            <!-- ******** MENSAJE DE VALIDACIÓN********  -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="direccion" class="form-label">Dirección</label>
            <textarea name="direccion" class="form-control" id="direccion" placeholder="Ingrese la direccion" required></textarea>

             <!-- ******** MENSAJE DE VALIDACIÓN********  -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="ciudad" class="form-label" required>Ciudad</label>
            <select class="form-control" id="ciudad">
                <option selected>Seleccione la Ciudad</option>
                <?php
                    $datoCiudad = listarCiudades();

                    for($i = 0; $i < sizeof($datoCiudad); $i++){
                ?>
                    <option value="<?php echo $datoCiudad[$i]['IdCiudad'] ?>"><?php echo $datoCiudad[$i]['NombreCiudad'] ?></option>
                <?php
                    }
                ?>
            </select>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div> 
        <br>                 
        <div class="row m-4">
            <div class="d-flex justify-content-center"><button type="button" id="ModificarSucursal" onclick="" class="btn btn-outline-primary btn-sm">Guardar Cambios Sucursal</button></div>
        </div>
    </form>
</div>

   