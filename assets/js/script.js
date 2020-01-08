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
