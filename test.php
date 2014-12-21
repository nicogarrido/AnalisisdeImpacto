
<?php
//CREAR UNA TABLA DE IMPACTO----------------------***********************************
//Establercer una Conexión

$conexion = mysqli_connect("localhost","nicogarrido","nicogarrido");

if (!$conexion) {
  echo "Error para conectar: " . mysqli_connect_error();
}

// Create database
$sql="CREATE DATABASE EvaluacionDeImpacto";
if (mysqli_query($conexion,$sql)) {
  echo "Se creo correctamente la base de Datos";
} else {
  echo "Error en el proceso de Creación de la Base: " . mysqli_error($conexion);
}

?>