
<?php include("../Login/user.php");
  ude("../modal.php");

   include("modal.php");

?>

<!DOCTYPE html>
<html>
<head>
    
     <link rel="icon"  href="../Inicio/GLOC.png" type="image/x-icon">
    <title>Bienvenido a INTRAGLOC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/ilog.css">-->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/stylebienvenido.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/notifications.css" />
    <link rel="stylesheet" type="text/css" href="Login/stylelogin1.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--NOTIFICACION-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="comentarioFB/push.js/push.min.js"></script>
      


<!--###########modal-->

</head>
<body>
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
                    <li  style="color:#003463;font-weight: 700;">Servicios</></li>
                    <ul class="nav">
             
                     
                    <ul class="links">
                        
                        <li><a href="ExtensionesCG.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>

                        <li><a href="directorio_movil.php"  style="color:#003463;font-weight: 700;">Móvil</a></li>
                        

                    </ul>
                         <li><a href="Clima GLOC/"  style="color:#003463;font-weight: 700;">Clima</a></li>
                         
                         <li><a href="GLOC noticias/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
                            <?php if ($usuario_final!='angel_b') { ?>
                         <li><a href="validar/Ticket_Admin_Validar.php"  style="color:#003463;font-weight: 700;">Tickets Sistemas</a></li>
                     <?php  } ?>

                       <?php if ($usuario_final=='angel_b') { ?>
                         <li><a href="validar/Ticket_Admin_Validar2.php"  style="color:#003463;font-weight: 700;">Tickets Sistemas</a></li>
                      <?php } ?>
                         <li><a href="Tip Ecologico/"  style="color:#003463;font-weight: 700;">Tips</a></li>

                         
                       
                        <!--<li><a href="Ticket/Ticket 2018.aspx" style="color: #C0C0C0">Modificar Ticket</a></li>-->
                         <!--<li><a href="cumpleaños.php" style="color: #C0C0C0">Lista cumpleaños</a></li>
                         <li><a href="./php/logout.php">SALIR</a></li>-->
                         
                         

                        <!--<li><a href="agregar_cumpleaños.aspx" style="color: #C0C0C0">Subir cumpleaños</a></li>-->
                    <li><a href="../cerrarsesion.php"  style="color:#003463;font-weight: 700;">Cerrar Sesión</a></li>   
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
                    <h3>Bienvenido <?php echo $nombre1?></h3> 
    
                    <!--<h3>Bienvenido</h3>-->
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="GLOC biblioteca/">
                            <i class="fa fa-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >biblioteca</h6>
                        </a>
                    </div>
                </div>
            </div>
             
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="Clima GLOC/" >
                            <i class="fa fa-cloud" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >CLIMA</h6>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="ExtensionesCG.php">
                            <i class="fa fa-address-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                            <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Extensiones</h6>
                        </a>
                    </div>
                </div>
            </div>

             
            
             <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="GLOC noticias/">
                            <i class="fa fa-newspaper-o" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >NOTICIAS</h6>
                        </a>
                    </div>
                </div>
            </div>




            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="GLOC promociones/">
                            <i class="fa fa-tags" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Promociones</h6>
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
            <?php if ($usuario_final!='angel_b') { ?>
             
            
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="validar/Ticket_Admin_Validar.php" >
                            <i class="fa fa-laptop" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Ticket Sistemas</h6>
                        </a>
                    </div>
                </div>
            </div>
            <?php  } ?>


             <?php if ($usuario_final=='angel_b') { ?>
             
            
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="validar/Ticket_Admin_Validar2.php" >
                            <i class="fa fa-laptop" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Ticket Sistemas</h6>
                        </a>
                    </div>
                </div>
            </div>
            <?php  } ?>
           

            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="validar/Soluciones.php" >
                            <i class="fa fa-laptop" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Soluciones</h6>
                        </a>
                    </div>
                </div>
            </div>
              <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="Tip Ecologico/" >
                            <i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Tips</h6>
                        </a>
                    </div>
                </div>
            </div>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="Personal_INTERCOM.php">
                          <i class="fa fa-users" aria-hidden="true" style="font-size:60px; color:#003463"></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >PERSONAL DE GRUPO LOGISTICO</h6>
                        </a>
                    </div>
                </div>
            </div>


               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="../DescargarArchivos/ArchivoExtensiones.php">
                             <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Descargar Extensiones</h6>
                        </a>
                    </div>
                </div>
            </div>

               <?php if ($usuario_final=='alberto_m') { ?>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="../DescargarArchivos/ArchivoTickets.php">
                           <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Descargar Tickets</h6>
                        </a>
                    </div>
                </div>
            </div>
              
            <?php } ?>
               

            
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
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"notificaciones/fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>

<?php

include ('notificacion_sistemas.php');

?>