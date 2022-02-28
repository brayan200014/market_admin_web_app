var containerFila= document.getElementById("containerFila");


function agregarFila() {
    containerFila.innerHTML+= `<div class=".container-fluid d-flex flex-wrap justify-content-between" >
    <div class="mb-3">
      <label for="IdProducto" class="form-label">ID del Producto</label>
      <input type="text" class="form-control" id="IdProducto" name="Producto[]"  placeholder="Ingrese el id del Producto">
    </div>
    <div class="mb-3">
      <label for="Cantidad" class="form-label">Cantidad</label>
      <input type="text" class="form-control" id="Cantidad" name="Cantidad[]" placeholder="Ingrese la cantidad">
    </div>
    <div class="mb-3">
      <label for="Precio" class="form-label">Precio</label>
      <input type="text" class="form-control" id="Precio" name="Precio[]" placeholder="Ingrese el precio">
    </div>
    </div>`
}

