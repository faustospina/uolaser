<?php

    include "../db/conexion.php";
    include "../db/consultas.php";
    include "../db/inserciones.php";
    
    $conexion = conectar();
    

    if(isset($_GET['accion']) && $_GET['accion'] == 1 &&
        isset($_GET['especialidad']) && $_GET['especialidad'] != null){
        
            if($_GET['especialidad']=="TODAS LAS ESPECIALIDADES"){
                $medicos = getMedicos($conexion);
            }else{
                $medicos = getMedicosEspecialidad($conexion, $_GET['especialidad']);
            }
        
        
        echo json_encode($medicos);

    }

?>