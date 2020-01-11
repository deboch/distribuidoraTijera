
<!DOCTYPE html>
<html>
<?php
include_once("../head.php");
include_once("../controlador/controlador_factura2.php");
$listas = listar_factura();
error_reporting(0);

?>
<!-- <script type="text/javascript">
	/* function buscar(){
		var tipo_art=document.getElementById('tipo_art').value;
		var codigo=document.getElementById('codigo').value;
		window.location.href = 'http://localhost:8080/distribuidora/vista/factura.php?codigo='+codigo;
	} */
	function duplicar(){

document.getElementById("cliente2").value = document.getElementById("cliente").value;
document.getElementById("telefono2").value = document.getElementById("telefono").value;
document.getElementById("fecha2").value = document.getElementById("fecha").value;

}
</script> -->

<body>

	<div class="container">
		<?php
			include("../header.php");
		?>
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h2>Agregar articulos a factura<h2>
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
				<div class="separador"></div>
			</div>
		</div>
		<br>
		<form method="get" action="../controlador/controlador_factura.php">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">		
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="text" placeholder="Ingrese artículo" id="cod_art" name="cod_art">    
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
								<button class="btn btn-primary" type="submit" onclick="visualizarCampos()">Buscar</button>
								</div>
							</div> 
					</div>
					<div class="col-md-4">
					</div>
				</div>
		</form>
		<form method="POST" action="../controlador/controlador_factura2.php">
				<br>
				<?php
                    foreach($articulos as $articulo){
					echo" <div class='row'>
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
							<button type='submit' class='btn btn-info' style='margin-top: 8px'>Agregar</button>
						</div>
					</div>";
					}

					?>
			</div>
		</form>
		
		<br>
		
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
				<form class="form-horizontal" role="form" id="datos_factura" method="post" action="">
					<tbody>
						<?php
						foreach($listas as $lista){
							echo "<tr>
								 <td>".$lista['id']."</td>                             
								 <td>".$lista['tipo']."</td>
								 <td>".$lista['cantidad']."</td>
								 <td>".$lista['descripcion']."</td>
								 <td>".$lista['precio']."</td>
								 <td>".$lista['total']."</td>  
								 <td><a href='../controlador/controlador_factura2.php?accion=".$lista['id']."'>Eliminar</a></td>                         
							 </tr>";
							 $total = $lista['total'] + $total;
						}
						?>
					</tbody>
				
				<br></form>
				
				</table>
					<?php
					 echo "<label class='' id='precio' >Total</label><input class='form-control' type='text' name='precio' value='".$total."' readOnly>";
						
					?>	
				<br><br><br><br><br><br>
				<div>
				
					<button class="btn btn-success float-right agregar" type="submit"><a href="../vista/imprimirFactura.php">Siguiente</a></button>
				
				</div>
		
	</div>
</body>
<footer></footer>
<!-- <script>
    function crearPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#aImprimir')[0];
        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 0,
            left:10,
            width: 10
        };
        pdf.fromHTML(
            source,
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width,
                'elementHandlers': specialElementHandlers
            },
            function (dispose) {
                pdf.save('facturaDistribuidoraT.pdf');
            }, margins
        );
    }
</script> -->
	

</html>