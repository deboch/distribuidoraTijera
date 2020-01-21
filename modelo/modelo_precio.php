<?php
require("../conexion.php");
function getlistaPrecios(){
    $conn = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, pv.G, pv.S, pv.B, pv.V FROM articulo a JOIN precio_venta pv ON a.codigo=pc.codigo";
    $result = mysqli_query($conn, $sql);
    
    $articulos = Array();

    if(mysqli_num_rows($result)> 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $articulo= Array();
            $articulo['codigo'] = $row["codigo"];
            $articulo['descripcion'] = $row["descripcion"];
            $articulo['G'] = $row["G"];
            $articulo['S'] = $row["S"];
            $articulo['B'] = $row["B"];
            $articulo['V'] = $row["V"];
            $articulos[] = $articulo;
        }
    }
    else{
        echo "No se encontro coincidencias";
    }

    mysqli_close($conn);
    return $articulos;

}
function getlistaPreciosVentas(){
    $conn = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, pv.G, pv.S, pv.B, pv.V FROM articulo a JOIN precio_venta pv ON a.codigo=pv.codigo";
    $result = mysqli_query($conn, $sql);

    $articulos = Array();

    if(mysqli_num_rows($result)> 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $articulo= Array();
            $articulo['codigo'] = $row["codigo"];
            $articulo['descripcion'] = $row["descripcion"];
            $articulo['G'] = $row["G"];
            $articulo['S'] = $row["S"];
            $articulo['B'] = $row["B"];
            $articulo['V'] = $row["V"];
            $articulos[] = $articulo;
        }
    }
    else{
        echo "No se encontro coincidencias";
    }

    mysqli_close($conn);
    return $articulos;

}
function getPrecioArticulo($codigo){
    $con = getConexion(); 
    $sql = "SELECT a.codigo, a.descripcion, pc.G, pc.S, pc.B, pc.V FROM articulo a JOIN precio_venta pc ON pc.codigo= '$codigo' AND a.codigo = '$codigo'";
    $result=mysqli_query($con,$sql);
    $articulos = Array();

    if(mysqli_num_rows($result)> 0)
        {
            while ($row=mysqli_fetch_assoc($result))
            {
                $articulo = Array();
                $articulo['codigo'] = $row["codigo"];
                $articulo['descripcion'] = $row["descripcion"];
				$articulo['G'] = $row["G"];
				$articulo['S'] = $row["S"];
				$articulo['B'] = $row["B"];
				$articulo['V'] = $row["V"];
				$articulos[] = $articulo;
            }
        } else {
            echo "No se encontro coincidencias";
        }

    
    mysqli_close($con);
    return $articulos;
}
function updatePrecioVentaArticulo($id, $G, $S, $B, $V){
    $conn = getConexion();
    
    $sql2 = "UPDATE precio_venta set precio_venta.G='$G', precio_venta.S='$S', precio_venta.B= '$B', precio_venta.V='$V' WHERE precio_venta.codigo='$id'";
    
    $result = mysqli_query($conn, $sql2);
    $articulos=getlistaPreciosVentas();
    mysqli_close($conn);
    return $articulos;

}
function updatePrecio($tipo, $porcentaje){
    $conn = getConexion();
    $bonificacion= (1+($porcentaje/100));
    
    switch($tipo){
        
        case 'general':
            $sql = "UPDATE precio_venta set precio_venta.G=precio_venta.G*'$bonificacion',precio_venta.S=precio_venta.S*'$bonificacion',precio_venta.B=precio_venta.B*'$bonificacion', precio_venta.V=precio_venta.V*'$bonificacion'";
            $result = mysqli_query($conn, $sql);         
            break;
        case 'G':
            $sql = "UPDATE precio_venta set precio_venta.G=precio_venta.G*'$bonificacion'";
            $result = mysqli_query($conn, $sql);        
            break;
        case 'S':
            $sql = "UPDATE precio_venta set precio_venta.S=precio_venta.S*'$bonificacion'";
            $result = mysqli_query($conn, $sql);
            break;
        case 'B':
            $sql = "UPDATE precio_venta set precio_venta.B=precio_venta.B*'$bonificacion'";
            $result = mysqli_query($conn, $sql);
            break;
        case 'V':
            $sql = "UPDATE precio_venta set precio_venta.V=precio_venta.V*'$bonificacion'";
            $result = mysqli_query($conn, $sql);
            break;
    }

    $articulos=getlistaPreciosVentas();
    mysqli_close($conn);
    return $articulos;
}