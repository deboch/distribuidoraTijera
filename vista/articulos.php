<?php

include_once("../controlador/controlador_articulos.php");

?>
<!DOCTYPE html>
<html>
<?php
include_once("../head.php");
?>
<body>
    <div class="container">
		<?php
			include("../header.php");
		?>
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h3>Lista de art&iacuteculos<h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="card-header py-3">
                    <form method="POST"> 
                        <div class="form-group">
                            <div class="col-md-2">
                                <input class="form-control" type="text" placeholder="Artículo" id="search" name="search" onchange="validarSiNumero(this);">    
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-info " type="submit" onclick="sendRequest();">BUSCAR</button>
                            </div>
                            </div>   
                        </div>
                        
                    </form> 
            </div>
        </div>
    <div class="row">
            <div class="col-md-11">
                <button type="button" class="btn btn-info float-right agregar"><a href="../vista/agregarArticulo.php" style="color:white!important">AGREGAR</a></button>
            </div>
        </div>    
   
        <div class="card">
            <div class="card-body">
                <ul id="containers"></ul>
            </div>
        </div>

    <!-- <div class="table-responsive"> -->
			
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Art&iacuteculo</th>
                    <th>Descripcion</th>
                    <th>Eje</th>
                    <th>Aloj.</th>
                    <th>Esp.</th>
                    <th>Form.</th>
                    <th>Giro</th>
                    <th>G($)</th>
                    <th>S($)</th>
                    <th>B($)</th>
                    <th>V($)</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($articulos as $articulo){
                        $art=$articulo['codigo'];
                        echo "<tr>
                             <td>".$articulo['codigo']."</td>                             
                             <td>".$articulo['descripcion']."</td>
                             <td>".$articulo['eje']."</td>
                             <td>".$articulo['aloj']."</td>
                             <td>".$articulo['esp']."</td>
                             <td>".$articulo['form']."</td>  
                             <td>".$articulo['giro']."</td> 
                             <td>".$articulo['G']."</td>
                             <td>".$articulo['S']."</td>
                             <td>".$articulo['B']."</td>
                             <td>".$articulo['V']."</td>
                             <td><a href='#' onclick='confirmarCancelacion(".$art.")'><img src='../assets/img/cleaner.png' style='width:42px;height:42px;border:0'></img></a></td>
                             <td><a href='../vista/modificarArticulo.php?codigo=".$articulo['codigo']."&descripcion=".$articulo['descripcion']."&eje=".$articulo['eje']."&aloj=".$articulo['aloj']."&esp=".$articulo['esp']."&form=".$articulo['form']."&giro=".$articulo['giro']."&G=".$articulo['G']."&S=".$articulo['S']."&B=".$articulo['B']."&V=".$articulo['V']."'><img src='../assets/img/modify.png' style='width:42px;height:42px;border:0'></img></a></td>                           
                         </tr>";
                    }
                ?>
                </tbody>
            </table>
            
 <!-- </div>  -->
 </div>
 </div>
</body>
<script src="../assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
</script>

<script>
    
    function sendRequest(){
       var theObject = new XMLHttpRequest();
       theObject.open('GET', '../modelo/ajax.php', true);
       theObject.setRequestHeader('Content-Type', 'application/x-ww-fomr-urlencoded');
       theObject.onreadystatechange = function(){
           console.log(theObject.responseText);
       }
       theObject.send();
    }
    function confirmarCancelacion(num){
                var ask = confirm("¿Seguro quieres eliminar el articulo?");
                if (ask) {
                    window.location.href="../controlador/controlador_articulos.php?numero="+num;
                    
                }else{
                    window.location.href="../vista/articulos.php";
                }
        }
</script>
<footer></footer>
</html>