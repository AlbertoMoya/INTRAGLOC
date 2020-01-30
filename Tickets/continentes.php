<?php

$conexion = mysqli_connect("192.168.1.153","Alberto","moya_24","ilog");

//$conexion = mysqli_connect("localhost","root","lozano","ilog");

$query = $conexion->query("SELECT * FROM solicitud");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['Solicitud']. '">' . $row['Solicitud'] . '</option>' . "\n";
}
