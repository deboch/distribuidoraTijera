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
                                <th>Numero</th>
                                <th>Cliente</th>
                                <th>Direccion</th>
                                <th>Localidad</th>
                                <th>Telefono</th> 
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                <td><input class='form-control' type='text' value='".$cliente_num."' name='numero'></td>                             
                                <td><input class='form-control' type='text' value='".$cliente_nom."' name='nombre'></td>
                                <td><input class='form-control' type='text' value='".$cliente_dir."' name='direccion'></td>
                                <td><input class='form-control' type='text' value='".$cliente_loc."' name='localidad'></td>
                                <td><input class='form-control' type='text' value='".$cliente_tel."' name='telefono'></td>  
                                </tr>
                        </tbody>
                        </table>

                </div>
                <button class='btn btn-info float-right agregar' type='submit'>ACTUALIZAR</button>
                <button class='btn btn-danger float-right agregar'><a href='../home.php' style='color:white!important'>CANCELAR</a></button>"
         ?>      
        </form>       
</div>
</body>       

</html>