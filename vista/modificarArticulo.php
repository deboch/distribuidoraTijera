<html>
<?php
include_once("../head.php");
?>
<body>
<div class="container">

        <?php 
        $articulo_cod =$_GET['codigo'];
        $articulo_descr = $_GET['descripcion'];
        $articulo_eje = $_GET['eje'];
        $articulo_aloj = $_GET['aloj'];
        $articulo_esp = $_GET['esp'];
        $articulo_form = $_GET['form']; 
        $articulo_giro = $_GET['giro'];
        $articulo_g =$_GET['G'];
        $articulo_s =$_GET['S'];
        $articulo_b =$_GET['B'];
        $articulo_v =$_GET['V'];
        echo "<br><h3>Modificar artículo: ". $articulo_cod."</h3><br>";
?>

        <form method="POST" action = "../controlador/controlador_modificar_articulo.php">
        <?php
        echo   "<div class='row'>
                        <div class='col-md-1'>
                                <label class='' id='codigo'>Codigo</label>
                        </div>
                        <div class='col-md-1'>
                                <input class='form-control' type='text' name='codigo' value='".$articulo_cod."'  readOnly>
                        </div>
                        <div class=class='col-md-2'>
                                <label class='' id='descripcion'>Descripcion</label>
                        </div>
                        <div class= 'col-md-8'>
                                <input class='form-control' type='text' name='descripcion' value='".$articulo_descr."' readOnly>
                        </div>
                </div>
                <br>
                <div class = 'row'>
                        <div class= 'col-md-1'>
                                <label class='' id='eje'>Eje:</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='eje' value='".$articulo_eje."' onchange='validarSiNumero(this);'>
                        </div>
                        <div class= 'col-md-1'>
                                <label class='' id='aloj'>Aloj:</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='aloj' value='".$articulo_aloj."' onchange='validarSiNumero(this);'>
                        </div>         
                        <div class= 'col-md-1'>
                                <label class='' id='esp'>Esp:</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='esp' value='".$articulo_esp."' onchange='validarSiNumero(this);'>
                        </div>     
                        <div class= 'col-md-1'>
                                <label class='' id='form'>Form:</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='form' value='".$articulo_form."'onchange='validarSiNumero(this);'>
                        </div>                      
                        <div class= 'col-md-1'>
                                <label class='' id='giro'>Giro:</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='giro' value='".$articulo_giro."' onchange='validarSiNumero(this);'>
                        </div>  
                </div>
                <br>
                <div class='row'>
                        <div class= 'col-md-1'>
                                <label class='' id='G'>G($):</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='G' value='".$articulo_g."' onchange='validarSiNumero(this);'>
                        </div>
                        <div class= 'col-md-1'>
                                <label class='' id='S'>S($):</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='S' value='".$articulo_s."' onchange='validarSiNumero(this);'>
                        </div>
                
                        <div class= 'col-md-1'>
                                <label class='' id='B'>B($):</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='B' value='".$articulo_b."' onchange='validarSiNumero(this);'>
                        </div>
                
                        <div class= 'col-md-1'>
                                <label class='' id='V'>V($):</label>
                        </div>
                        <div class= 'col-md-1'>
                                <input class='form-control' type='text' name='V' value='".$articulo_v."' onchange='validarSiNumero(this);'>
                        </div>
                </div>
                <div class='col-md-12'>
                <br>
                        <button type='submit' class='btn btn-primary btn-round float-right' name='imprimir' value='Imprimir' onclick='imprimir();'>
                                <i class='material-icons'>done</i> Actualizar
                        </button>
                        <button href='#' class='btn btn-danger btn-round float-right pdf' onclick='confirmarCancelacion()'>
                                <i class='material-icons'>reply</i> Volver
                        </button>
                        
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
                window.location.href="../vista/articulos.php";
                }
        }
</script>
</html>