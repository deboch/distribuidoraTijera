<?php
include("../modelo/modelo_articulos.php");
require_once("../conexion.php");
$articulos=getlistaArticulos();
if(isset($_POST['search'])){
 $search  = $_POST['search'];   
}


if(!empty($search)){
    $con = getConexion();
    $sql = "SELECT a.codigo, a.descripcion, a.eje, a.aloj, a.esp, a.form, a.giro, pc.G, pc.S, pc.B, pc.V FROM articulo a, precio_venta pc WHERE a.codigo='$search' AND a.codigo=pc.codigo";
    $result = mysqli_query($con, $sql);
    // if(!result){
    //     die('Query Error'. mysql_error($con));
    // }
    $articulos = Array();
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
    }
    $articulosString = json_encode($articulos);
    echo ($articulosString) ;
}
// if(isset($_GET["cod_art"])){
//     $codigo=$_GET['cod_art'];
//     $articulos="";
//     if($codigo!=0){
//         $articulos=getArticulo($codigo);
//     }else{
//         $articulos=getlistaArticulos();
//     }
    
// }    
if(isset($_GET["numero"])){
    $nro_art=$_GET['numero'];
    deleteArticulo($nro_art);
}

include_once("../vista/articulos.php");
