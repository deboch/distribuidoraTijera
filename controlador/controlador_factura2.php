<?php
include_once("../modelo/modelo_factura.php");
$listas=[];
if(isset($_POST["codigo"])){
	if(isset($_POST["tipo"])){
		if(isset($_POST["descripcion"])){
			if(isset($_POST["precio"])){
				$cod_agregar=$_POST["codigo"];
				$tipo=$_POST["tipo"];
				$descripcion=$_POST["descripcion"];
				$precio=$_POST["precio"];
				$listas= listar($cod_agregar,$tipo,$descripcion,$precio);
				$articulos = [];
			}
		}
	}
}
include_once("../vista/factura.php");

