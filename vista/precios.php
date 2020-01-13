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
                <form method="get" action="../controlador/controlador_precio.php">
                    <div class="row" style="border: solid 0.3px #dcdddc; padding: 20px;">
                    <div class=col-md-4>
                        <h5>Ingrese porcentaje a modificar:</h5>
                    </div>
                        <div class="col-md-2">
                            <input class="form-control" type="text" >
                        </div>
                        <div class="col-md-1">
                            <h5>en </h5>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option value="general">Todos</option>
                                <option value="G">Material G</option>
                                <option value="S">Material S</option>
                                <option value="B">Material B</option>
                                <option value="V">Material V</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger agregar float-right">Modificar</button>  
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
                    <div class="row">
                        <div class=col-md-3>
                            <h5>Ingrese Artículo:</h5>
                        </div>
						<div class="col-md-2">
                            <input class="form-control" type="text" placeholder="Código" id="cod_art" name="cod_art">    
                        </div>
						<div class="col-md-3">
							<button class="btn btn-primary" type="submit">Buscar</button>
						</div>
                    </div>                 
                </form>
            </div>
        </div>
    </div>
   
    <div class="table-responsive">
	 <button type="button" class="btn btn-success agregar float-right">Agregar</button>  
     <br>
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
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
                             <td><a href='modificarArticulo.php?codigo=".$articulo['codigo']."&descripcion=".$articulo['descripcion']."&G=".$articulo['G']."&S=".$articulo['S']."&B=".$articulo['B']."&V=".$articulo['V']."'>Modificar</a></td>
                             <td><a href=''>Eliminar</a></td>                         
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