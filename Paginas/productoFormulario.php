<?php include_once('../Controladores/controladorProductos.php') ?>
<?php include_once('../Plantilla/header.php') ?>
    <div class="p-5">
        <h1 class="h3 m-4 text-gray-800">Agregar producto</h1>
        <form class="g-3 needs-validation" novalidate>
            <div class="m-4 position-relative">
                <label for="nombre" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre" required>
                <!-- Mensajes para validación   -->
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>
            <div class="m-4 position-relative">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" required>
                <!-- Mensajes para validación   -->
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>
            <div class="m-4 position-relative">
                <label for="isv" class="form-label">ISV</label>
                <input type="text" class="form-control" id="isv" required>
                <!-- Mensajes para validación   -->
                <div class="valid-tooltip"></div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>
            <div class="m-4 position-relative">
                <label for="urlimagen" class="form-label">URL Imagen</label>
                <input type="text" class="form-control" id="urlimagen" required>
                <!-- Mensajes para validación   -->
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>
            <div class="m-4 position-relative">
                <label for="categoria" class="form-label" required>Categoria</label>
                <select class="form-control" id="categoria">
                    <option selected>Elija una categoria</option>
                    <?php
                        $datosCategorias = listarCatgeroias();

                        for($i = 0; $i < sizeof($datosCategorias); $i++){
                    ?>
                        <option value="<?php echo $datosCategorias[$i]['IdCategoria'] ?>"><?php echo $datosCategorias[$i]['NombreCategoria'] ?></option>
                    <?php
                        }
                    ?>
                </select>
                <!-- Mensajes para validación   -->
                <div class="valid-tooltip">¡Campo válido!</div>
                <div class="invalid-tooltip">Campo no valido.</div>
            </div>                  
            <div class="row m-4">
                <button class="btn btn-warning fw-bold float-end" type="submit">Guardar</button>
            </div>
        </form>
    </div>

<?php include_once('../Plantilla/footer.php') ?>