<html>
<head>
	<title>VerRegistros</title>
</head>
<body>
	<?php
		$server="localhost";
		$usuario="root";
		$contraseña="";
		$bd="sublime";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("Error en la conexion...");

		$consulta = mysqli_query($conexion, "SELECT * from datos" )
			or die ("Error al traer los datos...");

		echo "<table border = '1'>";
		echo "<tr>";
		echo "<th id= 'Nombres'>Nombre</th> ";
		echo "<th id= 'Apellidos'>Apellido</th> ";
		echo "<th id= 'Edad'>Edad</th> ";
		echo "<th id= 'DNI'>DNI</th> ";
		echo "<th id= 'Email'>Email</th> ";
		echo "<th id= 'Puesto En Sublimación'>Puesto En Sublimación</th> ";
		echo "<th id= 'Bono De Sueldo'>Bono De Sueldo</th> ";
		echo "<th id= 'Sexo'>Sexo</th> ";		
		echo "</tr>";

		while ($extraido = mysqli_fetch_array($consulta))
		{
			echo "<tr>";
			echo "<td>".$extraido["nombre"]."</td>";
			echo "<td>".$extraido["apellido"]."</td>";
			echo "<td>".$extraido["edad"]."</td>";
			echo "<td>".$extraido["dni"]."</td>";
			echo "<td>".$extraido["email"]."</td>";
			echo "<td>".$extraido["pes"]."</td>";
			echo "<td>".$extraido["bds"]."</td>";
			echo "<td>".$extraido["sexo"]."</td>";
			echo "</tr>";
		}

		mysqli_close($conexion);
			echo "</table>";
	?>
</body>
</html>