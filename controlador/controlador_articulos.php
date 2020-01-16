<?php
include("../modelo/modelo_articulos.php");
$articulos=getlistaArticulos();
if(isset($_GET["cod_art"])){
    $codigo=$_GET['cod_art'];
    $articulos="";
    if($codigo!=0){
        $articulos=getArticulo($codigo);
    }else{
        $articulos=getlistaArticulos();
    }
    
}    
if(isset($_GET["numero"])){
    $nro_art=$_GET['numero'];
    deleteArticulo($nro_art);
}

include_once("../vista/articulos.php");
