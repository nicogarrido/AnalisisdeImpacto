<?php

session_start();
//Obtener variables
$mail = $_POST['email'];
$contrasena = $_POST['password'];

$_SESSION['usuario'] = "";
//Se conecta a la base de datos
$conexion = mysqli_connect("localhost","nicogarrido","nicogarrido","EvaluacionDeImpacto");

//Consulta
$consulta = "SELECT * FROM Usuarios";
$resultado = mysqli_query($conexion,$consulta);

while($file = mysqli_fetch_array($resultado)){

	$mailbd = $file['Email'];
	$contrasenabd = $file['contrasena'];

	if ($mail == $mailbd & $contrasena == $contrasenabd){
		//Debería rescatar aquí la identificación del usuario
		$_SESSION['usuario'] = $file['Nombre'];
		mysqli_close($conexion);
		break;
	}
}

if ($_SESSION['usuario'] != ""){
	echo '
	<html>
	<head>
	<meta http-equiv="REFRESH" content="0;url=dashboard.html">
	</head>
	</html>
	';
}else{
		echo '
	<html>
	<head>
	<meta http-equiv="REFRESH" content="0;url=login.html">
	</head>
	</html>
	';
}

?>