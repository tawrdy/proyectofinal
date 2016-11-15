<?php

include ("conexion.php");

$=$_REQUEST[''];
 
$query=" DELETE FROM film WHERE ='$' ";

$resultado= $conexion->query($query);
if($resultado){
	header("location: tabla.php");
}
else{
	echo 'NO HAS PODIDO ENTRAR A LA TABLA';
}


?>