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
                            <th>N&uacutemero</th>
                            <th>Cliente</th>
                            <th>Direcci&oacuten</th>
                            <th>Localidad</th>
                            <th>Tel&eacutefono</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" type='text' name='numero'  required></td>                             
                            <td><input class="form-control" type='text' name='nombre'  required></td>
                            <td><input class="form-control" type='text' name='direccion'  required></td>
                            <td><input class="form-control" type='text' name='localidad'></td>
                            <td><input class="form-control" type='text' name='telefono'></td>  
                        </tr>
                    </tbody>
                </table>

    </div>
    
	<button class="btn btn-primary btn-round float-right">
        <i class="material-icons">done</i> Agregar
    </button>
	<a href="#" class="btn btn-danger btn-round float-right pdf" type="button" onclick="confirmarCancelacion()">
        <i class="material-icons">reply</i> Volver
    </a>
    </form>
    
</div>
</body>
<script>
        function confirmarCancelacion(){
                var ask = confirm("¿Seguro quiere cancelar?");
                if (ask) {
                window.location.href="../vista/clientes.php";
                }
        }
</script>
</html>