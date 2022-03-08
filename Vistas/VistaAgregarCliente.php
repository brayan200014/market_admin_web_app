<?php include_once("../Controladores/controladorClientes.php") ?>
<div class="p-5">
<h1 class="h3 mb-2 text-gray-800">Registro del Cliente</h1>
<form class="g-3 needs-validation" action="../Controladores/controladorClientes.php" method="POST" novalidate>

  <div class="m-4 position-relative">
    <label for="Nombre" class="form-label">Nombre del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Nombre" name="Nombre" placeholder="Nombre del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Apellido" class="form-label">Apellido del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Apellido" name="Apellido" placeholder="Apellido del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Telefono" class="form-label">Telefono:</label>
    <input type="text" class="form-control needs-validation" id="Telefono" name="Telefono" placeholder="Telefono del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>


<div class="m-4 position-relative">
    <label for="Direccion" class="form-label">Dirección del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Direccion" name="Direccion" placeholder="Direccion del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
 </div>

 <div class="m-4 position-relative">
    <label for="Email" class="form-label">Correo:</label>
    <input type="text" class="form-control needs-validation" id="Email" name="Email" placeholder="Direccion del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Identidad" class="form-label"># de identidad del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Identidad" name="Identidad" placeholder="# identidad del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="RTN" class="form-label">RTN del cliente:</label>
    <input type="text" class="form-control needs-validation" id="RTN" name="RTN" placeholder="RTN del cliente" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="agregarCliente">Guardar</button>
  <a class="btn btn-secondary fw-bold float-end" href="../Paginas/tablaclientes.php">Cancelar</a>
  </form>
</div>