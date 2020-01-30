<?php  //Conexion a la BD para crear el acumulado de los numeros de ticket
//creamos el socket para conectar con la BD
  $bd_host = "192.168.1.153"; 
  $bd_usuario = "Alberto"; 
  $bd_password = "moya_24"; 
  $bd_base = "ejercicio"; 
  $folio=$_POST['numticket'];
  $soporte=$_POST['soporte'];

  $conexionss = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $conexionss); 
  

  $queryss="insert into folio (num) values ('$folio')";
  $result=mysql_query($queryss,$conexionss);
     
  $correcto="Tu numero de Ticket es el: ".$folio;
  echo '<script>alert("'.$correcto.'");</script>';
  print "<script>window.location='../Bienvenidos.php';</script>";

?> 

