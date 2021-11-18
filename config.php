<?php 
	//conexion('servidor','usuario','contraseña','base de datos')
	$mysqli = new mysqli('localhost','root','','crudphp');
	if ($mysqli->connect_errno) {
		echo "Error al conectar la Base de Datos".$mysqli->connect_errno;
	}
?>