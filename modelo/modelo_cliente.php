<?php
require_once("../conexion.php");
function getClientes(){

    $conn = getConexion();
    $sql = "SELECT numero, nombre, direccion, localidad, telefono FROM cliente";
    $result = mysqli_query($conn, $sql);

    $clientes = Array();
    if(mysqli_num_rows($result)> 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $cliente= Array();
            $cliente['numero'] = $row["numero"];
            $cliente['nombre'] = $row["nombre"];
            $cliente['direccion'] = $row["direccion"];
            $cliente['localidad'] = $row["localidad"];
            $cliente['telefono'] = $row["telefono"];
            $clientes[] = $cliente;
        }
    }
    else{
        echo "No se encontro coincidencias";
    }

    mysqli_close($conn);
    return $clientes;
}
function deleteCliente($nro_cliente){
    $conn = getConexion();
    $sql = "DELETE from cliente where numero=$nro_cliente";
}