<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../estilos.css"/>
   
  
</head>
<body>
<?php 

include '../conexion/connect.php';

  //$conn = mysqli_connect('localhost','root' ,'lozano' ,'ilog');


$con->set_charset("utf8");
  if(!$con)
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
   $fecha_asignacion = date('d/m/y');
   $conf = $_POST['confirmacion'];

   if ($Problema !='' || $Solicitud !='') {
     



   ini_set('date.timezone', 'America/Mexico_City');
      $Time = date('H:i:s', time());
      $HoraInicio = date("g:i a", strtotime($Time));
                              
  if ($Solicitud=="Soporte") {
      // include "ticket_soporte.php"
      
        mysqli_query($con,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_S, ID_I, FechaAsignacion, Val_Solicitud, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', '$soporte_num', '$valori', '$fecha_asignacion', 'S', '$HoraInicio', '$fecha_asignacion', '$HoraInicio' )");  

 }elseif($Problema=='Alta Ciudad' ){


     
      mysqli_query($con,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_I, ID_S, FechaAsignacion, Val_Solicitud,RS, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', $Internova_num, $valors, '$fecha_asignacion', 'S','Silverio Perez', '$HoraInicio', '$fecha_asignacion', '$HoraInicio')");


 }
  elseif($Solicitud=="Internova" ){


     
      mysqli_query($con,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_I, ID_S, FechaAsignacion, Val_Solicitud, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', $Internova_num, $valors, '$fecha_asignacion', 'I', '$HoraInicio', '$fecha_asignacion', '$HoraInicio')");


 }  elseif($Solicitud=="USCAMEX" ){


     mysqli_query($con,"insert into tcksistemas (numticket, Usuario, Extension, Departamento, Oficina, Solicitud, Problema, Descripcion, ID_I, ID_S, FechaAsignacion, Val_Solicitud, HoraInicio, FechaValidar, HoraValidar) 
          values ($numticket, '$Usuario',$Extension, '$Departamento', '$Oficina', '$Solicitud', '$Problema','$Descripcion', '$valori', $valors, '$fecha_asignacion', 'N', '$HoraInicio', '$fecha_asignacion', '$HoraInicio')");

 }


 


   $sql = "SELECT * FROM tcksistemas";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                             $id = $row['id'];

                           }
                         }

    //Mensaje de confirmación
  //$confirmacion ="Ticket enviado al departamento de sistemas";
  //echo '<script>alert <font size=\"234\"><b>"._SECWELCOME."</b></font> ("'.$confirmacion.'");</script>';
 
   //echo"<a href='../Bienvenidos.php'>Regresar</a>";

  }else{

     $confirmacion2 ="FAVOR DE ELEGIR SOLICITUD Y PROBLEMA. ";
  echo '<script>alert("'.$confirmacion2.'");</script>';
  error_reporting(0);
  echo "<html><head></head>"."<body onload=\"javascript:history.back()\">".
"</body></html>";
      exit;
  }
 
 
  

   
?>  


    
   










