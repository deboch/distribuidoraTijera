<?php

include("../controlador/controlador_cliente.php");
?>
<!DOCTYPE html>
<html>
<?php
include("../head.php");
?>
<body>
<?php
include_once("../header.php");
?>
<div class="container">
    
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h2>Clientes<h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>
    <button type="button" class="btn btn-info float-right agregar">Agregar</button> 
 
    <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Numero</th>
                    <th>Cliente</th>
                    <th>Direccion</th>
                    <th>Localidad</th>
                    <th>Telefono</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($clientes as $cliente){
                        echo "<tr>
                             <td>".$cliente['numero']."</td>                             
                             <td>".$cliente['nombre']."</td>
                             <td>".$cliente['direccion']."</td>
                             <td>".$cliente['localidad']."</td>
                             <td>".$cliente['telefono']."</td>  
                             <td><a href='../controlador/controlador_cliente.php?numero=".$cliente['numero']."'>Eliminar</a></td>
                             <td><a href=''>Modificar</a></td>                           
                         </tr>";
                    }
                ?>
                </tbody>
            </table>

</div>
</body>
<footer>
</footer>
</html>