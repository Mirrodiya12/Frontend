<?php

// Datos de conexion a la base de datos
$servidor='localhost';
$usuario='root';
$pass='';
$bd='eventos';

//Conexion a la base de datos
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	

// Datos en utf8
$conexion->set_charset('utf8');

// verificamos si hubo algun error y lo mostramos
if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}

// Url donde estara el proyecto, debe terminar con un "/" al final
$base_url="http://localhost/calendario/";

?>

