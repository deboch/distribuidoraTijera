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
                    <form method="POST" class="form-inline ml-auto"> 
                        
                        <div class="form-group bmd-form-group">
                            <input type="text" class="form-control" placeholder="Artículo" id="search" name="search" onchange="validarSiNumero(this);">
                        </div>
                        <button type="submit" class="btn btn-white btn-raised btn-fab btn-round" tittle='Buscar'>
                            <i class="material-icons">search</i>
                        </button>
                        
                    </form> 
            </div>
        </div>
    <div class="row">
            <div class="col-md-11">    
                <a href="../vista/agregarArticulo.php" class="btn btn-primary btn-round float-right">
                    <i class="material-icons">add</i> Agregar
                </a>
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
                    <th></th>
                    <th></th>
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
                             <td><a href='#' onclick='confirmarCancelacion(".$art.")' class='btn btn-primary btn-raised btn-fab btn-round'><i class='material-icons'>delete</i></a></td>
                             <td><a href='../vista/modificarArticulo.php?codigo=".$articulo['codigo']."&descripcion=".$articulo['descripcion']."&eje=".$articulo['eje']."&aloj=".$articulo['aloj']."&esp=".$articulo['esp']."&form=".$articulo['form']."&giro=".$articulo['giro']."&G=".$articulo['G']."&S=".$articulo['S']."&B=".$articulo['B']."&V=".$articulo['V']."' class='btn btn-primary btn-raised btn-fab btn-round' ><i class='material-icons'>edit</i></a></td>                           
                         </tr>";
                    }
                ?>
                </tbody>
            </table>
            
 <!-- </div>  -->
 </div>
 </div>
</body>



<script>
  $(document).ready(function(){
  console.log('jQuery esta trabajando');
  $('#search').keyup(function(e){
      if($('#search').val()){
          let search = $('#search').val();
          console.log('adentro del if');
          $.ajax({
          url: '../controlador/controlador_articulos.php',
          type: 'POST',
          data: {search},
          success: function(response){
            console.log(response);
              let tasks = JSON.parse(response); 
              let template = ''; 
              tasks.forEach(task => {
                  template += `<li>
                  ${task.descripcion}
                  </li>`
                  
              });
              $('#containers').html(template);
          }
          })
      }
  })
});  
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