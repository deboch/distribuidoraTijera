<?php
require("../conexion.php");
function getlistaPrecios(){
    $conn = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, pc.G, pc.S, pc.B, pc.V FROM articulo a JOIN precio_costo pc ON a.codigo=pc.codigo";
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
    $sql = "SELECT a.codigo, a.descripcion, pc.G, pc.S, pc.B, pc.V FROM articulo a JOIN precio_costo pc ON pc.codigo= '$codigo' AND a.codigo = '$codigo'";
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
