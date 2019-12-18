<?php
include("../modelo/modelo_cliente.php");
$clientes=getClientes();


if(isset($_GET["submit"])){
    $nro_cliente=$_GET['numero'];
    deleteCliente($nro_cliente);
    include("../vista/clientes.php");
}