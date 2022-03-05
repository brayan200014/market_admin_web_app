<?php include_once("../Controladores/controladorClientes.php") ?>
<div class="p-5">
  <h1 class="h3 mb-2 text-gray-800">Registro del Cliente</h1>
  <form class="needs-validation" novalidate action="" method= "POST" enctype="application/x-www-form-urlencoded" >
  
  <div class="m-4 position-relative">
    <label for="txt1" class="form-label">ID del cliente:</label>
    <input type="text" class="form-control" id="txt1" name="txt1" placeholder="Ingrese el id del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="txt2" class="form-label">Nombre del cliente:</label>
    <input type="text" class="form-control" id="txt2" name="txt2" placeholder="Nombre del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="txt3" class="form-label">Apellido del cliente:</label>
    <input type="text" class="form-control" id="txt3" name="txt3" placeholder="Apellido del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="txt4" class="form-label"># de identidad del cliente:</label>
    <input type="text" class="form-control" id="txt4" name="txt4" placeholder="# identidad del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="txt5" class="form-label">Dirección del cliente:</label>
    <input type="text" class="form-control" id="txt5" name="txt5" placeholder="Direccion del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="txt6" class="form-label">Correo del cliente:</label>
    <input type="text" class="form-control" id="txt6" name="txt6" placeholder="Correo del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>

  <div class="m-4 position-relative">
    <label for="txt7" class="form-label">RTN del cliente:</label>
    <input type="text" class="form-control" id="txt7" name="txt7" placeholder="RTN del cliente" required>
    <!-- Mensajes para validación   -->
    <div class="valid-tooltip">¡Campo válido!</div>
    <div class="invalid-tooltip">Campo no valido.</div>
  </div>



  <div class="row m-4">
      <button class="btn btn-warning fw-bold float-end" type="submit" name="insertarCliente">Guardar</button>
  </div>
  </form>
</div>