<?php

function pedirCita($conexion, $documento, $nombre, $telefono1, $telefono2, $fecha, $hora, $amPm, $especialidad, $medico, $motivo, $data){
	mysql_query("INSERT INTO peticiones_citas (nombre, telefono1, telefono2, documento, fecha, hora, AMPM, especialidad, nombre_medico, motivo, estado, fechaPeticion, adjunto) VALUES ('$nombre', '$telefono1', '$telefono2', '$documento', '$fecha', '$hora', '$amPm', '$especialidad', '$medico', '$motivo', 'EN ESPERA', now(), '$data')",$conexion)or die(mysql_error());
}

function insertarContactenos($conexion, $documento, $nombre, $telefono, $email, $mensaje){
    mysql_query("INSERT INTO contactenos (nombre, documento, telefono, email, mensaje, fecha) VALUES ('$nombre', '$documento', '$telefono', '$email', '$mensaje', now())",$conexion)or die(mysql_error());
}

?>