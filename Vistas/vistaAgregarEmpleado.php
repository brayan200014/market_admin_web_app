<?php include_once('../Controladores/controladorEmpleados.php'); ?>

<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Registro Empleados</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorEmpleados.php" method="POST" novalidate>
        <div class="m-4 position-relative">
            <label for="nombre" class="form-label">Nombre del empleado: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="apellido" class="form-label">Apellido del empleado: </label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="identidad" class="form-label">No.Identidad del empleado: </label>
            <input type="text" class="form-control" id="identidad" name="identidad" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="telefono" class="form-label"> Número de Telefono: </label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="direccion" class="form-label"> Direccion: </label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="email" class="form-label">Correo Electrónico: </label>
            <input type="text" class="form-control" id="email" name="email" required>
            <div class="valid-tooltip"></div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="fechaC" class="form-label">Fecha Contratación: </label>
            <input type="date" class="form-control" id="fechaC" name="fechaC" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="sucursal" class="form-label" required>Sucursal: </label>
            <select class="form-control" id="sucursal" name="sucursal">
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
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>  
        <div class="m-4 position-relative">
                <label for="puesto" class="form-label" required>Puesto</label>
                <select class="form-control" id="puesto" name="puesto">
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
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>                
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="insertarEmpleado">Guardar</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Paginas/listarEmpleados.php">Cancelar</a>
        </div>
    </form>
</div>

