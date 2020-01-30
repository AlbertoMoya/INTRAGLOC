<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../estilos.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="../scriptControl.js"></script>
</head>
<body>
<?php 

  $conn = mysqli_connect('192.168.1.153','Alberto' ,'moya_24' ,'ilog');

  if(!$conn)
    {
    die ("No hay conexion a la base de datos". mysqli_connect_error());
    }
    include 'soporte_ultimo.php';
    include 'internova_ultimo.php';
   //atributos
   $numticket = $_POST["numticket"];
   $Usuario = $_POST['Usuario'];
   $Departamento = $_POST["Departamento"];
   $Extension = $_POST['Extension'];
   $Oficina = $_POST["Oficina"];
   $Solicitud = $_POST["Solicitud"];
   $Problema = $_POST["Problema"];
   $Descripcion = $_POST['Descripcion'];
   $soporte_num = $_POST['soporte'];
   $Internova_num = $_POST['internova']; 
   $fecha_asignacion = date('m/d/y');


   ini_set('date.timezone', 'America/Mexico_City');
      $Time = date('H:i:s', time());
      $HoraInicio = date("g:i a", strtotime($Time));
                              
  if ($Solicitud=="Soporte") {
      // include "ticket_soporte.php"
      
        mysqli_query($conn,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_S, ID_I, FechaAsignacion, Val_Solicitud, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', '$soporte_num', '$valori', '$fecha_asignacion', 'S', '$HoraInicio', '$fecha_asignacion', '$HoraInicio' )");  

 } elseif($Solicitud=="Internova" && $Problema=="Modificación a conceptos"){
     
      mysqli_query($conn,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_I, ID_S, FechaAsignacion, Val_Solicitud, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', '$valori', $valors, '$fecha_asignacion', 'C', '$HoraInicio', '$fecha_asignacion', '$HoraInicio')");




 }elseif($Solicitud=="Internova" ){


     
      mysqli_query($conn,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_I, ID_S, FechaAsignacion, Val_Solicitud, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', $Internova_num, $valors, '$fecha_asignacion', 'I', '$HoraInicio', '$fecha_asignacion', '$HoraInicio')");
 }

     
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

   $sql = "SELECT * FROM tcksistemas";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                             $id = $row['id'];

                           }
                         }

    //Mensaje de confirmación
  //$confirmacion ="Ticket enviado al departamento de sistemas";
  //echo '<script>alert <font size=\"234\"><b>"._SECWELCOME."</b></font> ("'.$confirmacion.'");</script>';
 
echo "<script> swal({
   title: 'Ticket enviado',
    text: 'Tu número de ticket es: $id',
   
  
 });
 
</script>";


 
 
  

   
?>  
    
   










