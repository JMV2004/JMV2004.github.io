<html>
<head>
	<title>Registrar</title>
</head>
<body>
	<?php
		$server="localhost";
		$usuario="root";
		$contraseña="";
		$bd="sublime";

		$conexion= mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("Error en la conexión....");

		$nombre = $_POST['txtnombre'];
		$apellido = $_POST['txtapellido'];
		$edad = $_POST['txtedad'];
		$dni = $_POST['txtdni'];
		$email = $_POST['txtemail'];
		$pes = $_POST['txtpes'];
		$sueldo = $_POST['txtsueldo'];
		$bds = $_POST['txtbds'];
		$sexo = $_POST['cmbsexo'];

		$insertar = "INSERT into datos values ('$nombre','$apellido', '$edad', '$dni', '$email','$pes', '$sueldo', '$bds', '$sexo')";

		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros...");

		mysqli_close($conexion);
		echo "Datos insertados correctamente...";
	?>
	<form action= "verregistro.php">
		<input type= "submit" value= "Ver Registros">
	</form>

</body>
</html>