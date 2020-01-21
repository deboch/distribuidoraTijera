<?php
    include("../modelo/modelo_precio.php");
   
    $id= $_POST["codigo"];
   
    $G = $_POST["G"];
    $S = $_POST["S"];
    $B = $_POST["B"];
    $V = $_POST["V"];
    $articulos=updatePrecioVentaArticulo($id, $G, $S, $B, $V);
   echo "<script>window.location.href='../vista/precios.php?';</script>";
  