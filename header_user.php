<?php 
include("Login/user.php");

 //include("modal.php");

 $DB_HOST="192.168.1.153";
$DB_NAME= "ilog";
$DB_USER= "Alberto";
$DB_PASS= "moya_24";
//albertomoya_24
  # conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

     $sql_banner_top=mysqli_query($con,"select * from popup WHERE status_popup='Activo' and oficina='CDMX' ");
        while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){

 
if ($oficina1=='CDMX') { 
   
  include("modal.php");


     }

   }

     $sql_banner_top2=mysqli_query($con,"select * from popup WHERE status_popup='Activo' and oficina='F' ");
        while($rw_banner_top2=mysqli_fetch_array($sql_banner_top2)){



if ($oficina1!='CDMX') { 
  include("modalF.php");

     }

   }

?>


<!DOCTYPE html>
<html>
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145042097-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145042097-1');
</script>
    <link rel="icon"  href="../Inicio/GLOC.png" type="image/x-icon">
    <title>Bienvenido a INTRAGLOC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/ilog.css">-->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/stylebienvenido.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/notifications.css" />
    <link rel="stylesheet" type="text/css" href="../Login/stylelogin1.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--NOTIFICACION-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="comentarioFB/push.js/push.min.js"></script>

  
      
 

<!--###########modal-->

</head>
<body class="imagenfondo">
  
<center>
       
    <div class="logo"><img alt="intercomls" style="width: 140px; height: 80px; text-align: center;" src="logo/GLOC.png" class="align-right"/></div>


    <div align="right" class="menuwelcome"> 
     
    
    <a href="#menu">MENÚ</a>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><i class="fa fa-bell" aria-hidden="true" style="font-size:25px;"></i></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>


    </div>
    </center>
    <nav id="menu"style="background-color: #ffffff">
        <ul class="links">
                    
          <li><a href="Bienvenidos.php" style="color:#003463;font-weight: 700;">Inicio</a></li>
                    
                    <ul class="nav">

                       <li><a href="Tickets/index.php"  style="color:#003463;font-weight: 700;">Alta Ticket Sistemas</a></li>

                       <?php if ($oficina1=='CDMX') {  ?>
              
                               <li><a href="GLOC Biblioteca/"  style="color:#003463;font-weight: 700;">Biblioteca</a></li>
                         <?php } ?>

                          <li><a href="Clima GLOC/"  style="color:#003463;font-weight: 700;">Clima</a></li>
             


            <?php if ($oficina1=='CDMX') {  ?>
              
                <li><a href="ExtensionesCG.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>

          <?php } ?>

           <?php if ($oficina1=='GDL') {  ?>
            
            <li><a href="ExtensionesCG.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>

          <?php } ?>

             <li><a href="directorio_movil.php"  style="color:#003463;font-weight: 700;">Móvil</a></li>
                        
                        
                   

                         
                        
                         
                         <li><a href="GLOC noticias/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
                         <li><a href="Tip Ecologico/"  style="color:#003463;font-weight: 700;">Tips</a></li>

                         </ul>
                         
                         <!--<li><a href="Control calidad"  style="color:#003463;font-weight: 700;">Control de Calidad</a></li>-->
                         
                        
                         
                       
                        <!--<li><a href="Ticket/Ticket 2018.aspx" style="color: #C0C0C0">Modificar Ticket</a></li>-->
                         <!--<li><a href="cumpleaños.php" style="color: #C0C0C0">Lista cumpleaños</a></li>
                         <li><a href="./php/logout.php">SALIR</a></li>-->
                         
                         

                        <!--<li><a href="agregar_cumpleaños.aspx" style="color: #C0C0C0">Subir cumpleaños</a></li>-->
                    <li><a href="cerrarsesion.php"  style="color:#003463;font-weight: 700;">Cerrar Sesión</a></li>   
                   </ul>

                   </ul>
                    

      </nav>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

