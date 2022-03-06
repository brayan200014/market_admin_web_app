var containerFilaVenta= document.getElementById("containerFilaVenta");
var arrayVentaEnviado= new Array();

function agregarFila() {
    containerFilaVenta.innerHTML+= `<div class=".container-fluid d-flex flex-wrap justify-content-between" >
    <div class="mb-3">
      <label for="IdProducto" class="form-label">ID del Producto</label>
      <input type="text" class="form-control" id="IdProducto" name="Producto[]"  placeholder="Ingrese el id del Producto" required pattern="[0-9]+" >
      <div class="valid-feedback">
            Formato Valido
     </div>
      <div class="invalid-feedback">
           Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
      </div>
    </div>
    <div class="mb-3">
      <label for="Cantidad" class="form-label">Cantidad</label>
      <input type="text" class="form-control" id="Cantidad" name="Cantidad[]" placeholder="Ingrese la cantidad" required pattern="[0-9]+">
      <div class="valid-feedback">
            Formato Valido
     </div>
      <div class="invalid-feedback">
           Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
      </div>
    </div>
    <div class="mb-3">
      <label for="Precio" class="form-label">Precio</label>
      <input type="text" class="form-control" id="Precio" name="Precio[]" placeholder="Ingrese el precio" required pattern="^[0-9]+([.][0-9]+)?$">
      <div class="valid-feedback">
      Formato Valido
</div>
<div class="invalid-feedback">
     Este campo no puede estar vacio y debe tener un formato valido de solo numeros.
</div>
    </div>
    </div>`
}


function getEditarVenta(posicion) {
     alert("HOLA");
}



