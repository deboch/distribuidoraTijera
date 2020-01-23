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
    <br>
		<?php
			include("../header.php");
        ?>
        <br><br><br>
    <h4 class="pdf" >Lista</h4>
    <div class="card shadow mb-4">
        <div class="card-body pdf">
            <div class="card-header py-3 pdf">
                <form method="POST" action="../controlador/controlador_precio.php">
                    <div class="row pdf" style="border: solid 0.3px #dcdddc; padding: 20px;">
                    <div class="col-md-5 pdf">
                        <h5 class="pdf">Ingrese porcentaje a modificar:</h5>
                    </div>
                        <div class="col-md-2 pdf">
                            <input class="form-control" type="text" name="porcentajeMaterial" id="porcentajeMaterial" onChange="validarPorcentaje(this)">
                        </div>
                        <div class="col-md-1 pdf">
                            <h5> en </h5>
                        </div>
                        <div class="col-md-2 pdf">
                            <select class="form-control pdf" name="tipoMaterial">
                                <option value="general">Todos</option>
                                <option value="G">Material G</option>
                                <option value="S">Material S</option>
                                <option value="B">Material B</option>
                                <option value="V">Material V</option>
                            </select>
                        </div>
                        <div class="col-md-2 pdf">
                            <button  type="submit" class="btn btn-info agregar float-right pdf">MODIFICAR</button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <label>Si desea resetear la lista a precio de costo haga click</label>
   <a href="../controlador/limpiarLista.php" style="color:red!important">Aquí</a>
    <!-- <div class="card shadow mb-4 pdf">
        <div class="card-body pdf">
            <div class="card-header py-3 pdf">
                <form method="get" action="../controlador/controlador_precio.php">
                    <div class="row pdf" style="border: solid 0.3px #dcdddc; padding: 20px;">
                        <div class="col-md-2 pdf">
                            <h5>Buscar:</h5>
                        </div>
						<div class="col-md-2 pdf">
                            <input class="form-control" type="text" placeholder="Código" id="cod_art" name="cod_art" onchange="validarSiNumero(this);">    
                        </div>
						<div class="col-md-3 pdf">
							<button type="submit" style="border: none;"><img src='../assets/img/searchs.png' style='width:40px;height:40px;border:0' title='Buscar'></img></button>
						</div>
                    </div>                 
                </form>
            </div>
        </div>
    </div> -->
        <div class="col-md-2 pdf">
            <button class="btn btn-info agregar float-right"><a href="imprimirLista.php">VER LISTA COMPLETA</a></button>  
        </div>
       
        <br>
        <br>
        <br>
        <div class="table-wrapper-scroll-y my-custom-scrollbar" id="aImprimir" class="aImprimir">    
                <table class="table table-bordered table-striped mb-0 display" id="example" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Art&iacuteculo</th>
                        <th>Descripci&oacuten</th>
                        <th>G($)</th>
                        <th>S($)</th>
                        <th>B($)</th>
                        <th>V($)</th>
                        <th class="pdf"></th>
                       
                    </tr>
                    </thead>
                    <tbody >
                    <?php
                        foreach ($articulos as $articulo){
                            echo "<tr>
                                <td>".$articulo['codigo']."</td>                             
                                <td>".$articulo['descripcion']."</td>
                                <td>".$articulo['G']."</td>
                                <td>".$articulo['S']."</td>
                                <td>".$articulo['B']."</td>
                                <td>".$articulo['V']."</td>
                                <td class='pdf'><a href='../vista/modificarPrecioArticulo.php?codigo=".$articulo['codigo']."&descripcion=".$articulo['descripcion']."&G=".$articulo['G']."&S=".$articulo['S']."&B=".$articulo['B']."&V=".$articulo['V']."'><img class='pdf' src='../assets/img/modify.png' style='width:42px;height:42px;border:0' title='Modificar' id='modificar'></img></a></td>
                                                        
                            </tr>";
                        }
                    ?>
                    </tbody>
                </table>
            
	</div>
    <div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" id="articulos_page"></ul>
</div>
</div>
		
</body>
<script>

$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 2, "asc" ]],
        "language": {
                "decimal":        "",
                "emptyTable":     "No contiene datos la tabla",
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ artículos",
                "infoEmpty":      "Mostrar 0 to 0 of 0 artículos",
                "infoFiltered":   "(filtrado de _MAX_ total artículos)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Mostrar _MENU_ artículos",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscar:",
                "zeroRecords":    "No se encontro resultado",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Anterior",
                    "next":       "Siguiente",
                    "previous":   "Último"
                },
                "aria": {
                    "sortAscending":  ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
    } );
} );

</script>
<footer></footer>
</html>