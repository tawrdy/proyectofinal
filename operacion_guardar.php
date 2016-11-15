<?php

INCLUDE ("conexion.PHP");

$nombre = $_POST ["nombre"];
$fecha = $_POST ["fecha"];
$link = $_POST ["link"];

 
$query="INSERT INTO libro (nombre, fecha, link) VALUES ('$nombre', '$fecha' , '$link')";
echo $query;
$resultado= $conexion->query($query);

if($resultado){
	header("location: tabla.php");
}
else
{
	echo ' NO ENTRO A LA TABLA';
}

?>
