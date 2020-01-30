<?php

    //header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    //session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    //if (isset($_SESSION['usuario'])){
       // $cliente = $_SESSION['usuario'];
    //}else{
 //header('Location: login.php');//Aqui lo redireccionas al lugar que quieras.
   //  die() ;

    //}}

include("Login/user.php");

 if($dep=="Sistemas"){
    print "<script>window.location='login.php';</script>";
   }

  if($usuario_final=="Administrador"){
    print "<script>window.location='login.php';</script>";
   }

   if ($oficina1=="CDMX") {
  $nueva_oficina="CDMX";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";
}elseif ($oficina1=="AEROPUERTO") {
   $nueva_oficina="AEROPUERTO";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";
}elseif($oficina1=="ALT"){
   $nueva_oficina="ALT";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";
}elseif($oficina1=="GDL"){
   $nueva_oficina="GDL";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";

}elseif($oficina1=="MZO"){
  $nueva_oficina="MZO";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";

}elseif($oficina1=="MTY"){
  $nueva_oficina="MTY";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";
}elseif($oficina1=="LAREDO"){
  $nueva_oficina="LAREDO";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";
}elseif($oficina1=="LZC"){
  $nueva_oficina="LZC";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";

}
elseif($oficina1=="QRO"){
  $nueva_oficina="QRO";
  $noticia="SELECT * FROM imagenes_intercom WHERE oficina='$nueva_oficina' and destino='Extensiones' OR oficina='F' and destino='Extensiones' ORDER BY id DESC LIMIT 5";

}


?>
<?php 
    require('conexion/connect.php');
    
    
        
    $noticias=$con->query($noticia);

    function recortar_texto($texto, $limite=100){  
    $texto = trim($texto);
    $texto = strip_tags($texto);
    $tamano = strlen($texto);
    $resultado = '';
    if($tamano <= $limite){
        return $texto;
    }else{
        $texto = substr($texto, 0, $limite);
        $palabras = explode(' ', $texto);
        $resultado = implode(' ', $palabras);
        $resultado .= '...';
    }  
    return $resultado;
    }
?>
<html>
<link rel="icon"  href="Inicio/GLOC.png" type="image/x-icon">
<title>DIRECTORIO MOVIL</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style-menu.css">

<script src="jss/jquery-2.2.0.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="csss/style.css" media="screen">
<link rel="stylesheet" href="css/grid.css" media="screen">
<link rel="stylesheet" href="css/fonts.css" media="screen">
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<script src="jss datatable/jquery-1.7.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
</script>



<!--==========EXTENSIONES==============-->
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylebienvenido.css">

<body>
<center>
       <a href="GLOC/Bienvenidos.php">
    <div class="logo"><img alt="intercomls" style="width: 140px; height: 80px; text-align: center;" src="extensiones/Inicio/GLOC.png" class="align-right"/>
    <div align="right" class="menuwelcome">
    </a>
    <a href="#menu">MENÚ</a>

      <!--<a class="navbar-brand" href="#">NOTIFICACIONES</a>-->
     
    <!--<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><i class="fa fa-bell" aria-hidden="true" style="font-size:25px;"></i></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>-->

   </div>

    <nav id="menu"style="background-color: #ffffff">
        <ul class="links">

             <li><a href="GLOC/Bienvenidos.php" style="color:#003463;font-weight: 700;">Inicio</a></li>
                    <li  style="color:#003463;font-weight: 700;">Servicios</></li>
                    <ul class="nav">
             
                     <li  style="color:#003463;font-weight: 700;">Directorio</></li>
                    <ul class="links">

                       <?php if ($oficina1=='CDMX') { ?>
                        <li><a href="ExtensionesCG.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>
                    <?php  } ?>


                    <?php if ($oficina1=='GDL') { ?>
                        <li><a href="ExtensionesCG.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>
                    <?php  } ?>
                        
                       
                    </ul>
                         <li><a href="clima GLOC/"  style="color:#003463;font-weight: 700;">Clima</a></li>
                         
                         <li><a href="GLOC noticias/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
                         <li><a href="Tip Ecologico/"  style="color:#003463;font-weight: 700;">Tips</a></li>

                         <li  style="color:#003463;font-weight: 700;">Alta Ticket</></li>
                         <ul class="links">
                         
                         <!--<li><a href="index.php"  style="color:#003463;font-weight: 700;">Control de Calidad</a></li>-->
                         
                         <li><a href="Tickets/index.php"  style="color:#003463;font-weight: 700;">Sistemas</a></li>
                         </ul>
                       
                        <!--<li><a href="Ticket/Ticket 2018.aspx" style="color: #C0C0C0">Modificar Ticket</a></li>-->
                         <!--<li><a href="cumpleaños.php" style="color: #C0C0C0">Lista cumpleaños</a></li>
                         <li><a href="./php/logout.php">SALIR</a></li>-->
                         
                         

                        <!--<li><a href="agregar_cumpleaños.aspx" style="color: #C0C0C0">Subir cumpleaños</a></li>-->
                    <li><a href="cerrarsesion.php"  style="color:#003463;font-weight: 700;">Cerrar Sesión</a></li>   
                   </ul>

                   </ul>
                    

      </nav>  

           <div>
                    
         
                        
                        <!--<li><a href="Ticket/Ticket 2018.aspx" style="color: #C0C0C0">Modificar Ticket</a></li>-->
                         <!--<li><a href="cumpleaños.php" style="color: #C0C0C0">Lista cumpleaños</a></li>
                         <li><a href="./php/logout.php">SALIR</a></li>-->
                         
                         

                        <!--<li><a href="agregar_cumpleaños.aspx" style="color: #C0C0C0">Subir cumpleaños</a></li>-->
        

