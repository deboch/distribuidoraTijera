<!DOCTYPE html>
<html>

<?php
include_once("../head.php");
?>
<body>
<div class="section">
<div class="row">
			<div class="col-md-6 offset-2">
				<div class="tim-typo">
					<h2 class="title">Repuesto del automotor</h2>
				</div>
			</div>
		</div>
	
	<div class="container tim-container"  id="aImprimir">
		<div class="row">
			<div class="col-md-4 offset-4">
				<div class="tim-typo">
				<h3 class="title">Presupuesto</h3>
				</div>
				<!-- <h3>Presupuesto<h3> -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>
        
		<div class="row" style="font-size: 12px;" >
			<div class="col-md-12">
				<div class="row" >
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
						<input class="form-control" type="text" id="telefonoVendedor" onChange="cargarCliente(),validarSiNumero(this);" value="(+54-11)4487-2174">
					</div>
					<div class="col-md-2">
						<label class="">Teléfono:</label>
					</div>
					<div class="col-md-4">   
						<input class="form-control" type="text" placeholder="Ingrese teléfono" id="telefono" onChange="cargarCliente(),validarSiNumero(this);">
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
        <table class="table table-striped" id="mitabla" style="font-size: 12px;">
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
							// $sql2 = "SELECT DISTINCT codigo, tipo, descripcion, precio, cantidad from tmp";
							$sql2 = "SELECT codigo, tipo, descripcion, precio, sum(cantidad) as cantidad from tmp GROUP BY codigo, tipo ";
                            $result = mysqli_query($conn, $sql2);
                            $listas=Array();
                            
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $lista=Array();
                                    $lista['suma_total']=0;
                                    $lista['codigo'] = $row['codigo'];
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
                                    <td>".$lista['codigo']."</td>                             
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
			
				<br>
				<div class="row" style="font-size: 12px;">
				<div class="col-md-8">
					<label>Observaciones:</label>
					<label>Bonificacion Global (%)</label>
					<input type="text" name="bonificacion" id="bonificacion" value="" onchange="calcularBonificacion('bonificacion');">
				</div>
				<div class="col-md-4" style="font-size: 12px;">
					
					<?php
						echo "<div class='form-group bmd-form-group'>
									<div class='input-group' >
										<div class='input-group-prepend'>
											<span class='input-group-text'>
												<label>SubTotal: $</label>
											</span>
										</div>
										<label>".$total."</label>
										<input class='form-control' type='text' name='total' id='total' value= '".$total."' hidden='hidden'>
									</div>
								</div>


								<div class='form-group bmd-form-group'>
								<div class='input-group'>
									<div class='input-group-prepend'>
										<span class='input-group-text'>
											<label>Descuento: $</label>
										</span>
									</div>
									<input type='text' class='form-control' name='descuento' id='descuento'>
								</div>
								</div>
								<div class='form-group bmd-form-group'>
								<div class='input-group'>
									<div class='input-group-prepend'>
										<span class='input-group-text'>
										<label>Total Bonificado: $</label>
										</span>
									</div>
									<input type='text' class='form-control' name='conDescuento' id='conDescuento'>
								</div>
								</div>"	;
					?>	
				</form>
				</div>
				</div>
					
				<div class="FormaDePago">
					<div class="row" style="font-size: 12px;"> 
                              
					<div class="col-lg-12 col-md-4 col-sm-6">
						<div class="title">
							<h4>Forma de pago</h4>
							<p>*Cheque pago diferido 7 días fecha factura.
						Transcurrido dicho plazo, se ajustará de acuerdo al valor del dólar estaunidense, tipo
						vendedor Banco Nación del día anterior al del efectivo pago.-</p>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" onclick="uncheckRadio(this);">EFECTIVO
							<span class="circle">
								<span class="check"></span>
							</span>
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" onclick="uncheckRadio(this);"> CHEQUE
							<span class="circle">
								<span class="check"></span>
							</span>
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios11" value="option3" onclick="uncheckRadio(this);" > TARJETA DE CR&EacuteDITO
							<span class="circle">
								<span class="check"></span>
							</span>
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
							<input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios21" value="option4" onclick="uncheckRadio(this);" > TARJETA DE D&EacuteBITO
							<span class="circle">
								<span class="check"></span>
							</span>
							</label>
						</div>
            	</div> 
      
                       
					</div>
					
					<!-- <div class="row" style="font-size: 12px;">
						<div class="col-md-3">
							<label>Plazo de entrega:</label>
						</div>
						<div class="col-md-3">
							<input class="form-control" type="number" min="0" id="plazo">
						</div>
					</div> -->
					
				<br><br><br><br><br><br>
				<!-- <input class="btn btn-info float-right agregar pdf" type="button" name="imprimir" value="Imprimir" onclick="imprimir();">
                 -->
				<button class="btn btn-primary btn-round float-right" name="imprimir" value="Imprimir" onclick="imprimir();">
                	<i class="material-icons">print</i> Imprimir
              	</button>
			    <button class="btn btn-danger btn-round float-right pdf" type="button" onclick="confirmarCancelacion()">
                	<i class="material-icons">reply</i> Volver
                </button>
			  
    <!-- </div>
	<button class="btn btn-danger float-right agregar pdf"><a onclick='confirmarCancelacion()' style="color:white!important">Cancelar</a></button>            
       </div>  -->
	   </body>
<script>
function imprimir(){
        var iconos = document.getElementsByClassName("pdf");
        longitud = iconos.length;

        for (i=0;i<longitud;i++){
            iconos[i].style.display="none";
        }
        window.print();

}



$(document).ready(function(){

$('#crearPdf').click(function(){
									$('#hidden_html').val($('#aImprimir').html());
									$('#make_pdf').submit();
								});
});

    function crearPdf() {
        var pdf = new jsPDF('p', 'pt', 'A4');
        source = $('#aImprimir')[0];
        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
		pdf.setFontType("normal");
		pdf.setFontSize(11);
        margins = {
            top: 48,
            bottom: 24,
            left: 36,
            width:'100%',
			height: '100%',
			right: 12
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
	function getPDF(){
        console.log("inicio");
        var HTML_Width = $("#aImprimir").width();
        var HTML_Height = $("#aImprimir").height();
        var top_left_margin = 20;
        var PDF_Width = HTML_Width+(top_left_margin*2);
        var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
        var canvas_image_width = HTML_Width;
        var canvas_image_height = HTML_Height;
       
        var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
         console.log(totalPDFPages);
        
        html2canvas($("#aImprimir")[0],{allowTaint:true}).then(function(canvas) {
            canvas.getContext('2d');
            
            console.log(canvas.height+"  "+canvas.width);
            
            
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
            
            
            for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
            }
            console.log("salio del for");
            pdf.save("ListaDePrecios.pdf");
        });
    };

    function confirmarCancelacion(){
                var ask = confirm("¿Seguro quieres cancelar?");
                if (ask) {
                    window.location.href="../vista/factura.php?";
                    
                }else{
                    window.location.href="../vista/imprimirFactura.php?";
                }
        }

</script>

</html>