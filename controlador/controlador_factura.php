<?php 
include("../modelo/modelo_factura.php");

if(isset($_GET["cod_art"])){
	if(isset($_GET["tipo"])){
    $codigo = $_GET['cod_art'];
	$tipo=$_GET['tipo'];
    if($codigo!=0){
       $articulos = getBusqueda($codigo,$tipo);
      include("../vista/factura.php");}
	
}}