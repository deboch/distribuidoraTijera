<?php
require("../conexion.php");
function getlistaArticulos(){
	$conn = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, a.eje, a.aloj, a.esp, a.form, a.giro, pv.G, pv.S, pv.B, pv.V FROM articulo a ,precio_venta pv WHERE a.codigo=pv.codigo";
    $result = mysqli_query($conn, $sql);

    $articulos = Array();
    if(mysqli_num_rows($result) > 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        
        {
            $articulo= Array();
            $articulo['codigo'] = $row["codigo"];
			$articulo['descripcion'] = $row["descripcion"];
            $articulo['eje'] = $row["eje"];
            $articulo['aloj'] = $row["aloj"];
            $articulo['esp'] = $row["esp"];
            $articulo['form'] = $row["form"];
            $articulo['giro'] = $row["giro"];
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

function getArticulo($codigo){
	$con = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, a.eje, a.aloj, a.esp, a.form, a.giro, pv.G, pv.S, pv.B, pv.V FROM articulo a, precio_venta pv WHERE a.codigo='$codigo' AND a.codigo=pv.codigo";
    $result = mysqli_query($con, $sql);

    $articulos = Array();
    if(mysqli_num_rows($result) > 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $articulo= Array();
            $articulo['codigo'] = $row["codigo"];
			$articulo['descripcion'] = $row["descripcion"];
            $articulo['eje'] = $row["eje"];
            $articulo['aloj'] = $row["aloj"];
            $articulo['esp'] = $row["esp"];
            $articulo['form'] = $row["form"];
            $articulo['giro'] = $row["giro"];
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

    mysqli_close($con);
    return $articulos;
}
