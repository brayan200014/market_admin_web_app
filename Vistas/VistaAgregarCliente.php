<?php include_once("../Controladores/controladorClientes.php") ?>
<div class="p-5">
<h1 class="h3 mb-2 text-gray-800">Registro del Cliente</h1>
<form class="g-3 needs-validation" action="../Controladores/controladorClientes.php" method="POST" novalidate>

  <div class="m-4 position-relative">
    <label for="Nombre" class="form-label">Nombre del cliente:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="Apellido" class="form-label">Apellido del cliente:</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="mb-3">
  <label for="Telefono" class="form-label">Telefono</label>
  <input type="text" class="form-control needs-validation" id="Telefono" name="Telefono" placeholder="Ingrese el numero de celular" required pattern="[0-9]+">
  <div class="valid-feedback">
        Formato Valido
 </div>
  <div class="invalid-feedback">
       Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
  </div>
</div>

<div class="m-4 position-relative">
    <label for="Direccion" class="form-label">Dirección del cliente:</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
 </div>

 <div class="m-4 position-relative">
    <label for="Email" class="form-label">Correo:</label>
    <input type="text" class="form-control" id="Email" name="Email" placeholder="Direccion del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="Identidad" class="form-label"># de identidad del cliente:</label>
    <input type="text" class="form-control" id="Identidad" name="Identidad" placeholder="# identidad del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="RTN" class="form-label">RTN del cliente:</label>
    <input type="text" class="form-control" id="RTN" name="RTN" placeholder="RTN del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <button class="btn btn-warning fw-bold float-end mr-3" type="submit" name="agregarCliente">Guardar</button>
            <a class="btn btn-secondary fw-bold float-end" href="">Cancelar</a>
  </form>
</div>