
<!DOCTYPE html>
<html>
<?php
include_once("../head.php");
include_once("../controlador/controlador_factura2.php");
$listas = listar_factura();
error_reporting(0);

?>

<body>
	<?php
		include("../header.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6">
				<div class="card">
					<div class="row">
						<div class="col-md-12 ml-2">
							<h4>Agregar art&iacuteculos a factura<h4>
						</div>
					</div>
					<form method="get" action="../controlador/controlador_factura.php">
						<div class="container">
							<div class="row">
								
								<div class="col-md-12">		
										<div class="row">
											<div class="col-md-6">
												<input class="form-control" type="text" placeholder="Ingrese artículo" id="cod_art" name="cod_art" onchange="validarSiNumero(this);">    
											</div>
											<div class="col-md-3">
												<select class="form-control" id="tipo" name="tipo">
													<option value="G">G</option>
													<option value="S">S</option>
													<option value="B">B</option>
													<option value="V">V</option>
												</select>   
											</div>
											<div class="col-md-3">
												<button type="submit" class="btn btn-white btn-raised btn-fab btn-round" onclick="visualizarCampos()"><i class="material-icons">search</i></button>
													
											</div>
										</div> 
								</div>
								
							</div>
							</div>
					</form>
					<form method="POST" action="../controlador/controlador_factura2.php">
							<br>
							<?php
								foreach($articulos as $articulo){
								echo"<div class='container'>
								<div class='row'>
										<div class='col-md-1'>
											<label class='' id='codigo'>Artículo</label><input class='form-control' type='text' name='codigo' value='".$articulo['codigo']."'  >
										</div>
										<div class='col-md-1'>
											<label class='' id='tipo'>Tipo</label><input class='form-control' type='text' name='tipo' value='".$articulo['tipo']."'  >
										</div>
										<div class='col-md-6'>
											<label class='' id='descripcion'>Descripción</label><input class='form-control' name='descripcion' type='text' value='".$articulo['descripcion']."' >
										</div>
										<div class='col-md-1'>
											<label class='' id='precio' >Precio</label><input class='form-control' type='text' name='precio' value='".$articulo['precio']."' >	
										</div>
										<div class='col-md-1'>
											<label class='' id='cantidad' >Cantidad</label><input class='form-control' type='text' name='cantidad' value='1' >	
										</div>
										<div class='col-md-2'>
											<br>
											<button type='submit' class='btn btn-primary btn-fab btn-round'><i class='material-icons'>add</i></button>
										</div>
								</div></div>";
								}?>

								
						</div>
					</form>
				</div>
			</div>
			
			
		</div>
	</div>
	<div class="container">
		
		<br>
		
				<table class="table table-striped" id="mitabla">
				<thead>
					<tr>
					<th scope="col">Art&iacuteculo</th>
					<th scope="col">Tipo</th>
					<th scope="col">Cantidad</th>
					<th scope="col">Descripci&oacuten</th>
					<th scope="col">Precio Unit.</th>
					<th scope="col">Total</th>
					<th scope="col"></th>
					</tr>
				</thead>
				<form class="form-horizontal" role="form" id="datos_factura" method="post" action="">
					<tbody>
						<?php
						foreach($listas as $lista){
							echo "<tr>
								 <td>".$lista['codigo']."</td>                             
								 <td>".$lista['tipo']."</td>
								 <td>".$lista['cantidad']."</td>
								 <td>".$lista['descripcion']."</td>
								 <td>".$lista['precio']."</td>
								 <td>".$lista['total']."</td>  
								 <td><a href='../controlador/controlador_factura2.php?accion=".$lista['id']."&tipo=".$lista['tipo']."' class='btn btn-primary btn-raised btn-fab btn-round' data-toggle='dropdown'><i class='material-icons'>delete</i></a></td>                         
							 </tr>";
							 $total = $lista['total'] + $total;
						}
						?>
					</tbody>
				
				<br></form>
				
				</table>
					<?php
					 echo "<div class='row'>
								<div class='col-md-1 offset-9'>	 
									 <label class='' id='precio' >Total</label>
								</div>
								<div class='col-md-2'>
									 <input class='form-control' type='text' name='precio' value='".$total."' readOnly>
								</div>
								</div>";
						
					?>	
				<br><br><br>
				<div>
				<a href="../vista/imprimirFactura.php" class="btn btn-primary  btn-raised btn-fab btn-round float-right" tittle="Siguiente"><i class="material-icons">forward</i></a>
				<a href="../home.php" class="btn btn-danger btn-raised btn-fab btn-round float-right" tittle="cancelar"><i class="material-icons">clear</i></a>	
				</div>
		
	</div>
</body>
<footer></footer>
</html>