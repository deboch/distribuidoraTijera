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
    <h2>AGREGAR ARTICULO</h2>
    <br><br>
    <form method="POST" action="../controlador/controlador_agregar_articulo.php">
    <div class="table-responsive" id="tablaAgregar">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Articulo</th>
                            <th>Descripcion</th>
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
                            <td><input class="form-control" type='text' name='articulo'></td>                             
                            <td><input class="form-control" type='text' name='descripcion'></td>
                            <td><input class="form-control" type='text' name='eje'></td>
                            <td><input class="form-control" type='text' name='aloj'></td>
                            <td><input class="form-control" type='text' name='esp'></td>  
                            <td><input class="form-control" type='text' name='form'></td>                             
                            <td><input class="form-control" type='text' name='giro'></td>
                            <td><input class="form-control" type='text' name='G'></td>
                            <td><input class="form-control" type='text' name='S'></td>
                            <td><input class="form-control" type='text' name='B'></td>  
                            <td><input class="form-control" type='text' name='V'></td>  
                        </tr>
                    </tbody>
                </table>

    </div>
    <button class="btn btn-info float-right agregar" type="submit">AGREGAR</button>
	
    </form><button class="btn btn-danger float-right agregar"><a onclick="confirmarCancelacion();" style="color:white!important">CANCELAR</a></button>
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