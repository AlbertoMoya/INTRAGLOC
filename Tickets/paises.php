<?php

$conexion = mysqli_connect("192.168.1.153","Alberto","moya_24","ilog");

//$conexion = mysqli_connect("localhost","root","lozano","ilog");


$el_continente = $_POST['continente'];

$query = $conexion->query("SELECT * FROM problema WHERE idsolicitud = '$el_continente' order by problema");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . utf8_encode($row['problema']). '">' . utf8_encode($row['problema']) . '</option>' . "\n";
}
