<?php include_once('../Controladores/controladorEmpleados.php') ?>

    <div class="p-5">
        <center><h1 class="h3 m-4 text-gray-800">Modificar Empleados</h1></center>
        <br>
        <form class="g-3 needs-validation" novalidate>
            <div class="m-4 position-relative">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" placeholder="Ingrese el numero de telefono del empleado" required>

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
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" placeholder="Ingrese el estado (0= Innactivo ó 1= Activo)" required>

                <!-- ******** MENSAJE DE VALIDACIÓN********  -->
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>
            <div class="m-4 position-relative">
                <label for="sucursal" class="form-label" required>Sucursal</label>
                <select class="form-control" id="sucursal">
                    <option selected>Seleccione la Sucursal</option>
                    <?php
                        $datoSucursal = listarSucursales();

                        for($i = 0; $i < sizeof($datoSucursal); $i++){
                    ?>
                        <option value="<?php echo $datoSucursal[$i]['IdSucursal'] ?>"><?php echo $datoSucursal[$i]['NombreSucursal'] ?></option>
                    <?php
                        }
                    ?>
                </select>
                <!-- Mensajes para validación   -->
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div> 
            <div class="m-4 position-relative">
                <label for="sucursal" class="form-label" required>Puesto</label>
                <select class="form-control" id="sucursal">
                    <option selected>Seleccione el Puesto</option>
                    <?php
                        $datoPuesto = listarPuestos();

                        for($i = 0; $i < sizeof($datoPuesto); $i++){
                    ?>
                        <option value="<?php echo $datoPuesto[$i]['IdPuesto'] ?>"><?php echo $datoPuesto[$i]['DescripcionPuesto'] ?></option>
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
                <div class="d-flex justify-content-center"><button type="button" id="ModificarEmpleado" onclick="" class="btn btn-outline-primary btn-sm">Guardar Cambios Empleado</button></div>
            </div>
        </form>
    </div>

