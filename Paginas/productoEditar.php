<?php 
    include_once('../Controladores/controladorProductos.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if($id!=null){
            $datos = consultarProducto($id);
        }
    }
?>
<div class="p-5">
    <h1 class="h3 m-4 text-gray-800">Editar producto</h1>
    <form class="g-3 needs-validation" action="../Controladores/controladorProductos.php" method="POST" novalidate>
        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
        <div class="m-4 position-relative">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos[0]['NombreProducto'] ?>" required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $datos[0]['DescripcionProducto'] ?>" required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="isv" class="form-label">ISV</label>
            <input type="text" class="form-control" id="isv" name="isv" value="<?php echo $datos[0]['ISV'] ?>" required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip"></div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="urlimagen" class="form-label">URL Imagen</label>
            <input type="text" class="form-control" id="urlimagen" name="urlimagen" value="<?php echo $datos[0]['Imagen'] ?>" required>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>
        <div class="m-4 position-relative">
            <label for="categoria" class="form-label" required>Categoria</label>
            <select class="form-control" id="categoria" name="categoria">
                <option>Elija una categoria</option>
                <?php
                    $datosCategorias = listarCategorias();

                    for($i = 0; $i < sizeof($datosCategorias); $i++){
                        if($datosCategorias[$i]['IdCategoria'] == $datos[0]['Categorias_IdCategoria']){
                ?>
                        <option value="<?php echo $datosCategorias[$i]['IdCategoria']; ?>" selected><?php echo $datosCategorias[$i]['NombreCategoria']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $datosCategorias[$i]['IdCategoria']; ?>"><?php echo $datosCategorias[$i]['NombreCategoria']; ?></option>
                <?php
                        }
                    }
                ?>
            </select>
            <!-- Mensajes para validación   -->
            <div class="valid-tooltip">¡Campo válido!</div>
            <div class="invalid-tooltip">Campo no valido.</div>
        </div>                  
        <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-2" type="submit" name="modificarProducto">Guardar</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Vistas/tablaProductos.php">Cancelar</a>
        </div>
    </form>
</div>