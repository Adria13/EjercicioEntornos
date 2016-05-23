<?php

	include ("conectarDB.php");

	function conectarBDA($host, $user, $password, $bda){

		if (!$enlace=mysql_connect($host, $user, $password, $bda)) {
			return false;	
		}else if (!mysql_select_db($bda)) {
			return false;
		}else{
			return true;
		}
	}

	function consultar($consulta){
		if (!$datos = mysql_query($consulta) or mysql_num_rows($datos)<1){
			return false;
		}else{
			return $datos;
		}
	}


	function mostrarDatos($datos){

		$cod='<table border="2" cellpadding="3">';
		
		$cont=0;
		while ($fila = mysql_fetch_array($datos)) {
			
			$cod .= '<tr>';
			$cod .= '<td>' . $fila["id"] . "</td>";
			$cod .= '<td>' . $fila["nombre"] . "</td>";
			$cod .= '<td>' . $fila["apellidos"] . "</td>";
			$cod .= '<td>' . $fila["edad"] . "</td>";
			$cod .= '<td>' . $fila["materia"] . "</td>";
				$cont++;
			$cod .= '<td>' . "<a href='borrar.php?id=$cont'>Borrar</a>" . "</td>";
			$cod .= '<td>' . "<a href='modificar.php'>Modificar</a>" . "</td>";
			$cod .= '</tr>';
		}
		$cod .="</table>";	
		return $cod;
	}



?>