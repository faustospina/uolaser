<?php

    include "../db/conexion.php";
    include "../db/consultas.php";
    include "../db/inserciones.php";
    
    $conexion = conectar();
    

    if(isset($_GET['documento']) && $_GET['documento'] != null &&
        isset($_GET['nombre']) && $_GET['nombre'] != null &&
        isset($_GET['telefono']) && $_GET['telefono'] != null &&
        isset($_GET['email']) && $_GET['email'] != null &&
        isset($_GET['mensaje']) && $_GET['mensaje'] != null){
        
        $mensaje = utf8_encode($_GET['mensaje']);
        $mensaje = addslashes($mensaje);
        
        $nombre = utf8_encode($_GET['nombre']);
        $nombre = addslashes($nombre);
        
        
        insertarContactenos($conexion, $_GET['documento'], $nombre, $_GET['telefono'], $_GET['email'], $mensaje);
        echo "El mensaje se ha enviado";
        

    }else{
        echo "Debellenar todos los datos";
    }

?>