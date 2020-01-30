<?php
  
  $BD_host = "192.168.1.153"; 
  $BD_usuario = "Alberto"; 
  $BD_password = "moya_24"; 
  $BD_base = "ilog";
  $Status = $_POST["tipo_status"];
  
  $numticket = $_POST["id_producto"];
  $descripcion2= $_POST["Descripcion2"];

  $conexion_S = mysqli_connect($BD_host, $BD_usuario, $BD_password, $BD_base);

   if (!$conexion_S) {
    echo "error a la conexion";
    
   }else {
    echo "Conexion a la base de datos correcta";
   }

   $Query = "UPDATE tcksistemas SET Status='$Status', Validar='No', Descripcion2='$descripcion2' WHERE numticket=$numticket";

   if (mysqli_query($conexion_S, $Query)) {
    echo "modificado correctamente"; 
   } else{
    echo "error al modificar";
   }
   mysqli_close($conexion_S);

 
  
 $confirmacion ="ticket Reactivado";
  echo '<script>alert("'.$confirmacion.'");</script>';
  print "<script>window.location='Tickets_users.php';</script>";

 


//echo "Tu numero de ticket es: ".$atributo1;

  ?>