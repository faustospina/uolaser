<?php
include_once "../logica/constantes.php";

// Funcion para conectar la bd
function conectar() {
	
	$conexion = mysql_connect(constant("HOST_NAME"),constant("USUARIO_BD"),constant("PASS_BD"));
	mysql_select_db(constant("BD"),$conexion);
	
	return $conexion;
}
?>