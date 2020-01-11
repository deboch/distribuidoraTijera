<html>
<head>
</head>
<body>
<div class="container">
        <?php 
        $articulo_seleccionado =$_GET['codigo'];
        $articulo_descr =$_GET['descripcion'];
        $articulo_g =$_GET['G'];
        $articulo_s =$_GET['S'];
        $articulo_b =$_GET['B'];
        $articulo_v =$_GET['V'];
        echo "<h1>Modificar artículo: ". $articulo_seleccionado."</h1>";
?>

        <form method="POST" action = "../controlador/controlador_modificar_articulo.php">
        <?php
        echo   "<div class='row'>
                <div class= col-md-1>
                <label class='' id='codigo'>Codigo</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='codigo' value='".$articulo_seleccionado."' readOnly>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='descripcion'>Descripcion</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='descripcion' value='".$articulo_descr."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='G'>G($)</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='G' value='".$articulo_g."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='S'>S($)</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='S' value='".$articulo_s."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='B'>B($)</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='B' value='".$articulo_b."'>
                </div>
                </div>
                <div class='row'>
                <div class= col-md-1>
                <label class='' id='V'>V($)</label>
                </div>
                <div class= col-md-1>
                <input class='form-control' type='text' name='V' value='".$articulo_v."'>
                </div>
                </div>
                <div class='col-md-2'>
		<br>
		<button type='submit' class='btn btn-info' style='margin-top: 8px'>Actualizar</button>
		</div>
                "
         ?>      
        </form>       
</div>
</body>
</html>