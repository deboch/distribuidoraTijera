<?php
require("../conexion.php");
function getlistaArticulos(){
	$conn = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, a.eje, a.aloj, a.esp, a.form, a.giro, pc.G, pc.S,pc.B,pc.V FROM articulo a ,precio_venta pc WHERE a.codigo=pc.codigo";
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

function getArticulo($search){
	$con = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, a.eje, a.aloj, a.esp, a.form, a.giro, pc.G, pc.S, pc.B, pc.V FROM articulo a, precio_venta pc WHERE a.codigo='$search' AND a.codigo=pc.codigo";
    $result = mysqli_query($con, $sql);
    if(!result){
        die('Query Error'. mysql_error($con));
    }
    $articulos = Array();
    // if(mysqli_num_rows($result) > 0)
    // {
    while ($row = mysqli_fetch_array($result))
    {
        $articulos[] = array(
            'codigo' => $row['codigo'],
            'descripcion' => $row['descripcion'],
            'eje' => $row['eje'],
            'aloj' => $row['aloj'],
            'esp' => $row['esp'],
            'form' => $row['form'],
            'giro' => $row['giro'],
            'G'=> $row['G'],
            'S' => $row['S'],
            'B' => $row['B'],
            'V' => $row['V']
        );
        // $articulo= Array();
        // $articulo['codigo'] = $row["codigo"];
		// $articulo['descripcion'] = $row["descripcion"];
        // $articulo['eje'] = $row["eje"];
        // $articulo['aloj'] = $row["aloj"];
        // $articulo['esp'] = $row["esp"];
        // $articulo['form'] = $row["form"];
        // $articulo['giro'] = $row["giro"];
        // $articulo['G'] = $row["G"];
        // $articulo['S'] = $row["S"];
        // $articulo['B'] = $row["B"];
        // $articulo['V'] = $row["V"];
        // $articulos[] = $articulo;
    }
    // }
    // else{
    //     // echo "No se encontro coincidencias";
        
    // }
    $articulosString= json_encode($articulos);
    echo $articulosString;
    
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

function deleteArticulo($nro_art){
    $conn = getConexion();
    $delete = "DELETE FROM articulo WHERE codigo='$nro_art'";
    $result = mysqli_query($conn,$delete);
    if($result){
        echo "<script>alert('El artículo fué eliminado con éxito.'); window.location.href='../vista/articulos.php?';</script>";
    }
    mysqli_close($conn); 
    
}


function addArticulo($articulo,$descripcion,$eje,$aloj,$esp,$form,$giro,$G,$S,$B,$V){
    $conn = getConexion();
    $inserART = "INSERT INTO articulo (codigo,eje,aloj,esp,form,giro,descripcion) values  ('$articulo', '$eje', '$aloj','$esp','$form','$giro','$descripcion' )";
    $inserPcosto = "INSERT INTO precio_costo (codigo,G,S,B,V) values  ('$articulo','$G', '$S', '$B', '$V')";
    $inserPventa = "INSERT INTO precio_venta (codigo,G,S,B,V) values  ('$articulo','$G', '$S', '$B', '$V')";
    $result = mysqli_query($conn, $inserART);
    $result = mysqli_query($conn, $inserPcosto);
    $result = mysqli_query($conn, $inserPventa);
    if($result){
        echo "<script>alert('El cliente fué agregado con éxito.'); window.location.href='../vista/articulos.php?';</script>";
    }
    mysqli_close($conn);
}