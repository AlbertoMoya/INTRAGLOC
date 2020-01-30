
<?php

    $usuarioAD=$_POST['usuario'];
    $usuariofinal=$usuarioAD;

     session_start();
     $_SESSION['usuario']=$usuariofinal;
    
?>

<?php

$pass = $_POST['clave'];

$usuario=$_SESSION['usuario'];
if ($usuario=='Administrador') {
  
   print "<script>window.location='../Accesos/Admin/Bienvenidos.php';</script>";
  
}

if ($usuario=='USCAMEX') {
  if ($pass=='FheT67a2') {
    print "<script>window.location='../USCAMEX/Bienvenidos.php';</script>";
  }
}

if ($usuario=='marina_l') {
  if ($pass=='ICP19rh') {
    
   print "<script>window.location='../Bienvenidos_ext.php';</script>";
  }

}





$userlogin = "glocad\\".$usuario;

$ldaptree = "OU=GRUPO LOGISTICO,DC=glocad,DC=local"; 


// conexión al servidor LDAP
$ldapconn = ldap_connect("glocad.local")
    or die("Could not connect to LDAP server.");

if ($ldapconn) {
    // realizando la autenticación
    $ldapbind = ldap_bind($ldapconn, $userlogin, $pass);
    // verificación del enlace
    if ($ldapbind) {

        $result = ldap_search($ldapconn,$ldaptree, "(samaccountname=$usuario)") or die ("Error in search query: ".ldap_error($ldapconn));
        $info = ldap_get_entries($ldapconn, $result);
        


        for ($i=0; $i < $info["count"]; $i++) { 
          //echo "tu nombre es: ". $info[$i]["cn"][0] . "<br />";
          if (isset($info[$i] ["cn"][0])) {
              if($usuario=="Administrador"){
                  print "<script>window.location='../Accesos/Admin/Bienvenidos.php';</script>";
                }
              
          }

          

         
        if(isset($info[$i]["department"][0])) {
                //echo "Departamento: ". $info[$i]["department"][0] ."<br /><br />";
                $departamento2=$info[$i]["department"][0];
                if($departamento2=="Sistemas"){
                  print "<script>window.location='../Sistemas/Bienvenidos.php';</script>";
                }
                elseif($departamento2=="Desarrollo"){

                   print "<script>window.location='../USCAMEX/Bienvenidos.php';</script>";
                }


            } else {
                //echo "Departamento: None<br /><br />";
            }

            

           

            print "<script>window.location='../GLOC/Bienvenidos.php';</script>";

        
    }  
 } else {
        $incorrecto="Usuario o contraseña incorrectos... Verifique por favor";
                    echo '<script>alert("'.$incorrecto.'");</script>';
                         print "<script>window.location='../login.php';</script>";
      } 
} 



?>