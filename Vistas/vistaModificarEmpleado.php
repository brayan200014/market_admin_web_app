<?php 
    include_once('../Controladores/controladorEmpleados.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if($id!=null){
            $datos = consultaEmpleado($id);
        }
    }
?>
<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Modificar Registro Empleados</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorEmpleados.php" method="POST" novalidate>
        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
        <div class="m-4 position-relative">
            <label for="nombre" class="form-label">Nombre del empleado: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del empleado" value="<?php echo $datos[0]['Nombre'] ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}"  size="30" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="apellido" class="form-label">Apellido del empleado: </label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido del empleado" value="<?php echo $datos[0]['Apellido'] ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}"  size="30" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="identidad" class="form-label">No.Identidad del empleado: </label>
            <input type="text" class="form-control" id="identidad" name="identidad" placeholder="Ingrese el No. de ID del empleado" value="<?php echo $datos[0]['Identidad'] ?>" pattern="[0-9]{0,13}" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="telefono" class="form-label"> Número de Telefono: </label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el número de telefono ejemplo: 00009999" value="<?php echo $datos[0]['Telefono'] ?>" pattern="[0-9]{8,8}" required>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="direccion" class="form-label"> Direccion: </label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la Dirección" value="<?php echo $datos[0]['Direccion'] ?>">
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="email" class="form-label">Correo Electrónico: </label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese un email válido ejemplo: web@gmail.com" value="<?php echo $datos[0]['Email'] ?>" pattern=".+@gmail\.com" size="15" required>
            <div class="valid-tooltip"></div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="fechaC" class="form-label">Fecha Contratación: </label>
            <input type="date" class="form-control" id="fechaC" name="fechaC" min=2012-10-08 max=2022-03-09 value="<?php echo $datos[0]['FechaContratacion'] ?>" require>
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
                        if($datoSucursal[$i]['IdSucursal'] == $datos[0]['Sucursales_IdSucursal']){
                ?>
                        <option value="<?php echo $datoSucursal[$i]['IdSucursal']; ?>" selected><?php echo $datoSucursal[$i]['NombreSucursal']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $datoSucursal[$i]['IdSucursal']; ?>"><?php echo $datoSucursal[$i]['NombreSucursal']; ?></option>
                <?php
                        }
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
                    $datosPuesto = listarPuestos();

                    for($i = 0; $i < sizeof($datosPuesto); $i++){
                        if($datosPuesto[$i]['IdPuesto'] == $datos[0]['Puestos_IdPuesto']){
                ?>
                        <option value="<?php echo $datosPuesto[$i]['IdPuesto']; ?>" selected><?php echo $datosPuesto[$i]['DescripcionPuesto']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $datosPuesto[$i]['IdPuesto']; ?>"><?php echo $datosPuesto[$i]['DescripcionPuesto']; ?></option>
                <?php
                        }
                    }
                ?>
                </select>
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>  
            <br>
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-2" type="submit" name="modificarEmpleados">Guardar Modificación</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Paginas/listarEmpleados.php">Cancelar</a>
        </div>
