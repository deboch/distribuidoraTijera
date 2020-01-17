<?php
require_once("../conexion.php");
function getBusqueda($codigo, $letra){
	$articulos = Array();
	switch($letra){
		case 'G':
				$conn = getConexion();
				$sql = "SELECT a.codigo as cod, a.descripcion as des, pc.G as tipo FROM articulo a, precio_costo pc   where (a.codigo=pc.codigo && a.codigo='$codigo')";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
						$articulo=Array();
						$articulo['codigo'] = $row['cod'];
						$articulo['tipo']=$letra;
						$articulo['descripcion'] = $row['des'];
						$articulo['precio'] = $row['tipo'];
						$articulos[]=$articulo;
					}
				} else {
					$articulos="NO HAY DATOS";
				}
				break;
		case 'S':
				$conn = getConexion();
				$sql = "SELECT a.codigo as cod, a.descripcion as des, pc.S as tipo FROM articulo a, precio_costo pc   where (a.codigo=pc.codigo && a.codigo='$codigo')";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$articulo=Array();
					$articulo['codigo'] = $row['cod'];
					$articulo['tipo']=$letra;
					$articulo['descripcion'] = $row['des'];
					$articulo['precio'] = $row['tipo'];
					$articulos[]=$articulo;
				}
				} else {
					$articulos="NO HAY DATOS";
				}
				break;
		case 'B':
				$conn = getConexion();
				$sql = "SELECT a.codigo as cod, a.descripcion as des, pc.B as tipo FROM articulo a, precio_costo pc   where (a.codigo=pc.codigo && a.codigo='$codigo')";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$articulo=Array();
					$articulo['codigo'] = $row['cod'];
					$articulo['tipo']=$letra;
					$articulo['descripcion'] = $row['des'];
					$articulo['precio'] = $row['tipo'];
					$articulos[]=$articulo;
				}
				} else {
					$articulos="NO HAY DATOS";
				}
				break;
		case 'V':
				$conn = getConexion();
				$sql = "SELECT a.codigo as cod, a.descripcion as des, pc.V as tipo FROM articulo a, precio_costo pc   where (a.codigo=pc.codigo && a.codigo='$codigo')";
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$articulo=Array();
					$articulo['codigo'] = $row['cod'];
					$articulo['tipo']=$letra;
					$articulo['descripcion'] = $row['des'];
					$articulo['precio'] = $row['tipo'];
					$articulos[]=$articulo;
				}
				} else {
					$articulos="NO HAY DATOS";
				}
				break;
	}
	
	
	
	 
	return $articulos;
}

function listar_factura(){
				
				$conn = getConexion();
				// $sql = "INSERT INTO tmp (id, tipo, descripcion, precio, cantidad) VALUES ('$codigo', '$tipo', '$descripcion', '$precio', '$cantidad')";
				// $insert = mysqli_query($conn, $sql);
				
				$sql2 = "SELECT id, codigo, tipo, descripcion, precio, cantidad from tmp";
				$result = mysqli_query($conn, $sql2);
				$listas=Array();
				
				if(mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
						$lista=Array();
						$lista['suma_total']=0;
						$lista['id'] = $row['id'];
						$lista['codigo'] = $row['codigo'];
						$lista['tipo']= $row['tipo'];
						$lista['descripcion'] = $row['descripcion'];
						$lista['precio'] = $row['precio'];
						$lista['cantidad'] = $row['cantidad'];
						$lista['total'] = $row['cantidad']*$row['precio'];
						$lista['suma_total'] = $lista['suma_total'] + $lista['total'];
						$listas[]=$lista;
					}
				} else {
					$listas="NO HAY DATOS";
				}
	return $listas;
}
function agregar($codigo, $tipo, $descripcion,$precio, $cantidad){
	$conn = getConexion();
	$sql = "INSERT INTO tmp (codigo, tipo, descripcion, precio, cantidad) VALUES ('$codigo', '$tipo', '$descripcion', '$precio', '$cantidad')";
	$insert = mysqli_query($conn, $sql);
	$listas = listar_factura();
	return $listas;
}
function eliminar_art($id, $tipo){
	$conn = getConexion();
	$sql = "DELETE FROM tmp WHERE id='$id' AND tipo='$tipo'";
	$delete = mysqli_query($conn, $sql);
	if($delete){
        echo "<script>window.location.href='../vista/factura.php?';</script>";
    }
	return $listas;
}
