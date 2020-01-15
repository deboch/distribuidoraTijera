<?php

	include_once("../controlador/controlador_precio.php");

?>
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
    <h4>Lista</h4>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-header py-3">
                <form method="POST" action="../controlador/controlador_precio.php">
                    <div class="row" style="border: solid 0.3px #dcdddc; padding: 20px;">
                    <div class=col-md-5>
                        <h5>Ingrese porcentaje a modificar:</h5>
                    </div>
                        <div class="col-md-2">
                            <input class="form-control" type="text" name="porcentajeMaterial">
                        </div>
                        <div class="col-md-1">
                            <h5>en </h5>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" name="tipoMaterial">
                                <option value="general">Todos</option>
                                <option value="G">Material G</option>
                                <option value="S">Material S</option>
                                <option value="B">Material B</option>
                                <option value="V">Material V</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button  type="submit" class="btn btn-info agregar float-right">Modificar</button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-header py-3">
                <form method="get" action="../controlador/controlador_precio.php">
                    <div class="row" style="border: solid 0.3px #dcdddc; padding: 20px;">
                        <div class=col-md-3>
                            <h5>Ingrese Artículo:</h5>
                        </div>
						<div class="col-md-2">
                            <input class="form-control" type="text" placeholder="Código" id="cod_art" name="cod_art">    
                        </div>
						<div class="col-md-3">
							<button type="submit" style="border: none;"><img src='../assets/img/searchs.png' style='width:40px;height:40px;border:0' title='Buscar'></img></button>
						</div>
                    </div>                 
                </form>
            </div>
        </div>
    </div>
   
    
        <button type="button" class="btn btn-info agregar float-right">AGREGAR</button> 
        <button class="btn btn-info agregar float-right"><a href="javascript:getPDF()" style="color:white!important">DESCARGAR</a></button> 
        
        <br>
        <div class="table-wrapper-scroll-y my-custom-scrollbar" id="aImprimir">    
                <table class="table table-bordered table-striped mb-0" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Articulo</th>
                        <th>Descripcion</th>
                        <th>G($)</th>
                        <th>S($)</th>
                        <th>B($)</th>
                        <th>V($)</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($articulos as $articulo){
                            echo "<tr>
                                <td>".$articulo['codigo']."</td>                             
                                <td>".$articulo['descripcion']."</td>
                                <td>".$articulo['G']."</td>
                                <td>".$articulo['S']."</td>
                                <td>".$articulo['B']."</td>
                                <td>".$articulo['V']."</td>
                                <td><a href='modificarPrecioArticulo.php?codigo=".$articulo['codigo']."&descripcion=".$articulo['descripcion']."&G=".$articulo['G']."&S=".$articulo['S']."&B=".$articulo['B']."&V=".$articulo['V']."'><img src='../assets/img/modify.png' style='width:42px;height:42px;border:0' title='Modificar'></img></a></td>
                                <td><a href=''><img src='../assets/img/cleaner.png' style='width:42px;height:42px;border:0' title='Eliminar'></img></a></td>                         
                            </tr>";
                        }
                    ?>
                    </tbody>
                </table>
            
	</div>
</div>
		
</body>
<script>
    function crearPdf() {
        
        var pdf = new jsPDF('p', 'pt', 'A4');
        source = $('#aImprimir')[0];
        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            
        };
        pdf.fromHTML(
            source,
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width,
                'elementHandlers': specialElementHandlers
            },
            function (dispose) {
                pdf.save('listaDePrecios.pdf');
            }, margins
        );
    }
    function getPDF(){
        console.log("inicio");
        var HTML_Width = $("#aImprimir").width();
        var HTML_Height = $("#aImprimir").height();
        var top_left_margin = 15;
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
</script>
<footer></footer>
</html>