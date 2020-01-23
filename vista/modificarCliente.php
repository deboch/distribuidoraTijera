<html>
<?php
include_once("../head.php");
?>
<body>
<div class="container">
        <?php
        $cliente_num=$_GET['numero'];
        $cliente_nom=$_GET['nombre'];
        $cliente_dir=$_GET['direccion'];
        $cliente_loc=$_GET['localidad'];
        $cliente_tel=$_GET['telefono'];
        echo "<h1>Modificar cliente: ".$cliente_num."</h1>";
        ?>
        <form method="POST" action = "../controlador/controlador_modificar_cliente.php">
        <?php
        echo   "<div class='table-responsive' id='tablaAgregar'>
                        <table class='table table-striped' id='dataTable' width='100%' cellspacing='0'>
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
                                <td><input class='form-control' type='text' value='".$cliente_num."' name='numero' readOnly></td>                             
                                <td><input class='form-control' type='text' value='".$cliente_nom."' name='nombre'></td>
                                <td><input class='form-control' type='text' value='".$cliente_dir."' name='direccion'></td>
                                <td><input class='form-control' type='text' value='".$cliente_loc."' name='localidad'></td>
                                <td><input class='form-control' type='text' value='".$cliente_tel."' name='telefono'></td>  
                                </tr>
                        </tbody>
                        </table>

                </div>
                <button class='btn btn-info float-right agregar' type='submit'>ACTUALIZAR</button>
                <button type='button' class='btn btn-danger float-right agregar'><a onclick='confimarCancelacion()' style='color:white!important'>CANCELAR</a></button>"
         ?>      
        </form>       
</div>
</body>       
<script>
        function confimarCancelacion(){
                var ask = confirm("¿Seguro quiere cancelar?");
                if (ask) {
                window.location.href="../vista/clientes.php";
                }
        }
</script>
</html>