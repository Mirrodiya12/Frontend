<?php

$servidor='localhost';
$usuario='root';
$pass='';
$bd='doo';

// Nos conectamos a la base de datos
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	

$conexion->set_charset('utf8');

if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}

// Url donde estara el proyecto, debe terminar con un "/" al final
$base_url="http://localhost/calendario/";

?>

