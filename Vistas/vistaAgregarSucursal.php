<?php include_once('../Controladores/controladorSucursales.php') ?>

<div class="p-5">
    <?php if(isset($_GET['value']) && $_GET['value']==1) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro de Sucursales Guardado con exito
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Registro de Sucursales</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorSucursales.php" method="POST" novalidate>
        <div class="m-4 position-relative">
                <label for="nombreS" class="form-label">Nombre de la Sucursal: </label>
                <input type="text" class="form-control" id="nombreS" name="nombreS" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}"  size="20" required>

                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div> 
            <div class="m-4 position-relative">
                <label for="direccionS" class="form-label">Dirección: </label>
                <input type="text" class="form-control" id="direccionS" name="direccionS">
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div> 
            <div class="m-4 position-relative">
            <label for="ciudad" class="form-label" required>Ciudad: </label>
            <select class="form-control" id="ciudad" name="ciudad">
                <option selected>Seleccione la Sucursal</option>
                <?php
                    $datoCiudad = listarCiudades();

                    for($i = 0; $i < sizeof($datoCiudad); $i++){
                ?>
                    <option value="<?php echo $datoCiudad[$i]['IdCiudad'] ?>"><?php echo $datoCiudad[$i]['NombreCiudad'] ?></option>
                <?php
                    }
                ?>
            </select>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>     
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="insertarSucursal">Guardar Sucursal</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Paginas/listarSucursales.php">Cancelar</a>
        </div>
        
    </form>
</div>

