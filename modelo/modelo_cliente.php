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
    $delete = "DELETE FROM cliente WHERE numero='$nro_cliente'";
    $result = mysqli_query($conn,$delete);
    if($result){
        echo "<script>alert('El cliente fué eliminado con éxito.'); window.location.href='../vista/clientes.php?';</script>";
    }
    mysqli_close($conn); 
    
}

function updateCliente($cliente_num, $cliente_nom, $cliente_dir, $cliente_loc, $cliente_tel){
    $conn = getConexion();
    $sql = "UPDATE cliente set  cliente.nombre='$cliente_nom', cliente.direccion='$cliente_dir',cliente.localidad='$cliente_loc',cliente.telefono='$cliente_tel' WHERE cliente.numero=$cliente_num";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('El cliente fué modificado con éxito.'); window.location.href='../vista/clientes.php?';</script>";
    }
    mysqli_close($conn);
  

}
function addCliente($cliente_num, $cliente_nom, $cliente_dir, $cliente_loc, $cliente_tel){
    $conn = getConexion();
    $sql = "INSERT INTO cliente (numero, nombre, direccion, localidad, telefono) values  ('$cliente_num', '$cliente_nom', '$cliente_dir', '$cliente_loc', '$cliente_tel' )";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('El cliente fué agregado con éxito.'); window.location.href='../vista/clientes.php?';</script>";
    }
    mysqli_close($conn);
}