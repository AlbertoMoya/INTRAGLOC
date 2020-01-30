<?php

  $conexion = mysql_connect("192.168.1.153","Alberto","moya_24");
  mysql_select_db("ilog",$conexion);
  
  mysql_query("SET NAMES 'utf8'");
  
  //date_default_timezone_set("America/Mexico");
  /*
  function limpiar($tags){
    $tags = strip_tags($tags);
    $tags = stripslashes($tags);
    $tags = htmlentities($tags);
    $tags = mysql_real_escape_string($tags);
    return $tags;
  }
  */
   $consulta=ConsultarProducto($_GET['numticket']);

  function ConsultarProducto($no_prod)
  {
    $sentencia="SELECT * FROM tcksistemas WHERE numticket='$no_prod' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $filas=mysql_fetch_assoc($resultado);
    return [
      $filas['numticket'],
      $filas['Usuario'],
      $filas['Departamento'],
      $filas['Oficina'],
      $filas['Problema'],
      
      
      
      
    ];

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
       <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="../logos/GLOC_ico.ico" />
       <title>Revalidar Ticket</title>
       
       <link rel="stylesheet" href="estilosRev.css">
       <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/stylebienvenido.css">

    <!--combos anidados-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="../functions.js"></script>
      <script src="../unctions2.js"></script>
      <!--fin combos anidados-->
   </head>
   <body>
    <center>
       
    <div class="logo"><img alt="intercomls" style="width: 140px; height: 80px; text-align: center;" src="../logos/GLOC.png" class="align-right"/></div>
    <div align="right" class="menuwelcome">
    <a href="#menu">MENÚ</a>

      <!--<a class="navbar-brand" href="#">NOTIFICACIONES</a>-->
     
    </div>

  <nav id="menu"style="background-color: #ffffff">
        <ul class="links">
                    
          <li><a href="../Bienvenidos.php" style="color:#003463;font-weight: 700;">Inicio</a></li>
                    <li  style="color:#003463;font-weight: 700;">Servicios</></li>
                    <ul class="nav">
             
                     <li  style="color:#003463;font-weight: 700;">Directorio</></li>
                    <ul class="links">
                        <li><a href="Directorio_movil.php"  style="color:#003463;font-weight: 700;">Móvil</a></li>
                        <li><a href="Directorio_extensiones.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>
                    </ul>
                         <li><a href="clima GLOC"  style="color:#003463;font-weight: 700;">Clima</a></li>
                         <li><a href="dias festivos.php"  style="color:#003463;font-weight: 700;">Días Festivos</a></li>
                         <li><a href="Noticias GLOC/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
                         <li><a href="Atracción y Desarrollo/Tip Ecologico/"  style="color:#003463;font-weight: 700;">Tip Ecológico</a></li>

                         <li  style="color:#003463;font-weight: 700;">Alta Ticket</></li>
                         <ul class="links">
                         
                         <!--<li><a href="Control calidad"  style="color:#003463;font-weight: 700;">Control de Calidad</a></li>-->
                         
                         <li><a href="Alta Ticket sistemas.php"  style="color:#003463;font-weight: 700;">Sistemas</a></li>
                         </ul>
                       
                        <!--<li><a href="Ticket/Ticket 2018.aspx" style="color: #C0C0C0">Modificar Ticket</a></li>-->
                         <!--<li><a href="cumpleaños.php" style="color: #C0C0C0">Lista cumpleaños</a></li>
                         <li><a href="./php/logout.php">SALIR</a></li>-->
                         
                         

                        <!--<li><a href="agregar_cumpleaños.aspx" style="color: #C0C0C0">Subir cumpleaños</a></li>-->
                    <li><a href="../cerrarsesion.php"  style="color:#003463;font-weight: 700;">Cerrar Sesión</a></li>   
                   </ul>

                   </ul>
                    

      </nav>  

<div class="presentacion">
        
  <div class="img">
    <img src="fondo ticket.jpg">
  </div>
    <div class="producto-info">
      <div class="producto-texto">
        <form action="../no.php" method="post" >
            
            
<div class="form">
          <p class="numticket">Número de Ticket: <?php echo $consulta[0] ?> </p>
          <input type="hidden" id="id_producto" name="id_producto"; value="<?php echo $consulta[0] ?>" readonly="readonly" >  <br>
           
          <p > Usuario:  <?php echo $consulta[1] ?> </p> <br>
          <p ><label>Extensión: 546 </label></p> <br>
           <!--<input type="text" name="Extension"; value="Extension"> -->
          <p >Departamento: <?php echo $consulta[2] ?> </p> <br>
          <p >Oficina: <?php echo $consulta[3] ?> </p> <br>
          <p >Problema: <?php echo $consulta[4] ?> </p> <br>
           

           <textarea name="Descripcion2" placeholder="Observación..." required></textarea>  
            <br />
             <input type="hidden" name="tipo_status"; value="Reactivado">
</div>
                 
      
        <div class="enviar-btn" >            
            <input type="submit" value="Reactivar Ticket" id="boton">      
        </div>
           </form>
      </div> 
    </div>  
</div>    

      
      <!--#####################banner####################-->
   <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/jquery.scrollex.min.js"></script>
      <script src="../assets/js/skel.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="../assets/js/main.js"></script>
      


   </body>
</html>