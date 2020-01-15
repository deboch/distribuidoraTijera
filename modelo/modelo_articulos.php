<?php
require("../conexion.php");
function getlistaArticulos(){
	$conn = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, a.eje, a.aloj, a.esp, a.form, a.giro, pc.G, pc.S,pc.B,pc.V FROM articulo a ,precio_costo pc WHERE a.codigo=pc.codigo";
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

function updateArticulo($cod ,$descr,$eje,$aloj,$esp,$form,$giro,$G,$S,$B,$V){
    $conn = getConexion();
    $updateArt = "UPDATE articulo set  articulo.descripcion='$descr', articulo.eje='$eje',articulo.aloj='$aloj',articulo.esp='$esp',articulo.form='$form',articulo.giro='$giro'WHERE articulo.codigo='$cod'";
    $updateCosto = "UPDATE precio_costo set  precio_costo.G='$G', precio_costo.S='$S',precio_costo.B='$B',precio_costo.V='$V' WHERE precio_costo.codigo='$cod'";
    $result = mysqli_query($conn, $updateArt);
    $result = mysqli_query($conn, $updateCosto);
    $articulos=getlistaArticulos();
    mysqli_close($conn);
    return $articulos;
}
