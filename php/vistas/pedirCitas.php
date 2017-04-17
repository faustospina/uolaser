<?php
    
        
    include "html.php";
    include "../db/conexion.php";
    include "../db/consultas.php";
    
    $conexion = conectar();
    $especialidades = getEspecialidades($conexion);
    $medicos = getMedicos($conexion);
    getCabezal();
    getCuerpoPedirCitas($especialidades, $medicos);
    getPie();

?>