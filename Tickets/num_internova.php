<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'soporte_num.php';

//USUARIOS//
$query='select * from usuario_i where ID_I = (select max(ID_I) from usuario_i)';
$query_resultado= mysqli_query($conexion,$query );

while($usuario_i = mysqli_fetch_array($query_resultado)){
    
    $valor_i=$usuario_i['ID_I'];
    //echo $valor;
    
    
}


    