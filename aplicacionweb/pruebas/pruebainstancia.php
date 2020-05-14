<?php
	//importar la clase requerida
	require "../model/usuario.class.php";

	//crear una instancia

	$user = new Usuario();

	//imprimir los valores por default

	echo "Id = ".$user->getId();
	echo "Nombre = ".$user->getNombre();
?>