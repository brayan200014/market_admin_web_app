<?php include_once('../Controladores/controladorProductos.php'); ?>

<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Agregar producto</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorProductos.php" method="POST" novalidate>
        <div class="m-4 position-relative">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control needs-validation" id="nombre" name="nombre" required>
            <!-- Mensajes para validación   -->
            <div class="valid-feedback">
                Campo valido!
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
        </div>
        <div class="m-4 position-relative">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control needs-validation" id="descripcion" name="descripcion">
            <!-- Mensajes para validación   -->
            <div class="valid-feedback">
                Campo valido!
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
        </div>
        <div class="m-4 position-relative">
            <label for="isv" class="form-label">ISV</label>
            <input type="text" class="form-control needs-validation" id="isv" name="isv" required>
            <!-- Mensajes para validación   -->
            <div class="valid-feedback">
                Campo valido!
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
        </div>
        <div class="m-4 position-relative">
            <label for="urlimagen" class="form-label">URL Imagen</label>
            <input type="text" class="form-control needs-validation" id="urlimagen" name="urlimagen">
            <!-- Mensajes para validación   -->
            <div class="valid-feedback">
                Campo valido!
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
        </div>
        <div class="m-4 position-relative">
            <label for="categoria" class="form-label">Categoria</label>
            <select class="form-control needs-validation" id="categoria" name="categoria" required>
                <option selected disabled></option>
                <?php
                    $datosCategorias = listarCategorias();

                    for($i = 0; $i < sizeof($datosCategorias); $i++){
                ?>
                    <option value="<?php echo $datosCategorias[$i]['IdCategoria'] ?>"><?php echo $datosCategorias[$i]['NombreCategoria'] ?></option>
                <?php
                    }
                ?>
            </select>
            <!-- Mensajes para validación   -->
            <div class="valid-feedback">
                Campo valido!
            </div>
            <div class="invalid-feedback">
                Este campo no puede estar vacio.
            </div>
        </div>                  
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="insertarProducto">Guardar</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Vistas/tablaProductos.php">Cancelar</a>
        </div>
    </form>
</div>