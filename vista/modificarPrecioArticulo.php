<html>
<?php
include_once("../head.php");
?>
<body>
<div class="container">

        <?php 
        $articulo_cod =$_GET['codigo'];
        $articulo_descr = $_GET['descripcion'];
        $articulo_g =$_GET['G'];
        $articulo_s =$_GET['S'];
        $articulo_b =$_GET['B'];
        $articulo_v =$_GET['V'];
        echo "<br><h1>Modificar artículo: ". $articulo_cod."</h1><br>";
?>

        <form method="POST" action = "../controlador/controlador_modificar_precio_articulo.php">
        <?php
        echo   "<div class='row'>
                        <div class= col-md-1>
                                <label class='' id='codigo'>Codigo</label>
                        </div>
                        <div class= col-md-1>
                                <input class='form-control' type='text' name='codigo' value='".$articulo_cod."' readOnly>
                        </div>
                        <div class= col-md-1>
                                <label class='' id='descripcion'>Descripcion</label>
                        </div>
                        <div class= col-md-9>
                                <input class='form-control' type='text' name='descripcion' value='".$articulo_descr."' readOnly>
                        </div>
                </div>
                <br>
                <div class='row'>
                        <div class= col-md-1>
                                <label class='' id='G'>G($):</label>
                        </div>
                        <div class= col-md-1>
                                <input class='form-control' type='text' name='G' value='".$articulo_g."'>
                        </div>
                        <div class= col-md-1>
                                <label class='' id='S'>S($):</label>
                        </div>
                        <div class= col-md-1>
                                <input class='form-control' type='text' name='S' value='".$articulo_s."'>
                        </div>
                
                        <div class= col-md-1>
                                <label class='' id='B'>B($):</label>
                        </div>
                        <div class= col-md-1>
                                <input class='form-control' type='text' name='B' value='".$articulo_b."'>
                        </div>
                
                        <div class= col-md-1>
                                <label class='' id='V'>V($):</label>
                        </div>
                        <div class= col-md-1>
                                <input class='form-control' type='text' name='V' value='".$articulo_v."'>
                        </div>
                </div>
                <div class='col-md-12'>
                <br>
                
		<button type='submit' class='btn btn-info float-right' style='margin-top: 8px'>Actualizar</button>
                <button type='button' class='btn btn-danger float-right' style='margin-top: 8px'> <a onclick='confimarCancelacion()' style='color:white!important'>Cancelar</a></button>
                </div>
                "
         ?>      
        </form>       
</div>
</body>
<script>
        function confimarCancelacion(){
                var ask = confirm("¿Seguro quiere cancelar?");
                if (ask) {
                window.location.href="../vista/precios.php";
                }
        }
</script>
</html>