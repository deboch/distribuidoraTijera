<?php
require("../conexion.php");
function getlistaArticulos(){
	$conn = getConexion();
    $sql = "SELECT codigo, descripcion, eje, aloj, esp, form, giro FROM articulo";
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
    $sql = "SELECT codigo, descripcion, eje, aloj, esp, form, giro FROM articulo where codigo= '$codigo'";
    $result = mysqli_query($con, $sql);

    $art = Array();
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
            $art[] = $articulo;
        }
    }
    else{
        echo "No se encontro coincidencias";
    }

    mysqli_close($con);
    return $art;
}
