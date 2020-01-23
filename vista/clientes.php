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
				<h3>Clientes<h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>
    <button type="button" class="btn btn-info float-right agregar"><a href="agregarCliente.php" style="color:white!important">AGREGAR</a></button> 
 
    <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>N&uacutemero</th>
                    <th>Cliente</th>
                    <th>Direcci&oacuten</th>
                    <th>Localidad</th>
                    <th>Tel&eacutefono</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($clientes as $cliente){
                        $num_cliente = $cliente['numero'];
                        echo "<tr>
                             <td>".$cliente['numero']."</td>                             
                             <td>".$cliente['nombre']."</td>
                             <td>".$cliente['direccion']."</td>
                             <td>".$cliente['localidad']."</td>
                             <td>".$cliente['telefono']."</td>  
                             <td><a href='#' onclick='confirmarCancelacion(".$num_cliente.")' ><img src='../assets/img/cleaner.png' style='width:42px;height:42px;border:0' title='Eliminar'></img></a></td>
                             <td><a href='modificarCliente.php?numero=".$cliente['numero']."&nombre=".$cliente['nombre']."&direccion=".$cliente['direccion']."&localidad=".$cliente['localidad']."&telefono=".$cliente['telefono']."'><img src='../assets/img/modify.png' style='width:42px;height:42px;border:0' title='Modificar'></img></a></td>                           
                         </tr>";
                    }
                ?>
                </tbody>
            </table>

</div>
</body>
<script>
    function confirmarCancelacion(num){
                var ask = confirm("¿Seguro quieres eliminar el articulo?");
                if (ask) {
                    window.location.href="../controlador/controlador_cliente.php?numero="+num;
                    
                }else{
                    window.location.href="../vista/clientes.php";
                }
        }
</script>
<footer>
</footer>
</html>