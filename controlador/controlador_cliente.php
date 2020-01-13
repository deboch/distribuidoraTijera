<?php
include_once("../modelo/modelo_cliente.php");
$clientes=getClientes();


if(isset($_GET["numero"])){
    $nro_cliente=$_GET['numero'];
    deleteCliente($nro_cliente);
    
}
include_once("../vista/clientes.php");