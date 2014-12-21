<?php
//La Base de datos ya existe----------------------***********************************
//Establercer una Conexión

$conexion = mysqli_connect("localhost","nicogarrido","nicogarrido","EvaluacionDeImpacto");

if (!$conexion) {
  echo "Error para conectar: " . mysqli_connect_error();
}

$consulta = "DROP TABLE IF EXISTS Impactos, Usuarios, Logs;";
if (mysqli_query($conexion,$consulta)) {
  echo "La Tabla de Impactos, Usuarios y Logs fueron reseteada<br>";
} else {
  echo "Error eliminando la tablas: " . mysqli_error($conexion);
}


$consulta = 
<<<SQL
CREATE TABLE Impactos(
idImpacto Int Not Null AUTO_INCREMENT,
primary key(idImpacto),
idUsuario Int Not Null,
NombreImpacto Char(40) Not Null,
Monto Float
); 
SQL;

if (mysqli_query($conexion,$consulta)) {
  echo "La Tabla de Impactos fue creada<br>";
} else {
  echo "Error con la tabla de Impactos: " . mysqli_error($conexion);
}


//Insertar contenido

$consulta = "INSERT INTO Impactos VALUES (Null,1,'Probando',100.0);";
if( mysqli_query($conexion,$consulta)){
	echo "Datos Agregados<br>";
}else{
	echo "Error Agregando Datos: " . mysqli_error($conexion);
}

$consulta = "INSERT INTO Impactos VALUES (Null,2,'Probando',110.0);";
if( mysqli_query($conexion,$consulta)){
	echo "Datos Agregados<br>";
}else{
	echo "Error Agregando Datos: " . mysqli_error($conexion);
}

//Cerrar la conexión
mysqli_close($conexion);

//CREAR UNA TABLA DE USUARIOS----------------------***********************************

//Establercer una Conexión
$conexion = mysqli_connect("localhost","nicogarrido","nicogarrido","EvaluacionDeImpacto");
if (!$conexion) {
  echo "Error para conectar: " . mysqli_connect_error();
}

//Crear Tabla
$consulta = 
<<<SQL
CREATE TABLE Usuarios(

idUsuario Int Not Null AUTO_INCREMENT,
Primary Key(idUsuario),
Nombre Char(40) Not Null,
Apellido Char(60) Not Null,
Email Char(100) Not Null,
contrasena Char(40) Not Null,
tipoUsuario Int Not Null

); 

SQL;

if (mysqli_query($conexion,$consulta)) {
  echo "La Tabla de Usuarios fue creada<br>";
} else {
  echo "Error con la tabla de Usuarios: " . mysqli_error($conexion);
}
//Insertar contenido
$consulta = 
<<<SQL
INSERT INTO Usuarios VALUES (Null,'Nicolas','Garrido','nicogarrido@gmail.com','123abc',1);
SQL;

if (mysqli_query($conexion,$consulta)) {
  echo "Dato a Tabla Usuarios agregado<br>";
} else {
  echo "Error agregando con la tabla de Usuarios: " . mysqli_error($conexion);
}

$consulta = 
<<<SQL
INSERT INTO Usuarios VALUES (Null,'Patricio','Aroca','parocasss@gmail.com','123abc',1);
SQL;

if (mysqli_query($conexion,$consulta)) {
  echo "Dato a Tabla Usuarios agregado<br>";
} else {
  echo "Error agregando con la tabla de Usuarios: " . mysqli_error($conexion);
}


//Cerrar la conexión
mysqli_close($conexion);

//CREAR UNA TABLA DE LOGS----------------------***********************************

//Establercer una Conexión
$conexion = mysqli_connect("localhost","nicogarrido","nicogarrido","EvaluacionDeImpacto");
if (!$conexion) {
  echo "Error para conectar: " . mysqli_connect_error();
}

//Crear Tabla
$consulta = 
<<<SQL
CREATE TABLE Logs(

utc Int,
anio Int,
mes Int, 
dia Int,
hora Int,
minuto Int,
segundo Int,
IP char(50),
Navegador char(100),
idUsuario Float
); 

SQL;

if (mysqli_query($conexion,$consulta)) {
  echo "La Tabla de Logs fue creada<br>";
} else {
  echo "Error con la tabla de Logs: " . mysqli_error($conexion);
}
//Insertar contenido
$consulta = 
<<<SQL
INSERT INTO Logs VALUES (00000000,1,2,3,4,5,6,'127.0.0.1','chrome',1);
SQL;

if (mysqli_query($conexion,$consulta)) {
  echo "Datos agregados a Logs<br>";
} else {
  echo "Error agregando datos en Logs: " . mysqli_error($conexion);
}
//Cerrar la conexión
mysqli_close($conexion);


?>