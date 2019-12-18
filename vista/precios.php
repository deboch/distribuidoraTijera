<?php
include("../controlador/controlador_lista.php");
?>
<!DOCTYPE html>
<html>
<?php
include("../head.php");
?>
<body>
<div class="container">
    <h2>Distribuidora Tijera</h2>
    <h4>Lista</h4>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-header py-3">
                <form method="get" action="../controlador/controlador_lista.php">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Articulo</label>
                                <input class="form-control col-4" type="text" placeholder="Ingrese articulo" id="cod_art" name="cod_art">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <button class="btn btn-primary col-2 offset-5" name="submit" type="submit">Buscar</button>
                    </div>
                </form>
        </div>
    </div>
    
    <div class="table-responsive">
	 <button type="button" class="btn btn-success agregar float-right">Agregar</button>  
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
                             <td><a href=''>Modificar</a></td>
                             <td><a href=''>Eliminar</a></td>                         
                         </tr>";
                    }
                ?>
                </tbody>
            </table>
		</div>
		</div>
		</div></body>
<footer></footer>
</html>