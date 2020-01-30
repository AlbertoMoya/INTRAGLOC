<?php  session_start();  ?>



<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145042097-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145042097-1');
</script>

<link rel="shortcut icon" type="image/x-icon" href="logos/GLOC_ico.ico" />
 <link rel="icon"  href="Inicio/GLOC.png" type="image/x-icon">
<title>Iniciar Sesión</title>
 <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="Login/stylelogin.css">
    <br>
<body>
<br> 
<br> 
      

   
    <div class="loginbox">
    
        <h1></h1>
        <form role="form" name="login" action="Login/condicion2.php" method="post" >
             <div class="loginbox">
            <p>Usuario de tu máquina</p>
            <input type="text" name="usuario" placeholder="INGRESA USUARIO"  required>
            <p>Contraseña</p>
            <input type="password" name="clave" placeholder="INGRESA CONTRASEÑA" required>
            <input type="submit" name="" value="Login">
            <a href="manual.php"> Descarga el Manual de Usuario </a>
            
            <input type="text" name="diagonal" value="\" style="visibility:hidden">


        </form>
    </div>     

</body>
</head>
</html>