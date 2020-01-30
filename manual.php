<?php
$mi_pdf = '//192.168.1.158/Sistemas/Manual_Intragloc/Manual de Usuario.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
readfile($mi_pdf);
?>