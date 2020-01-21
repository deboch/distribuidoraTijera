function agregarFila(){
  document.getElementById("mitabla").insertRow(-1).innerHTML = '<td scope= "row"><input class="form-control" type="text" maxlength="6" name="codigo" id="codigo"  onchange="buscar()"></td><td><select class="form-control"><option value="G">G</option><option value="S">S</option><option value="B">B</option><option value="V">V</option></select></td><td><input class="form-control" type="number" min="1"></td><td><input class="form-control" type="text"></td><td><input class="form-control" type="text" placeholder="$"></td><td><input class="form-control" type="text" placeholder="$"></td><td><button type="button" class="btn btn-danger" onclick="eliminarFila()">Eliminar</button></td></tr>';
}
function eliminarFila(){
  var table = document.getElementById("mitabla");
  var rowCount = table.rows.length;
  //console.log(rowCount);
  
  if(rowCount <= 1)
    alert('No se puede eliminar');
  else
    table.deleteRow(rowCount -1);
}
function calcularBonificacion(){
  console.log("entro a la funcion");
  var bonificacion = document.getElementById("bonificacion");
  var descuento = document.getElementById("descuento");
  var total = document.getElementById("total");
  var totalConDescuento = document.getElementById("conDescuento");
  totalConDescuento.value = total.value*(1-(bonificacion.value/100));
  descuento.value = total.value-totalConDescuento.value;

}
function validarSiNumero(elemento){
  var numero= document.getElementById(elemento).value;
  if (!/^([0-9])*$/.test(numero)){
      
      document.getElementById(elemento).value="";
  }              
}

function cargarCliente(){

  document.getElementById("cliente").innerHTML = document.getElementById("cliente").value;
  document.getElementById("telefono").innerHTML = document.getElementById("telefono").value;
  document.getElementById("fecha").innerHTML = document.getElementById("fecha").value;
  document.getElementById("nombreVendedor").innerHTML = document.getElementById("nombreVendedor").value;
  document.getElementById("telefonoVendedor").innerHTML = document.getElementById("telefonoVendedor").value;
  document.getElementById("lugar").innerHTML = document.getElementById("lugar").value; 
  document.getElementById("plazo").innerHTML = document.getElementById("plazo");
  document.getElementById('formaPago').innerHTML = document.getElementById("formaPago");
  document.getElementById('total').innerHTML = document.getElementById("total").value;
  document.getElementById('descuento').innerHTML = document.getElementById("descuento").value; 
  document.getElementById('conDescuento').innerHTML = document.getElementById("conDescuento").value;
  document.getElementById("bonificacion").innerHTML = document.getElementById("bonificacion");
  }

