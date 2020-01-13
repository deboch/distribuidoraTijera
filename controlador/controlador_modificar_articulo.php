<?php
    include("../modelo/modelo_precio.php");
   
    $id= $_POST["codigo"];
    $descripcion = $_POST["descripcion"];
    $G = $_POST["G"];
    $S = $_POST["S"];
    $B = $_POST["B"];
    $V = $_POST["V"];
    $articulos=updateArticulo($id,$descripcion,$G,$S,$B,$V);
    echo "<script>window.location.href='../vista/precios.php?';</script>";
  