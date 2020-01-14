<?php

include_once("../controlador/controlador_articulos.php");

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
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h2>Lista de art&iacuteculos <h2>
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
                <form method="get" action="../controlador/controlador_articulos.php">
                    <div class="row">
						<div class="col-md-2">
                            <input class="form-control" type="text" placeholder="Articulo" id="cod_art" name="cod_art">    
                        </div>
						<div class="col-md-3">
                        <button class="btn btn-info" type="submit">BUSCAR</button>
						</div>
                    </div>
                        
                    </div>
                    
                </form>
        </div>
    </div>
    
   

    <div class="table-responsive">
			
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Articulo</th>
                    <th>Descripcion</th>
                    <th>Eje</th>
                    <th>Aloj.</th>
                    <th>Esp.</th>
                    <th>Form.</th>
                    <th>Giro</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($articulos as $articulo){
                        echo "<tr>
                             <td>".$articulo['codigo']."</td>                             
                             <td>".$articulo['descripcion']."</td>
                             <td>".$articulo['eje']."</td>
                             <td>".$articulo['aloj']."</td>
                             <td>".$articulo['esp']."</td>
                             <td>".$articulo['form']."</td>  
                             <td>".$articulo['giro']."</td>
                             <td><a href=''></a></td>
                             <td><a href=''></a></td>                           
                         </tr>";
                    }
                ?>
                </tbody>
            </table>
            
 </div> 
 </div>
 </div>
</body>
<footer></footer>
</html>