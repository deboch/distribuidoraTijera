<!DOCTYPE html>
<html>
<?php
require_once("conexion.php");
    $conn = getConexion();
	$sql3 = "TRUNCATE table tmp";
	$result = mysqli_query($conn, $sql3);
	error_reporting(0);
?>


<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="cuerpo" style="">

<header>
<br>
	
</header>

    <div class="container">
	<h1 class="titulo">Bienvenido Distribuidora T</h1>
	<div class="row" style="margin-top: 50px; height:720px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
    <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="vista/factura.php">Factura</a>
    <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="vista/articulos.php">Art&iacuteculos</a>
    <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="vista/precios.php">Precio de Venta</a>
    <a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="vista/clientes.php">Clientes</a>
	<a class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="vista/calculadora.php">Calculadora</a>
    </div>
	<div class="col-md-4"></div>
	</div>

</body>
<footer style="border-top: solid 2px black;">
<p>-2020-</p>
</footer>
</html>