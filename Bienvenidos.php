<?php

include("Login/user.php");

include("header_user.php");

 if($dep=="Sistemas"){
    print "<script>window.location='login.php';</script>";
   }

  if($usuario_final=="Administrador"){
    print "<script>window.location='login.php';</script>";
   }

    if($usuario_final=="USCAMEX"){
    print "<script>window.location='login.php';</script>";
   }

   

 

?> 

       

<div class="team ">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                <div>

              
  

</div>
                    <h3>Bienvenido  <?php echo $nombre1; ?></h3> 
    
                    <!--<h3>Bienvenido</h3>-->
                </div>
            </div>
            

             
            


             <?php if ($oficina1=='CDMX') {  ?>
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="GLOC biblioteca/">
                            <i class="fa fa-book" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Biblioteca</h6>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>



             
            <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="Clima GLOC/" >
                            <i class="fa fa-cloud" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Clima</h6>
                        </a>
                    </div>
                </div>
            </div>
            

            <?php if ($oficina1=='CDMX') {  ?>
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

          <?php } ?>

          <?php if ($oficina1=='LAREDO') {  ?>
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

          <?php } ?>

           <?php if ($oficina1=='GDL') {  ?>
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

          <?php } ?>

          


           <?php if ($usuario_final=='erick_b') { ?>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="imagenes.php">
                            <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Imágenes</h6>
                        </a>
                    </div>
                </div>
            </div>
              
            <?php } ?>




          <?php if ($oficina1!='GDL' && $oficina1!='CDMX' && $oficina1!='LAREDO') {  ?>

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
             <?php } ?>

              
            
             <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="GLOC noticias/">
                            <i class="fa fa-newspaper-o" style="font-size:60px; color:#003463" aria-hidden="true"></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Noticias</h6>
                        </a>
                    </div>
                </div>
            </div>

            
           
        

         



             <?php if ($PBI!='') { ?>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="powerbi/validar/powerbi.php">
                            <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Power Bi</h6>
                        </a>
                    </div>
                </div>
            </div>
              
            <?php } ?>

            

            <?php if ($usuario_final=='andres_d') { ?>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="powerbi/Alta_excel.php">
                            <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Power Bi</h6>
                        </a>
                    </div>
                </div>
            </div>
              
            <?php } ?>

              <?php if ($oficina1=='CDMX') {  ?>
      
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

            <?php } ?>

           

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

              

             <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="/Tickets/index.php" >
                            <i class="fa fa-laptop" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Ticket Sistemas</h6>
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
                        <a href="validar/tck_users.php" >
                            <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Tus Tickets</h6>
                        </a>
                    </div>
                </div>
            </div>

             

            

           

            <?php if ($usuario_final=='andres_d') { ?>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="powerbi/validar/TablaPBI2.php">
                            <i class="fa fa-files-o" aria-hidden="true" style="font-size:60px; color:#003463" ></i>
                           <h6 style="font-size:15px; color:#003463; font-weight: 700;" >Ver PowerBi</h6>
                        </a>
                    </div>
                </div>
            </div>
              
            <?php } ?>


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


                 <?php if ($usuario_final=='tomas_ca') { ?>

               <div class="col-xs-12 col-sm-4 custom-margin-bottom">
                <div class="members zoom clearfix">
                    <div class="members-text col-xs-12 text-center">
                        <a href="DescargarArchivos/ArchivoTickets.php">
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
//include ('notificacion_usuarios.php');
?>



