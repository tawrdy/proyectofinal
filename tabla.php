<?php

?>
<html>
	 <head> 
		<title> Buscar libro  </title>
	 </head>
<body>
<a href="logout.php"><h1><b>Cerrar Sesion</b></h1></a>
	<center>
		<table bgcolor="#B0C4DE" border="4">
			<thead>
			<tr>
				<th colspan="1"> <a href="usuario.php"> nuevo </a> </th>
				<th colspan="4"> lista de libros </th>
						
			</tr>
				
			</thead>
			<tbody>
				<tr>
					<td> nombre</td>
					<td> fecha</td>
					<td> link</td>
					
					
					<td colspan="2"> operaciones</td>
				</tr>
			<?php
				include("conexion.php");

				$query="SELECT*FROM libro";
				$resultado= $conexion->query($query);
				while($row=$resultado->fetch_assoc()){

				
			?>
			<tr>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['fecha']; ?></td>
				<td><?php echo $row['link']; ?></td>
				
                <td><a href="modificar.php?nombre= <?php echo $row['nombre']; ?>">Modificar</a></td>
				<td><a href="eliminar.php?nombre= <?php echo $row['nombre']; ?>" >Eliminar </a></td>
			</tr>
			<?php
                   }

			?>

			</tbody>

		</table>
	</center>
</body>
</html>