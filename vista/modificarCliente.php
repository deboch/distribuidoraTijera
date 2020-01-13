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
        echo   "<div class='row'>
                <div class= col-md-1>
                <label class='' id='numero'>Numero</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='numero' value='".$cliente_num."' readOnly>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='nombre'>Nombre</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='nombre' value='".$cliente_nom."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='direccion'>Direccion</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='direccion' value='".$cliente_dir."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='localidad'>Localidad</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='localidad' value='".$cliente_loc."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='telefono'>Telefono</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='telefono' value='".$cliente_tel."'>
                </div>
                </div>
                <div class='col-md-2'>
		<br>
		<button type='submit' class='btn btn-info' style='margin-top: 8px'>Actualizar</button>
		</div>"
         ?>      
        </form>       
</div>
</body>       

</html>