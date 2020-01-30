

<?php
//creamos el socket para conectar con la BD
  $bd_host = "192.168.1.153"; 
  $bd_usuario = "Alberto"; 
  $bd_password = "moya_24"; 
  $bd_base = "ejercicio"; 
  
  $conexionss = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $conexionss); 
  
  //hacemos una consulta para ver nuestor numero de folio 
    $queryss="SELECT num  FROM folio";
  $resultadoss=mysql_query($queryss,$conexionss);
  
  while ($mostrar=mysql_fetch_array($resultadoss))
    {
    $folio=$mostrar['num'];
    }
      if (@$folio=="")//si el folio esta en 0 o vacio entonces valdra 1
        {
        $folio=1;
        }else {$folio++;} // si vale por lo menos uno sumale uno


        
?>


<!DOCTYPE html>
<html lang="en">
<head>
  
       <meta charset="UTF-8">
       <link rel="shortcut icon" type="image/x-icon" href="../logos/GLOC_ico.ico" />
       <title>Ticket de sistemas</title>
       <link rel="stylesheet" href="estilos.css">
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
       
        <div class="logo"><img alt="intercomls" style="width: 140px; height: 80px; text-align: center;" src="../Logo/GLOC.png" class="align-right"/></div></center>
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
                        
                        <li><a href="Directorio_extensiones.php"  style="color:#003463;font-weight: 700;">Extensiones</a></li>
                    </ul>
                         <li><a href="../clima GLOC"  style="color:#003463;font-weight: 700;">Clima</a></li>
                         
                         <li><a href="../Noticias GLOC/"  style="color:#003463;font-weight: 700;">Noticias</a></li>
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
            <form action="enviar.php" method="post" >
            
            
           <div class="form">
          <label>Número de Ticket:</label>
         
          <input type="text" name="numticket" value="<?php echo $folio; ?>" readonly="readonly">
          <?php 
       // include "../Login/user.php";
        error_reporting(0);
         ?>
          <input type="text" name="Usuario" value="<?php echo $nombre1; ?>" readonly="readonly" >
          <input type="text" name="Departamento" value="<?php echo $dep; ?>" readonly="readonly"  >
          <input type="text" name="Oficina" value="<?php echo $oficina1; ?>" readonly="readonly" >
                     <br />
<?php 
include "contador_soporte.php";
include "contador_internova.php";

?>
<input type="text" name="soporte" value="<?php echo $cont_soporte;?>">
<input type="text" name="internova" value="<?php echo $cont_internova;?>">
 

          <label >TIPO DE SOLICITUD:</label>
           <select  name="Solicitud" id="continentes" >
                  <option value="0">Seleccione...</option>
          
        </select>
          <br />

          <label >TIPO DE PROBLEMA:</label>
           <select name="Problema" id="paises">
          <option value="0">Seleccione...</option>
        </select>
          <textarea name="Descripcion" placeholder="Observación..." required></textarea>
        </div>
      
            
          </div>
           <div class="enviar-btn">
            
            <input type="submit" value="ENVIAR" id="boton">
      
           </div>
           </form>
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