<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//creamos el socket para conectar con la BD
  $bd_host = "192.168.1.153"; 
  $bd_usuario = "Alberto"; 
  $bd_password = "moya_24"; 
  $bd_base = "ejercicio"; 
  
  $conexionss = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $conexionss); 
  
  //hacemos una consulta para ver nuestor numero de folio 
    $queryss="SELECT num  FROM folio";
  $resultadoss=mysql_query($queryss,$conexionss);
  
  while ($mostrar=mysql_fetch_array($resultadoss))
    {
    $folio=$mostrar['num'];
    }
      if (@$folio=="")//si el folio esta en 0 o vacio entonces valdra 1
        {
        echo $folio=1;
        }else {echo $folio++;} // si vale por lo menos uno sumale uno


        
?>
