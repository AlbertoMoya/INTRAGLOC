<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'soporte_num.php';

//USUARIOS//
$query='select  * from tcksistemas order by id desc LIMIT 1';
$query_resultado= mysqli_query($conexion,$query );

while($usuarios1 = mysqli_fetch_array($query_resultado)){
    
    $valori=$usuarios1['ID_I'];
    //echo $valori;
    
    
}

