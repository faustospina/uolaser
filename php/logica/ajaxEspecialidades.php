<?php

    include "../db/conexion.php";
    include "../db/consultas.php";
    include "../db/inserciones.php";
    
    $conexion = conectar();
    

    if(isset($_GET['accion']) && $_GET['accion'] == 1 &&
        isset($_GET['medico']) && $_GET['medico'] != null){
        
        $especialidad = getEspecialidadMedico($conexion, $_GET['medico']);
        
        echo $especialidad;

    }

?>