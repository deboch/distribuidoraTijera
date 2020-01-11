<?php
include_once("../modelo/modelo_factura.php");
//vaciarTMP();
$listas=[];

if(isset($_POST["codigo"])){
	if(isset($_POST["tipo"])){
		if(isset($_POST["descripcion"])){
			if(isset($_POST["precio"])){
				$cod_agregar=$_POST["codigo"];
				$tipo=$_POST["tipo"];
				$descripcion=$_POST["descripcion"];
				$precio=$_POST["precio"];
				$cantidad=$_POST["cantidad"];
				$listas= agregar($cod_agregar, $tipo, $descripcion, $precio, $cantidad);
				$articulos = [];
			}
		}
	}
}
if(isset($_GET["accion"])){
    $id = $_GET["accion"];
    $listas =  eliminar_art($id);
}
include_once("../vista/factura.php");

