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
		<h1>Calculador de Porcentaje</h1>
	
			
			Ingresa precio actual:<br />
			<input class="" type="text" id="valor1" name="valor1"><br />
			Ingresa precio a futuro:<br />
			<input class="" type="text"  id="valor2" name="valor2"><br>
			
			<input class="" type="button" value="Calcular" onclick="calcularPorcentaje()">
            Aument&oacute el <input type="text" id="porcentaje" name="porcentaje" value="">%

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