<?php
    include("../modelo/modelo_articulos.php");
 
    $cod =$_POST['codigo'];
    $descr = $_POST['descripcion'];
    $eje = $_POST['eje'];
    $aloj = $_POST['aloj'];
    $esp = $_POST['esp'];
    $form = $_POST['form']; 
    $giro = $_POST['giro'];
    $G =$_POST['G'];
    $S =$_POST['S'];
    $B =$_POST['B'];
    $V =$_POST['V'];

    $articulos=updateArticulo($cod ,$descr,$eje,$aloj,$esp,$form,$giro,$G,$S,$B,$V);
    echo "<script>window.location.href='../vista/articulos.php?';</script>";