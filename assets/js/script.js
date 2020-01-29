
//////////////////////////////////////
function calcularBonificacion(){
  
  console.log("entro a la funcion");
  debugger;
  var bonificacion = document.getElementById("bonificacion");
  var descuento = document.getElementById("descuento");
  var total = document.getElementById("total");
  var totalConDescuento = document.getElementById("conDescuento");
  totalConDescuento.value = (total.value*(1-(bonificacion.value/100))).toFixed(2);
  descuento.value = (total.value-totalConDescuento.value).toFixed(2);
}
function validarSiNumero(elemento){
  var numero= elemento.value;
  if (!/^([0-9])*$/.test(numero)){
      
      elemento.value="";
  }            
}
////////////////////////////////////////

function cargarCliente(){

  document.getElementById("cliente").innerHTML = document.getElementById("cliente").value;
  document.getElementById("telefono").innerHTML = document.getElementById("telefono").value;
  document.getElementById("fecha").innerHTML = document.getElementById("fecha").value;
  document.getElementById("nombreVendedor").innerHTML = document.getElementById("nombreVendedor").value;
  document.getElementById("telefonoVendedor").innerHTML = document.getElementById("telefonoVendedor").value;
  document.getElementById("lugar").innerHTML = document.getElementById("lugar").value; 
  document.getElementById("plazo").innerHTML = document.getElementById("plazo").value;
  // document.getElementById('formaPago').innerHTML = document.getElementById("formaPago").value;
  document.getElementById('total').innerHTML = document.getElementById("total").value;
  document.getElementById('descuento').innerHTML = document.getElementById("descuento").value; 
  document.getElementById('conDescuento').innerHTML = document.getElementById("conDescuento").value;
  document.getElementById("bonificacion").innerHTML = document.getElementById("bonificacion").value;
  }
  
//////////////////////////////////////////////////////

var era;
var previo=null;
function uncheckRadio(rbutton){
if(previo &&previo!=rbutton){previo.era=false;}
if(rbutton.checked==true && rbutton.era==true){rbutton.checked=false;}
rbutton.era=rbutton.checked;
previo=rbutton;
}

/////////////////////////////////
function validarPorcentaje(campo){
  debugger;

  var valor= campo.value;
  
  if(!/^(0|[1-9]\d*)(\.\d+)?$/.test(valor)){
      campo.value="";
  }
}
  
  
  
function addPorcent(){
  document.getElementById("porcentajeMaterial").value+="%";
}
/////////////////////////
$(document).ready(function(){
  console.log('jQuery esta trabajando');
  $('#search').keyup(function(e){
      if($('#search').val()){
          let search = $('#search').val();
          $.ajax({
          url: '../controlador/controlador_articulos.php',
          type: 'POST',
          data: {search},
          success: function(response){
              let tasks = JSON.parse(response);   
              let template = ''; 
              tasks.forEach(task => {
                  template += '<li>${task.codigo}</li>';
                  // console.log(task);
              });
              $('#containers').html(template)
          }
          })
      }
  })
});