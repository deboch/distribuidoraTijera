<?php
include("../head.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
<br>
    <h2>AGREGAR CLIENTE</h2>
    <br><br>
    <form method="POST" action="../controlador/controlador_agregar_cliente.php">
    <div class="table-responsive" id="tablaAgregar">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Cliente</th>
                            <th>Direccion</th>
                            <th>Localidad</th>
                            <th>Telefono</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" type='text' name='numero'></td>                             
                            <td><input class="form-control" type='text' name='nombre'></td>
                            <td><input class="form-control" type='text' name='direccion'></td>
                            <td><input class="form-control" type='text' name='localidad'></td>
                            <td><input class="form-control" type='text' name='telefono'></td>  
                        </tr>
                    </tbody>
                </table>

    </div>
    <button class="btn btn-info float-right agregar" type="submit">AGREGAR</button>
	<button class="btn btn-danger float-right agregar"><a href="../home.php" style="color:white!important">CANCELAR</a></button>
    </form>
</div>
</body>
</html>