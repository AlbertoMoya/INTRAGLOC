

<?php

set_time_limit(30);
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);

// config
$ldapserver = '192.168.1.155';//mail2.ilog.mx
$ldapuser      = 'GLOCAD\luis_l';  //GLOCAD\USUARIO
$usuario_final='luis_l';
//echo "Hola".$usuario_final;
 
$ldappass     = 'SUmem83w'; 
$ldaptree    = "OU=GRUPO LOGISTICO,DC=glocad,DC=local"; 

// connect 
$ldapconn = ldap_connect($ldapserver) or die("Could not connect to LDAP server.");

if($ldapconn) {
    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldapuser, $ldappass) or die ("Error trying to bind: ".ldap_error($ldapconn));
    // verify binding
    if ($ldapbind) {
        echo "CONEXION EXITOSA...<br /><br />";
        
        
    
        $result = ldap_search($ldapconn,$ldaptree, "(samaccountname=*)") or die ("Error in search query: ".ldap_error($ldapconn));
        $data = ldap_get_entries($ldapconn, $result);
        
        // SHOW ALL DATA
        //echo '<h1>Dump all data</h1><pre>';
        print_r($data);    
        //echo '</pre>';
        
        
        // iterate over array and print data for each entry
        
      

       
        
        

        
    } 

}

// all done? clean up
ldap_close($ldapconn);
?>