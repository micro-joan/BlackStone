<?php

error_reporting(E_ERROR | E_PARSE);

$host = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
$basedatos = getenv('MYSQL_DATABASE', true) ?: getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER');
$pass  = getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD');


$conexion = mysqli_connect($host, $user, $pass, $basedatos)
or die("Error al conectar a la base de datos");
// UTF-8 conjunto de caracteres por defecto para conexión MySQL
mysqli_query ($conexion, "SET NAMES 'utf8'");
  
?>
