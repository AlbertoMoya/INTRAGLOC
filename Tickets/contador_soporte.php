<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'soporte_num.php';
include 'num_soporte.php';



//atributo

$numero=$valor;
//echo $valor;




//CONTADOR SOPORTE 

$querys_soporte="SELECT ID_S  FROM tcksistemas";
  $resultados_soporte=mysqli_query($conexion, $querys_soporte);
  
  while ($mostrar=mysqli_fetch_array($resultados_soporte))
    {
    $cont_soporte=$mostrar['ID_S'];
    }
      if (@$cont_soporte=="")//si el folio esta en 0 o vacio entonces valdra 1
        {
        $cont_soporte=1;
        
        }
        elseif ($cont_soporte==$numero) {
            $cont_soporte=1;
        }
        else {$cont_soporte++;} // si vale por lo menos uno sumale uno
        
        
        ?>

