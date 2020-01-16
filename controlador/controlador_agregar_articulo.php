<?php
    include("../modelo/modelo_articulos.php");
   
    $articulo=$_POST['articulo'];
    $descripcion=$_POST['descripcion'];
    $eje=$_POST['eje'];
    $aloj=$_POST['aloj'];
    $esp=$_POST['esp'];
    $form=$_POST['form'];
    $giro=$_POST['giro'];
    $G=$_POST['G'];
    $S=$_POST['S'];
    $B=$_POST['B'];
    $V=$_POST['V'];
    
    $articulos=addArticulo($articulo,$descripcion,$eje,$aloj,$esp,$form,$giro,$G,$S,$B,$V);