<?php
	
	$host = "localhost";
	$usuario = "root";
	$clave = "";
	$bd = "tecmobil";

	$conexion = mysqli_connect($host,$usuario,$clave,$bd);

	if ($conexion) {
		echo "Conectado";
	}else{
		echo "Error de BD.";
	}


?>