<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host='192.168.1.153';
$user='Alberto';
$password='moya_24';
$database='ilog';

//$host='localhost';
//$user='root';
//$password='lozano';
//$database='ilog';


$conexion= mysqli_connect($host, $user, $password, $database);

if($conexion){
    //echo 'Conexion exitosa';
}else{
    echo 'error en la conexion';
}


        
        


