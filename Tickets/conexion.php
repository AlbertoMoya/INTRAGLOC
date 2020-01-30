<?php
    
     $servidor= "192.168.1.153";
     $usuario= "Alberto";
     $password="moya_24";
     $base_datos="ilog";

    

	$conn = mysqli_connect($servidor, $usuario, $password, $base_datos);
	if(!$conn){
		die ("No hay conexion a la base de datos". mysqli_connect_error());
	}

	
?>

