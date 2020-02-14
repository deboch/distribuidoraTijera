
<?php

include_once("../controlador/controlador_precio.php");

?>
<!DOCTYPE html>
<html>
<?php
include("../head.php");
?>
<body>
    <?php
		include("../header.php");
    ?>
    <br><br><br>
    <button class="btn btn-primary btn-round float-right pdf" name="imprimir" value="Imprimir" onclick="imprimir();">
                <i class="material-icons">print</i> Imprimir
    </button>
    <button class="btn btn-info agregar offset-5 pdf" style="margin-bottom: 15px;"><a href="javascript:imprimir();" 
    style="color:white!important">IMPRIMIR</a></button>
    
    
    <div class="table-wrapper-scroll-y my-custom-scrollbar" id="aImprimir" class="aImprimir">    
        <table class="table table-bordered table-striped mb-0 display" id="example" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Art&iacuteculo</th>
                <th>Descripci&oacuten</th>
                <th>G($)</th>
                <th>S($)</th>
                <th>B($)</th>
                <th>V($)</th>
                <th class="pdf"></th>
               
            </tr>
            </thead>
            <tbody >
            <?php
                foreach ($articulos as $articulo){
                    echo "<tr>
                        <td>".$articulo['codigo']."</td>                             
                        <td>".$articulo['descripcion']."</td>
                        <td>".$articulo['G']."</td>
                        <td>".$articulo['S']."</td>
                        <td>".$articulo['B']."</td>
                        <td>".$articulo['V']."</td>
                        <td class='pdf'><a href='../vista/modificarPrecioArticulo.php?codigo=".$articulo['codigo']."&descripcion=".$articulo['descripcion']."&G=".$articulo['G']."&S=".$articulo['S']."&B=".$articulo['B']."&V=".$articulo['V']."'><i class='material-icons'>edit</i></a></td></a></td>
                                                
                    </tr>";
                }
            ?>
            </tbody>
        </table>         
    </div>
</body>
<script>
function imprimir(){
         var iconos = document.getElementsByClassName("pdf");
        // var titulo = document.getElementById("titulo");
         longitud = iconos.length;

         for (i=0;i<longitud;i++){
             iconos[i].style.display="none";
         }
        // titulo.style.color="black";
        // window.print();

    }
</script>
</html> 