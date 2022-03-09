<?php include_once("../Controladores/controladorClientes.php") ?>

<?php if(isset($_GET['valueagg']) && $_GET['valueagg']==1) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Cliente Guardado con exito
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

<div class="p-5">
<h1 class="h3 mb-2 text-gray-800">Registro del Cliente</h1>
<form class="g-3 needs-validation" action="../Controladores/controladorClientes.php" method="POST" novalidate>

  <div class="m-4 position-relative">
    <label for="Nombre" class="form-label">Nombre del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Apellido" class="form-label">Apellido del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Apellido" name="Apellido" placeholder="Ingrese el apellido del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Telefono" class="form-label">Teléfono:</label>
    <input type="text" class="form-control needs-validation" id="Telefono" name="Telefono" placeholder="Ingrese el telefono del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>


<div class="m-4 position-relative">
    <label for="Direccion" class="form-label">Dirección del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Direccion" name="Direccion" placeholder="Ingrese la direccion del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
 </div>

 <div class="m-4 position-relative">
    <label for="Email" class="form-label">Correo:</label>
    <input type="text" class="form-control needs-validation" id="Email" name="Email" placeholder="Ingrese el correo del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Identidad" class="form-label">Número de identidad del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Identidad" name="Identidad" placeholder="Ingrese el numero de identidad del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="RTN" class="form-label">RTN del cliente:</label>
    <input type="text" class="form-control needs-validation" id="RTN" name="RTN" placeholder="Ingrese el RTN del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="agregarCliente">Guardar</button>
  <a class="btn btn-secondary fw-bold float-end" href="../Paginas/paginatablaclientes.php">Cancelar</a>
  </form>
</div>