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

/*function getVentaEditar(venta) {
  const data= new FormData();
  data.append('IdVenta', '1');
  fetch('./actualizarVenta.php', {
    method: 'POST',
    body: data
 }).then(function(response) {
      if(response.ok) {
        return response.text()
    } else {
        throw "Error en la llamada Ajax";
    }
 }).catch((error) => {
   console.log(error);
 })

 window.location.href= "./actualizarVenta.php"
  
}



function getValoresVentas() {

  
 
    alert(arrayVentaEnviado);
      
    let venta= new Array(); 
    venta= arrayVentaEnviado; 
    let IdCliente= document.getElementById('IdCliente');
    let IdSucursal= document.getElementById('IdSucursal');
    let IdUsuario= document.getElementById('IdUsuario');
    let ISV= document.getElementById('ISV');

    IdCliente.value= venta['IdCliente'];
    IdSucursal.value= venta['IdSucursal'];
    IdUsuario.value= venta['IdUsuario'];
    ISV.value= venta['ISV'];
  
}*/


