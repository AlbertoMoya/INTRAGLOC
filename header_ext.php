<?php 
include("Login/user.php");


  

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="/logos/GLOC_ico.ico" />
    <link rel="icon"  href="Inicio/GLOC.png" type="image/x-icon">
    <title>Bienvenido a INTRAGLOC</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/ilog.css">-->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/stylebienvenido.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Login/stylelogin1.css">


    <!--NOTIFICACION-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/notifications.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="comentarioFB/push.js/push.min.js"></script>
      
 
<!--########### popup-->
   <!--<link rel="stylesheet" type="text/css" href="popup/style-menu1.css"> -->
   <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>

<!--###########modal-->

</head>
<body class="imagenfondo">
 <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <img src="popup/imagen3.png" alt="">
           <div class="modal-body">
              <div class="container1">
      <div class="col-xs-12">
        
        <div class="ticket col-md-3 col-xs-12" >
        
          
        </div>
        <div class="col-md-4 col-xs-12 reloj">
          
        </div>
      </div>
    </div> 
       </div>
           <div class="modal-footer">
            
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>
 
  
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
                    
          <li><a href="Bienvenidos_ext.php" style="color:#003463;font-weight: 700;">Inicio</a></li>
                    
                    <ul class="nav">

                      

                       
              
                               <li><a href="GLOC Biblioteca ext/"  style="color:#003463;font-weight: 700;">Biblioteca</a></li>
                        

                          <li><a href="Clima GLOC ext/"  style="color:#003463;font-weight: 700;">Clima</a></li>
             


            
              
                <li><a href="ExtensionesCGext.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>

          

             <li><a href="directorio_movilext.php"  style="color:#003463;font-weight: 700;">Móvil</a></li>
                        
                        
                   

                         
                        
                         
                         <li><a href="GLOC noticias ext/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
                         <li><a href="Tip Ecologico ext/"  style="color:#003463;font-weight: 700;">Tips</a></li>

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

