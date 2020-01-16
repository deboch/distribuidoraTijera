<?php
    include("../modelo/modelo_cliente.php");
   
    $cliente_num=$_POST['numero'];
    $cliente_nom=$_POST['nombre'];
    $cliente_dir=$_POST['direccion'];
    $cliente_loc=$_POST['localidad'];
    $cliente_tel=$_POST['telefono'];
    $articulos=addCliente($cliente_num,$cliente_nom,$cliente_dir,$cliente_loc,$cliente_tel);
    