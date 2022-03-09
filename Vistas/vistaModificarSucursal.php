<?php include_once('../Controladores/controladorSucursales.php'); 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if($id!=null){
            $datos = consultaSucursal($id);
        }
    }
?>

<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Modificar Registro de Sucursales</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorSucursales.php" method="POST" novalidate>
    <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
        <div class="m-4 position-relative">
                <label for="nombreS" class="form-label">Nombre de la Sucursal: </label>
                <input type="text" class="form-control" id="nombreS" name="nombreS" placeholder="Ingrese el nombre de la Sucursal" value="<?php echo $datos[0]['NombreSucursal'] ?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}"  size="50" required>

                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div> 
            <div class="m-4 position-relative">
                <label for="direccionS" class="form-label">Dirección: </label>
                <input type="text" class="form-control" id="direccionS" name="direccionS" placeholder="Ingrese la Dirección" value="<?php echo $datos[0]['Direccion'] ?>">
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div> 
            <div class="m-4 position-relative">
            <label for="ciudad" class="form-label" required>Ciudad: </label>
            <select class="form-control" id="ciudad" name="ciudad">
                <option selected>Seleccione la Ciudad</option>
                <?php
                    $datosCiudad = listarCiudades();

                    for($i = 0; $i < sizeof($datosCiudad); $i++){
                        if($datosCiudad[$i]['IdCiudad'] == $datos[0]['Ciudades_IdCiudad']){
                ?>
                        <option value="<?php echo $datosCiudad[$i]['IdCiudad']; ?>" selected><?php echo $datosCiudad[$i]['NombreCiudad']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $datosCiudad[$i]['IdCiudad']; ?>"><?php echo $datosCiudad[$i]['NombreCiudad']; ?></option>
                <?php
                        }
                    }
                ?>
            </select>
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>     
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="modificarSucursales">Guardar Sucursal</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Paginas/listarSucursales.php">Cancelar</a>
        </div>
        
    </form>
</div>


   