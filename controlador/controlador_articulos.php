<?php
include("../modelo/modelo_articulos.php");
$articulos=getlistaArticulos();
if(isset($_GET["submit"])){
    $codigo=$_GET['cod_art'];
    
    if($codigo!=0){
        $articulos=getArticulo($codigo);
        
        
    }else{
        echo "elegir un articulo";
    }include("../vista/listaDePrecios.php");
}