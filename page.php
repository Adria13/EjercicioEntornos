<?php

	header('Content-Type: text/html; charset=UTF-8');
	include("mostrardatos.php");
	include ("conectarDB.php");

	if (conectarBDA($host,$user,$password,$bda)) {
		echo "Conexion correcta";

		$consulta="SELECT * FROM Profesores";
			if ($paquete=consultar($consulta)) {
				echo mostrarDatos($paquete);
			}else{
				echo "No se encontraron datos";
			}
	}else{
		echo "Conexion incorrecta";
	}



?>