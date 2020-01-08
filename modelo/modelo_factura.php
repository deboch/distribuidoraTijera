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
					$articulo['codigo'] = $row['a.codigo'];
					$articulo['tipo']=$letra;
					$articulo['descripcion'] = $row['a.descripcion'];
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
					$articulo['codigo'] = $row['a.codigo'];
					$articulo['tipo']=$letra;
					$articulo['descripcion'] = $row['a.descripcion'];
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
					$articulo['codigo'] = $row['a.codigo'];
					$articulo['tipo']=$letra;
					$articulo['descripcion'] = $row['a.descripcion'];
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
function listar($codigo,$tipo,$descripcion,$precio){
				$conn = getConexion();
				$sql = "INSERT INTO 'tmp' (id, tipo, descripcion, precio) VALUES ('$codigo, '$tipo', '$descripcion', '$precio')";
				$insert = mysqli_query($conn, $sql);
				
				$sql2 = "SELECT id, tipo, descripcion, precio from tmp";
				$result = mysqli_query($conn, $sql2);
				if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$listas=Array();
					$lista['id'] = $row['id'];
					$lista['tipo']= $row['tipo'];
					$lista['descripcion'] = $row['descripcion'];
					$lista['precio'] = $row['tipo'];
					$listas[]=$lista;
				}
				} else {
					$listas="NO HAY DATOS";
				}
	return $listas;
}