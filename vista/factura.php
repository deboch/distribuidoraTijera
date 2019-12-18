
<!DOCTYPE html>
<html>
<?php
include("../head.php");
?>
<body>

	<div class="container">
		<?php
			include("../header.php");
		?>
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h2>Factura<h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>	
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<label class="form-control">Cliente</label>
						<input class="form-control" type="text" placeholder="Ingrese cliente">
					</div>
					<div class="col-md-4">   
						<label class="form-control">Teléfono</label>
						<input class="form-control" type="text" placeholder="Ingrese teléfono">
					</div>
					<div class="col-md-4">
						<label class="form-control">Fecha</label>
						<input class="form-control" type="date" placeholder="Ingrese fecha">
					</div>
				</div>
						  
			</div> 
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-success float-right" id="add" onclick="agregarFila()">Agregar artículo</button>
			</div>
		</div>
		<table class="table table-striped" id="mitabla">
		  <thead>
			<tr>
			  <th scope="col">Articulo</th>
			  <th scope="col">Tipo</th>
			  <th scope="col">Cantidad</th>
			  <th scope="col">Descripción</th>
			  <th scope="col">Precio Unit.</th>
			  <th scope="col">Total</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td scope="row"><input class="form-control" type="text" maxlength="6"></td>
			  <td>
				  <select class="form-control">
					  <option value="0">G</option>
					  <option value="1">S</option>
					  <option value="2">B</option>
					  <option value="3">V</option>
				  </select>
			  </td>
			  <td>
				<input class="form-control" type="number" min="1">
			  </td>
			  <td>
				<input class="form-control" type="text">
			  </td>
			  <td>
				<input class="form-control" type="text" placeholder="$">
			  </td>
			  <td>
				<input class="form-control" type="text" placeholder="$">
			  </td>
			  <td><a href="" >Eliminar</a></td>
			</tr>
		  </tbody>
		
		<br>
		</table>
		<div>
			<button type="button" class="btn btn-success float-right agregar">Imprimir</button> 
			<button type="button" class="btn btn-success float-right agregar">Descargar</button> 
		</div>
	</div>
</body>
<footer></footer>
<script>


</script>
</html>