<?php

$host = "localhost";
$user = "root";
$pass = "";
$basedatos = "blackstone";
$conexion = mysqli_connect($host, $user, $pass, $basedatos)
or die("Error al conectar a la base de datos");
// UTF-8 conjunto de caracteres por defecto para conexión MySQL
mysqli_query ($conexion, "SET NAMES 'utf8'");
  
?>
