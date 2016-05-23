<?php

	include("mostrardatos.php");
	include ("conectarDB.php");

	if (conectarBDA($host,$user,$password,$bda)) {
		echo "Conexion correcta <br>";

		$consulta = 'DELETE FROM profesores WHERE id ='. $_GET["id"];
		
		if ($consulta) {
				echo "Registro eliminado <br>";
				echo "Regresar al <a href='page.php'>Listado profesores</a><br>";
			}	
			

	}else{

		echo "Conexion incorrecta";
	}		

	var_dump($_GET)


?>


