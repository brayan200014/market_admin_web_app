<?php
    include_once('../Controladores/controladorClientes.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if($id!=null){
            $datos = consultarCliente($id);
        }
    }
?>

<div class="p-5">
<h1 class="h3 mb-2 text-gray-800">Modificar Cliente</h1>
<form class="g-3 needs-validation" action="../Controladores/controladorClientes.php" method="POST" novalidate>

    <input type="hidden" id="IdCliente" name="IdCliente" value="<?php echo $id ?>">

    <div class="m-4 position-relative">
    <label for="Nombre" class="form-label">Nombre del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Nombre" name="Nombre" value="<?php echo $datos[0]['Nombre']?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Apellido" class="form-label">Apellido del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Apellido" name="Apellido" value="<?php echo $datos[0]['Apellido'] ?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Telefono" class="form-label">Teléfono:</label>
    <input type="text" class="form-control needs-validation" id="Telefono" name="Telefono" value="<?php echo $datos[0]['Telefono'] ?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>


<div class="m-4 position-relative">
    <label for="Direccion" class="form-label">Dirección del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Direccion" name="Direccion" value="<?php echo $datos[0]['Direccion'] ?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
 </div>

 <div class="m-4 position-relative">
    <label for="Email" class="form-label">Correo:</label>
    <input type="text" class="form-control needs-validation" id="Email" name="Email" value="<?php echo $datos[0]['Email'] ?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="Identidad" class="form-label">Número de identidad del cliente:</label>
    <input type="text" class="form-control needs-validation" id="Identidad" name="Identidad" value="<?php echo $datos[0]['Identidad'] ?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>

  <div class="m-4 position-relative">
    <label for="RTN" class="form-label">RTN del cliente:</label>
    <input type="text" class="form-control needs-validation" id="RTN" name="RTN" value="<?php echo $datos[0]['RTN'] ?>" required>
    <div class="valid-feedback">
        Formato Valido
    </div>
    <div class="invalid-feedback">
        Este campo no puede estar vacio.
    </div>
  </div>


    <div class="row m-4">
            <button class="btn btn-warning fw-bold float-end mr-2" type="submit" name="modificarCliente">Guardar</button>
            <a class="btn btn-secondary fw-bold float-end" href="../Paginas/paginatablaclientes.php">Cancelar</a>
    </div>

    </form>
</div>