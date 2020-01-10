<!DOCTYPE html>
<html>
<?php
include_once("../head.php");
?>

<body>

	<div class="container">
		
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h2>Factura<h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="separador"></div>
			</div>
		</div>	
		<br><br>	
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<label class="form-control">Cliente</label>
						<input class="form-control" type="text" placeholder="Ingrese cliente" id="cliente">
					</div>
					<div class="col-md-4">   
						<label class="form-control">Teléfono</label>
						<input class="form-control" type="text" placeholder="Ingrese teléfono" id="telefono">
					</div>
					<div class="col-md-4">
						<label class="form-control">Fecha</label>
						<input class="form-control" type="date" placeholder="Ingrese fecha" id="fecha"  onChange="duplicar()">
					</div>
				</div>
						  
			</div> 
		</div>
		<br>
        <table class="table table-striped" id="mitabla">
				<thead>
					<tr>
					<th scope="col">Articulo</th>
					<th scope="col">Tipo</th>
					<th scope="col">Cantidad</th>
					<th scope="col">Descripción</th>
					<th scope="col">Precio Unit.</th>
					<th scope="col">Total</th>
					<th scope="col"></th>
					</tr>
				</thead>
				<form class="form-horizontal" role="form" id="datos_factura" method="post" action="">
					<tbody>
						<?php
                            require_once("../conexion.php");
                            $conn = getConexion();
                            $sql2 = "SELECT DISTINCT id, tipo, descripcion, precio, cantidad from tmp";
                            $result = mysqli_query($conn, $sql2);
                            $listas=Array();
                            
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $lista=Array();
                                    $lista['suma_total']=0;
                                    $lista['id'] = $row['id'];
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
                            
                            foreach($listas as $lista){
                                echo "<tr>
                                    <td>".$lista['id']."</td>                             
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
				
				<br></form>
				
				</table>
        </body>
        </html>