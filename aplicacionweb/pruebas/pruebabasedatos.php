<?php
	require "../config/conexion.class.php";
	require "../config/configdb.php";
	$conn = new Conexion($servidor,$usuario,$password,$dbname);

	$conn->obtenerConn();


?>