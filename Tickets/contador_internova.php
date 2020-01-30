<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'soporte_num.php';
include 'num_internova.php';



//atributo

$numero_i=$valor_i;
//echo $valor;




//CONTADOR INTERNOVA 

$querys_internova="SELECT ID_I  FROM tcksistemas";
  $resultados_internova=mysqli_query($conexion, $querys_internova);
  
  while ($mostrari=mysqli_fetch_array($resultados_internova))
    {
    $cont_internova=$mostrari['ID_I'];
    }
      if (@$cont_internova=="")//si el folio esta en 0 o vacio entonces valdra 1
        {
         $cont_internova=1;
        
        }
        elseif ($cont_internova==$numero_i) {
             $cont_internova=1;
        }
        else { $cont_internova++;} // si vale por lo menos uno sumale uno
        
        
        ?>