<!DOCTYPE html>
<html lang="en">
<?php
require_once("conexion.php");
    $conn = getConexion();
	$sql3 = "TRUNCATE table tmp";
	$result = mysqli_query($conn, $sql3);
	error_reporting(0);
?>


<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  	Distribuidora Tijera
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css"> -->


</head>
<body id="cuerpo"  class="index-page sidebar-collapse">

<!--        primary navbar  -->
	<nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="../index.php"><i class="material-icons">directions_car</i>Distribuidora Tijera</a>
				<!--<a class="btn inicio pdf" href="../index.php"><img src="assets/img/icono2.png" style="width:50px;height:50px;border:0"></img></a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
				<!--<h1 class="titulo" id="titulo" style="color: white;">Distribuidora Tijera</h1>-->
              </div>
            </div>
    </nav>

	<div class="section section-white">
      <div class="container">
        <!-- nav pills -->
        <div id="navigation-pills">          
         
          <div class="row">
            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
              <ul class="nav nav-pills nav-pills-icons" role="tablist">
                <!-- color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"-->
                <li class="nav-item">
                  <a class="nav-link active" href="vista/factura.php" role="tab" data-toggle="tab">
                    <i class="material-icons">receipt</i> Factura
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="vista/articulos.php" role="tab" data-toggle="tab">
                    <i class="material-icons">view_list</i> Articulos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="vista/precios.php" role="tab" data-toggle="tab">
                    <i class="material-icons">monetization_on</i> Precio Venta
                  </a>
                </li>
				        <li class="nav-item">
                  <a class="nav-link active" href="vista/clientes.php" role="tab" data-toggle="tab">
                    <i class="material-icons">face</i> Clientes
                  </a>
                </li>
				        <li class="nav-item">
                  <a class="nav-link active" href="vista/calculadora.php" role="tab" data-toggle="tab">
                    <i class="material-icons">add</i> Calculadora
                  </a>
                </li>             
			  
			        </ul>              
            </div>
           
          </div>
        </div>
        <!-- end nav pills -->
      </div>
    </div>	

<footer class="footer" data-background-color="black">
    <div class="container">     
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>
      </div>
    </div>
</footer>

</body>

</html>