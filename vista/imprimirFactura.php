<!DOCTYPE html>
<html>
<?php
include_once("../head.php");
?>
<script type="text/javascript">
	
	function cargarCliente(){

document.getElementById("cliente").innerHTML = document.getElementById("cliente").value;
document.getElementById("telefono").innerHTML = document.getElementById("telefono").value;
document.getElementById("fecha").innerHTML = document.getElementById("fecha").value;
	
}
function calcularBonificacion(elemento){
	var bonificacion = elemento.value;
	var conDescuento = document.getElementById("conDescuento").value;
	conDescuento = conDescuento*(bonificacion/100);
	
	}
</script>
<body>

	<div class="container" id="aImprimir">
		<div class="row">
			<div class="col-md-6 tituloFactura">
				<br>
				<h1>Repuesto del automotor</h1>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-5">
				<h3>Presupuesto<h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>
        
		<div class="row" >
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						<label class="">Vendedor:</label>	
					</div>
					<div class="col-md-4">   
						<input class="form-control" type="text" placeholder="Ingrese cliente" id="nombreVendedor" onChange="cargarCliente()" value="Alberto Tijera">
					</div>
					<div class="col-md-2">
						<label class="">Cliente:</label>	
					</div>
					<div class="col-md-4">   
						<input class="form-control" type="text" placeholder="Ingrese cliente" id="cliente" onChange="cargarCliente()">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<label class="">Teléfono:</label>
					</div>
					<div class="col-md-4">   
						<input class="form-control" type="text" id="telefonoVendedor" onChange="cargarCliente()" value="(+54-11)4487-2174">
					</div>
					<div class="col-md-2">
						<label class="">Teléfono:</label>
					</div>
					<div class="col-md-4">   
						<input class="form-control" type="text" placeholder="Ingrese teléfono" id="telefono" onChange="cargarCliente()">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<label class="">Ciudad:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control" type="text" id="lugar"  onChange="cargarCliente()" value="Buenos Aires">
					</div>
					<div class="col-md-2">
						<label class="">Fecha:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control" type="date" placeholder="Ingrese fecha" id="fecha"  onChange="cargarCliente()">
					</div>
				</div>
						  
			</div> 
		</div>
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
					<!-- <th scope="col"></th> -->
					</tr>
				</thead>
				<form class="form-horizontal" role="form" id="datos_factura" method="post" action="">
					<tbody>
						<?php
                            require_once("../conexion.php");
                            $conn = getConexion();
                            $sql2 = "SELECT DISTINCT id, tipo, descripcion, precio, cantidad from tmp";
                            $result = mysqli_query($conn, $sql2);
                            $listas=Array();
                            
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $lista=Array();
                                    $lista['suma_total']=0;
                                    $lista['id'] = $row['id'];
                                    $lista['tipo']= $row['tipo'];
                                    $lista['descripcion'] = $row['descripcion'];
                                    $lista['precio'] = $row['precio'];
                                    $lista['cantidad'] = $row['cantidad'];
                                    $lista['total'] = $row['cantidad']*$row['precio'];
                                    $lista['suma_total'] = $lista['suma_total'] + $lista['total'];
                                    $listas[]=$lista;
                                }
                            } else {
                                $listas=[];
                            }
                            $total=0;
                            foreach($listas as $lista){
                                echo "<tr>
                                    <td>".$lista['id']."</td>                             
                                    <td>".$lista['tipo']."</td>
                                    <td>".$lista['cantidad']."</td>
                                    <td>".$lista['descripcion']."</td>
                                    <td>".$lista['precio']."</td>
                                    <td>".$lista['total']."</td>                          
                                </tr>";
                                $total = $lista['total'] + $total;
                            }
						?>
					</tbody>
				
				<br>
				
				</table>
				<div class="row">
					<div class="col-md-12">
						<div class="separador"></div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-8">
					<h4>Observaciones:</h4>
					<h5>Bonificacion Global (%)</h5>
					<input type="text" name="bonificacion" id="bonificacion" value="" onchange="calcularBonificacion('bonificaciion');">
				</div>
				<div class="col-md-4">
					
					<?php
						echo "<div class='row'>
									<div class='col-md-8' >
										<h4 style='float:right;'>SubTotal: $</h4>
									</div>
									<div class='col-md-4'>	
										<h4>".$total."</h4><input class='form-control' type='text' name='total' id='total' value= '".$total."' hidden='hidden'>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-8'>
										<h4 style='float:right;'>Total Bonificado: $</h4>
									</div>
									<div class='col-md-4'>
										<input class='form-control' type='text' name='conDescuento' id='conDescuento'>	
									</div>
								</div>"	;
					?>	

				</div>
				</div>
					<br><br>
					<div class="row">
						<div class="col-md-12">
						<div class="separador"></div>
						</div>
					</div>
					<br>
				<div class="FormaDePago">
					<div class="row">
						<h5>Forma de pago: Cheque pago diferido 7 días fecha factura.
						Transcurrido dicho plazo, se ajustará de acuerdo al valor del dólar estaunidense, tipo
						vendedor Banco Nación del día anterior al del efectivo pago.-</h5>
					</div>
					<br>
					<div class="row">
					<div class="col-md-3">
						<h5>Forma de pago :</h5> 
					</div>
					<div class="col-md-3">
						<select class="form-control" name="formaDePago">
								<option value="">Efectivo</option>
								<option value="">Cheque</option>
								<option value="">Tarjeta de crédito</option>
								<option value="">Tarjeta de débito</option>
						</select>
					</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h5>Plazo de entrega:</h5>
						</div>
						<div class="col-md-3">
							<input class="form-control" type="number" min="0">
						</div>
					</div>
					
				<br><br><br><br><br><br>
                <button class="btn btn-success float-right agregar"><a href="javascript:crearPdf()" style="color:white!important">Descargar</a></button>
                </form>
    </div>            
        </body>
<script>
    function crearPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        //source = $('#aImprimir')[0];
        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            
        };
        pdf.fromHTML(
            aImprimir,
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width,
                'elementHandlers': specialElementHandlers
            },
            function (dispose) {
                pdf.save('factura.pdf');
            }, margins
        );
    }
</script>

</html>