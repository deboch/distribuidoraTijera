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
    <h2>AGREGAR ART&IacuteCULO</h2>
    <br><br>
    <form method="POST" action="../controlador/controlador_agregar_articulo.php">
    <div class="table-responsive" id="tablaAgregar">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Art&iacuteculo</th>
                            <th>Descripci&oacuten</th>
                            <th>Eje</th>
                            <th>Aloj</th>
                            <th>Esp.</th> 
                            <th>Form.</th>
                            <th>Giro</th>
                            <th>G($)</th>
                            <th>S($)</th> 
                            <th>B($)</th>
                            <th>V($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" type='text' name='articulo' required></td>                             
                            <td><input class="form-control" type='text' name='descripcion'  required></td>
                            <td><input class="form-control" type='text' name='eje'></td>
                            <td><input class="form-control" type='text' name='aloj'></td>
                            <td><input class="form-control" type='text' name='esp'></td>  
                            <td><input class="form-control" type='text' name='form'></td>                             
                            <td><input class="form-control" type='text' name='giro'></td>
                            <td><input class="form-control" type='text' name='G' required></td>
                            <td><input class="form-control" type='text' name='S' required></td>
                            <td><input class="form-control" type='text' name='B' required></td>  
                            <td><input class="form-control" type='text' name='V' required></td>  
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
                window.location.href="../vista/articulos.php";
                }
        }
</script>
</html>