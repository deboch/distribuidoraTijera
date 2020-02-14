<!DOCTYPE html>
<html>
	<head>
		<title>Operadores Aritm&eacute;meticos</title>
        <?php
include("../head.php");
?>
	</head>
	<body>
    <?php
include_once("../header.php");
?>
		<h2>Calculador de Porcentaje</h2>
	
			<div>
                <label class="form-control">Ingresa precio actual:<label />
                <input class="form-control" type="text" id="valor1" name="valor1"><br />
                </div>
            <div>
                <label class="form-control" >Ingresa precio a futuro:<label />
                <input class="form-control" type="text"  id="valor2" name="valor2"><br>
			</div>
            <div>
			<input class="form-control" type="button" value="Calcular" onclick="calcularPorcentaje()">
			
            <label >Aument&oacute el </label><input type="text" id="porcentaje" name="porcentaje" value="">%
            </div>

        </body>
        <script>
        function calcularPorcentaje(){
            var num1=document.getElementById("valor1").value;
            var num2=document.getElementById("valor2").value;
            var num3=((num2/num1)-1)*100;
            document.getElementById("porcentaje").value=num3;
        }
        </script>
</html>