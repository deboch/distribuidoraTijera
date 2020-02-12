<?php
include_once("../modelo/modelo_precio.php");
$articulos = getListaPreciosVentas();
if(isset($_GET["cod_art"])){
    $codigo = $_GET['cod_art'];
    $articulos = "";
    if($codigo!=0){
        $articulos = getPrecioArticulo($codigo);
    }else{
        $articulos = getListaPreciosVentas();
    }
	include("../vista/precios.php");
}
if(isset($_POST["porcentajeMaterial"])){
    $porcentaje = $_POST["porcentajeMaterial"];
    $tipo = $_POST["tipoMaterial"];
    $precios = updatePrecio( $tipo,$porcentaje);
    echo "<script>window.location.href='../vista/precios.php?';</script>";
}