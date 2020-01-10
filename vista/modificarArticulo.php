<html>
<head>
</head>
<body>
<div class="container">
        <?php 
        $articulo_seleccionado =$_GET['codigo'];
        $articulo_descr =$_GET['descripcion'];
        $articulo_g =$_GET['G'];
        $articulo_s =$_GET['S'];
        $articulo_b =$_GET['B'];
        $articulo_v =$_GET['V'];
        echo "<h1>Modificar artículo: ". $articulo_seleccionado." descrpcion:".$articulo_descr."</h1>";
        ?>
       
                    <h3>Articulo</h3>
                    <h3>Descripcion</h3>
                    <h3>G($)</h3>
                    <h3>S($)</h3>
                    <h3>B($)</h3>
                    <h3>V($)</h3>
                    <h3></h3>
                    <h3></h3>
               
</div>
</body>
</html>