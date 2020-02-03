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
    <button class="btn btn-info float-right agregar" type="submit"  style="margin-top: 24px;">AGREGAR</button>
	
    </form>
    <button class="btn btn-danger float-right agregar"><a onclick="confirmarCancelacion();" style="color:white!important">CANCELAR</a></button>
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