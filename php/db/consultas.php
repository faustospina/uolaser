<?php

// Obtener lad especialidades
function getEspecialidades($conexion) {
	$consulta = mysql_query("
    SELECT codigo, nombre FROM especialidades;
", $conexion) or die(mysql_error());
	$especialidades = array();
	$i = 0;
	while ($fila = mysql_fetch_assoc($consulta)) {

		$especialidades[$i]['codigo'] = $fila['codigo'];
		$especialidades[$i]['nombre'] = $fila['nombre'];
        $i++;
	}
	return $especialidades;
}

// Obtener lad especialidades
function getMedicos($conexion) {
	$consulta = mysql_query("
    SELECT nombre FROM medicos WHERE ACTIVO = 'SI';
", $conexion) or die(mysql_error());
	$medicos = array();
	$i = 0;
	while ($fila = mysql_fetch_assoc($consulta)) {

		$medicos[$i]['nombre'] = $fila['nombre'];
        $i++;
	}
	return $medicos;
}

function getMedicosEspecialidad($conexion, $especialidad) {
	$consulta = mysql_query("
    SELECT nombre FROM medicos WHERE ACTIVO = 'SI' AND especialidad = '$especialidad';
", $conexion) or die(mysql_error());
	$medicos = array();
	$i = 0;
	while ($fila = mysql_fetch_assoc($consulta)) {

		$medicos[$i]['nombre'] = $fila['nombre'];
        $i++;
	}
	return $medicos;
}

function getEspecialidadMedico($conexion, $medico){
    $consulta = mysql_query("
    SELECT especialidad FROM medicos where ACTIVO = 'SI' and nombre='$medico';
", $conexion) or die(mysql_error());

	while ($fila = mysql_fetch_assoc($consulta)) {
        
        if($fila['especialidad'] == ""){
            return "TODAS LAS ESPECIALIDADES";
        }else{
            return $fila['especialidad'];
        }
	}
	return "TODAS LAS ESPECIALIDADES";
}

function tieneCitasPendientes($conexion, $documento) {
	$consulta = mysql_query("
    SELECT id_peticion FROM peticiones_citas where documento = '$documento' and estado = 'EN ESPERA';
", $conexion) or die(mysql_error());
	while ($fila = mysql_fetch_assoc($consulta)) {

		return true;
	}
	return false;
}

function consultarCitas($conexion, $documento){
    $consulta = mysql_query("
        SELECT 
			doc as documento,
			a.nombre,
			a.telefono,
			requerida as fecha,
			hora,
			AMPM,
			medico as nombre_medico,
			estado,
			e.nombre as especialidad
		FROM
			agenda a
				left JOIN
			medicos m ON m.nombre = medico
				left JOIN
			especialidades e ON e.nombre = m.especialidad
		WHERE
			requerida >= DATE_FORMAT(now(), '%Y-%m-%d')
				and doc = '$documento'
		limit 50000 
		union SELECT 
			p.documento,
			p.nombre,
			p.telefono1,
			p.fecha,
			p.hora,
			p.AMPM,
			p.nombre_medico,
			p.estado,
			e.nombre as especialidad
		FROM
			peticiones_citas p
				JOIN
			especialidades e ON p.especialidad = e.codigo
		WHERE
			documento = '$documento' and
			p.fecha >= DATE_FORMAT(now(), '%Y-%m-%d')
		limit 50000
    ", $conexion) or die(mysql_error());
	$citas = array();
	$i = 0;
	while ($fila = mysql_fetch_assoc($consulta)) {

		$citas[$i]['documento'] = $fila['documento'];
        $citas[$i]['nombre'] = $fila['nombre'];
		$citas[$i]['telefono'] = $fila['telefono'];
        $citas[$i]['fecha'] = $fila['fecha']; 
        $citas[$i]['hora'] = $fila['hora'];
        $citas[$i]['AMPM'] = $fila['AMPM'];
        $citas[$i]['especialidad'] = $fila['especialidad'];
        $citas[$i]['nombre_medico'] = $fila['nombre_medico'];
        $citas[$i]['estado'] = $fila['estado'];
        $i++;
	}
	return $citas;
}

function consultarcirugias($conexion, $documento){
	$consultaText = "
		SELECT 
			doc as documento,
			a.nombre,
			fecha,
			hora,
			(if(hora<'1200', 'AM', 'PM')) AMPM,
			medico as nombre_medico,
			ifnull(a.estado, 'PENDIENTE') AS estado,
			ifnull(e.nombre, 'NO ESPECIFICADA') as especialidad
		FROM
			agenda2 a
				JOIN
			medicos m ON m.nombre = medico
				left JOIN
			especialidades e ON e.nombre = m.especialidad
		where
			fecha >= DATE_FORMAT(now(), '%Y-%m-%d') and
			doc = '$documento'
		limit 50000;
	";
	//echo $consultaText;
    $consulta = mysql_query($consultaText, $conexion) or die(mysql_error());
	$citas = array();
	$i = 0;
	while ($fila = mysql_fetch_assoc($consulta)) {

		$citas[$i]['documento'] = $fila['documento'];
        $citas[$i]['nombre'] = $fila['nombre'];
        $citas[$i]['fecha'] = $fila['fecha']; 
        $citas[$i]['hora'] = $fila['hora'];
        $citas[$i]['AMPM'] = $fila['AMPM'];
        $citas[$i]['especialidad'] = $fila['especialidad'];
        $citas[$i]['nombre_medico'] = $fila['nombre_medico'];
        $citas[$i]['estado'] = $fila['estado'];
        $i++;
	}
	return $citas;
}


?>