<?php include_once('../Controladores/controladorProductos.php') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Productos</h1>
<p class="mb-4">Aquí prodras ver toda la informacion relacionada con los productos, asi como agregar, editar o eliminar un producto. 
    Para ver el inventario de un producto en cada sucursal solo debes precionar el ojo en la sección de opciones.
    <a href="../Vistas/agregarProducto.php">¡Agrega un nuevo producto!</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoria</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $datosProductos = listarProductos();
                    
                        for($i = 0; $i < sizeof($datosProductos); $i++){
                    ?>
                        <tr>
                            <td><?php echo $datosProductos[$i]['IdProducto'] ?></td>
                            <td><?php echo $datosProductos[$i]['NombreProducto'] ?></td>
                            <td><?php echo $datosProductos[$i]['DescripcionProducto'] ?></td>
                            <td><?php echo $datosProductos[$i]['NombreCategoria'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inventoryModal" data-whatever="2">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a class="btn btn-primary" href="../Vistas/editarProducto.php?id=<?php echo $datosProductos[$i]['IdProducto']?>">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Modal para ver el inventario-->
<div class="modal fade" id="inventoryModal" tabindex="-1" aria-labelledby="inventoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inventoryModalLabel">Inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-subtitle"></h5>
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sucursal:</label>
                        <select class="form-control" id="categoria">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="existencia" class="col-form-label">Existencia:</label>
                        <input type="text" class="form-control" id="existencia">
                    </div>
                    <div class="form-group">
                        <label for="precio" class="col-form-label">Precio:</label>
                        <input type="text" class="form-control" id="precio">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar cambios</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal para ver editar un producto-->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-subtitle"></h5>
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
                                $datosCategorias = listarCategorias();

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
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Guardar cambios</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>