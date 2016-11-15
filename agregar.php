<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>
					Libro agregado
				</h2>
				<p>
				<?php
$nombre = $_POST ["nombre"];
$fecha = $_POST ["fecha"];
$link = $_POST ["link"];
try{
$conexion = new PDO("mysql:host=localhost;dbname=biblioteca","root","");
$resultados = $conexion->query("INSERT INTO libro (nombre, año, link,) VALUES ('$nombre', '$fecha' , '$link'");

echo "INSERT INTO libro (nombre, año, link) VALUES ('$nombre', '$fecha' , '$link')";

foreach ($resultados as $fila)
{

    echo "insertado";

}    



}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>