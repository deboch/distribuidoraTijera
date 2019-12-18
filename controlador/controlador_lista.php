<?php
include("../modelo/modelo_lista.php");
$articulos=getlistaPrecios();
if(isset($_GET["submit"])){
    $codigo=$_GET['cod_art'];
    
    if($codigo!=0){
        $articulos=getPrecioArticulo($codigo);
        
        
    }else{
        echo "elegir un articulo";
    }include("../vista/listaDePrecios.php");
}