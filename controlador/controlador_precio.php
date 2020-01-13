<?php
include("../modelo/modelo_precio.php");
$articulos = getListaPrecios();
if(isset($_GET["cod_art"])){
    $codigo = $_GET['cod_art'];
    $articulos = "";
    if($codigo!=0){
        $articulos = getPrecioArticulo($codigo);
    }else{
        $articulos = getListaPrecios();
    }
	include("../vista/precios.php");
}

    // $descripcion = $_GET["descripcion"];
    // $G = $_GET["G"];
    // $S = $_GET["S"];
    // $B = $_GET["B"];
    // $V = $_GET["V"];