<?php
  
 
 $BD_host = "192.168.1.153"; 
  $BD_usuario = "Alberto"; 
  $BD_password = "moya_24"; 
  $BD_base = "ilog";
  $atributo1= $_GET['numticket'];

  $conexion_S = mysqli_connect($BD_host, $BD_usuario, $BD_password, $BD_base);

   if (!$conexion_S) {
    echo "error a la conexion";
    
   }else {
    //echo "Conexion a la base de datos correcta";
   }

   $Query = "UPDATE tcksistemas SET Status='Resuelto', Validar='Si'  WHERE id=$atributo1";

   if (mysqli_query($conexion_S, $Query)) {
    //echo "modificado correctamente";
   } else{
    echo "error al modificar";
   }
   mysqli_close($conexion_S);

 
  
 $confirmacion ="ticket Validado";
  echo '<script>alert("'.$confirmacion.'");</script>';
  print "<script>window.location='Tickets_users.php';</script>";

 


//echo "Tu numero de ticket es: ".$atributo1;

  ?>