
<?php include("Login/user.php");
  
  if($oficina1=='CDMX' || $oficina1=='GDL' || $oficina1=='LAREDO' ){ 

   if($dep=="Sistemas"){
    print "<script>window.location='login.php';</script>";
   }

  if($usuario_final=="Administrador"){
    print "<script>window.location='login.php';</script>";
   }

    ?>
    
 

<!DOCTYPE html>
<html>
<head>
    <link rel="icon"  href="Inicio/GLOC.png" type="image/x-icon">
    <title>INTRAGLOC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/ilog.css">-->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/stylebienvenido.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/notifications.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      

     <!--NOTIFICACION-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="comentarioFB/push.js/push.min.js"></script>


<!--###########modal-->

</head>
<body>
<center>
    <a href="GLOC/Bienvenidos.php" >   
    <div  class="logo"><img alt="intercomls" style="width: 140px; height: 80px; text-align: center;" src="logo/GLOC.png" class="align-right"/></div>
    </a>
    <div align="right" class="menuwelcome"> 
     
    
    <a href="#menu">MENÚ</a>
  


    </div>
    </center>
   <nav id="menu"style="background-color: #ffffff">
        <ul class="links">
                    
         
                    <li  style="color:#003463;font-weight: 700;">Servicios</></li>
                    <ul class="nav">
        
                    <ul class="links">

               <li><a href="GLOC/Bienvenidos.php" style="color:#003463;font-weight: 700;">Inicio</a></li>
                    
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

           <?php if ($oficina1=='LAREDO') {  ?>
            
            <li><a href="ExtensionesCG.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>

          <?php } ?>

            

              <li><a href="GLOC noticias/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
               <li><a href="Tip Ecologico/"  style="color:#003463;font-weight: 700;">Tips</a></li>
                        
                        
                    </ul>
         
                       
                        <!--<li><a href="Ticket/Ticket 2018.aspx" style="color: #C0C0C0">Modificar Ticket</a></li>-->
                         <!--<li><a href="cumpleaños.php" style="color: #C0C0C0">Lista cumpleaños</a></li>
                         <li><a href="./php/logout.php">SALIR</a></li>-->
                         
                         

                        <!--<li><a href="agregar_cumpleaños.aspx" style="color: #C0C0C0">Subir cumpleaños</a></li>-->
                    <li><a href="cerrarsesion.php"  style="color:#003463;font-weight: 700;">Cerrar Sesión</a></li>   
                   </ul>

                   </ul>
                    

      </nav>

      

<div class="team ">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                <div>

   
    
  
   
   
  

</div>
                    <h3>Seleccionar Extensión</h3> 
    
                    <!--<h3>Bienvenido</h3>-->
                </div>
            </div>
            
           
             
            
            
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="extensiones/">
                            <i class="fa fa-address-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                            <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Extensiones CDMX</h6>
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="extensiones gdl/">
                            <i class="fa fa-address-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                            <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Extensiones GDL</h6>
                        </a>
                    </div>
                </div>
            </div>

             <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="extensiones laredo/">
                            <i class="fa fa-address-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                            <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Extensiones Laredo</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="directorio_movil.php">
                            <i class="fa fa-address-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                            <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Móvil</h6>
                        </a>
                    </div>
                </div>
            </div>


             
            

             <!--<div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="Control calidad" >
                            <i class="fa fa-cc" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Ticket Control de Calidad</h6>
                        </a>
                    </div>
                </div>
            </div>-->
            

             
             
               
            
        </div>
    </div>
</div>
<!--#####################banner####################-->
   <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

</body>

</html>


<!-- Aquí comienza codigo de Notificación -->

    <?php 
include ('notificacion_usuarios.php');
?>

   

<?php }else{
  header('Location: login.php');
    error_reporting(0);
} ?>