<div class="noticias">
        <div class="container">  
          <div class="grid_12">
                <div id="owl-demo" class="owl-carousel">
                <?php
                while ($not=$noticias->fetch_assoc()) {  $titulo= $not['titulo'];?>
                    <div class="item">
                        <div class="img_noticias" style="background-image:url(imagenesBotello1/Extensiones/<?php echo $not['imagen'];?>);">
                        </div>
                        <div class="text_noticias">
                            <!-- Secciones de Carousel !-->
                            
                            <h3><?php echo recortar_texto($titulo, 100);?></h3>
                           <br /><br />
                            <?php 
                            if($not['pdf']!=''){?>


                             <a  class="fancybox" href="imagenesBotello1/Extensiones/pdf/<?php echo $not['titulo'].'.pdf'; ?>" target="_blank" >Ver más >></a>
                          <?php }else{?>
                            <a  class="fancybox" href="#inline<?php echo $not['id'];?>" >Ver más >></a>
                          <?php }?>
                            <!-- LigthBox De Noticias !-->
                            <div id="inline<?php echo $not['id'];?>" style="width:500px;display: none;">
                            <h3 style="margin-bottom:2px;"><?php echo $not['titulo'];?></h3>
                            <br>
                            <img src="imagenesBotello1/Extensiones/300/<?php echo $not['imagen'];?>" style="width:100%; margin-bottom:10px;">
                                   
                        </div>          
                    </div>  
                    </div>
                <?php } ?>  
                
                </div>
                <!--extensiones===============================================================-->
                <script language="javascript">
               function doSearch() {
                   var tableReg = document.getElementById('tabladir');
                   var searchText = document.getElementById('searchTerm').value.toLowerCase();
                   for (var i = 1; i < tableReg.rows.length; i++) {
                       var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                       var found = false;
                       for (var j = 0; j < cellsOfRow.length && !found; j++) {
                           var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                           if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                               found = true;
                           }
                       }
                       if (found) {
                           tableReg.rows[i].style.display = '';
                       } else {
                           tableReg.rows[i].style.display = 'none';
                       }
                   }
               }
        </script>


          <form name="limpiar" method="post" action="#" action="">
        <table style="border-collapse:separate; border-spacing: 2px;margin: 0 auto;">
            <tr>
                <td class="auto-style3" background-color: #FFFFFF></td>
                <td class="auto-style4"> </td>
            </tr>
            <tr>
                <td class="auto-style2"><strong>Búsqueda por nombre (sin acentos)</strong></td>
                <td> <input id="searchTerm" type="text" onkeyup="doSearch()" style="background-color: #FFFFFF; width: 101%; height: 28px;" value="ENTER para mostrar tabla" onclick="this.value=''"; /></td>
                 
            </tr>
            <!--<input type="button" onclick="tableToExcel('tabladir', 'W3C Example Table')" value="Exportar a Excel">-->

        </table> 
       

         <div style="margin-right:auto;margin-left:auto;">
        </form>
<table cellspacing="0" rules="all" border="1" id="tabladir" style="border-collapse:separate; border-spacing: 5px;margin: 0 auto;" align="center">
            <tr>
                <td>NOMBRE</td>
                <td>PUESTO/DEPARTAMENTO</td>
                <td>TELEFONO</td>
                
                
                <td>LOCALIDAD</td>
                
                                
                
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from directorio_movil2 order by nombre asc";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['depto']; ?></td>
                <td><a href="sip:<?php echo $datos['telefono']?>" title="<?php echo $datos['telefono']; ?>"><img src="extensiones/Inicio/telefono.png" Height="35px" Width="35px" ></a></td>
               
                <td><?php echo $datos['localidad']; ?></td>

                
                
            </tr>
                
          <?php  } ?>
            
        </table>
        <br>
        </div>
            </div>

        
        <script src="extensiones/js/owl.carousel.js"></script>
        <!-- Control de Responsive Design !-->
        <script>
        $(document).ready(function() {
        $("#owl-demo").owlCarousel({
        autoPlay: 7000,
        items : 2,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet: [768,1],
        itemsTabletSmall: [568,1],
        itemsMobile: [0,1], 
        });
        });
        </script>
        
        </div>

    </div>
    </div>
<!--#####################banner####################-->
   <script src="extensiones/assetss/js/jquery.min.js"></script>
      <script src="extensiones/assets/js/jquery.scrollex.min.js"></script>
      <script src="extensiones/assets/js/skel.min.js"></script>
      <script src="extensiones/assets/js/util.js"></script>
      <script src="extensiones/assets/js/main.js"></script>
   
</body>
</html>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"facebook/fetch.php",
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





