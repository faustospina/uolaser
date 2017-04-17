<?php

    include "../db/conexion.php";
    include "../db/consultas.php";
    include "../db/inserciones.php";
    
    $conexion = conectar();
    

    if(isset($_GET['accion']) && $_GET['accion'] == 1 &&
        isset($_GET['documento']) && $_GET['documento'] != null &&
        isset($_GET['nombre']) && $_GET['nombre'] != null &&
        isset($_GET['fecha']) && $_GET['fecha'] != null &&
        isset($_GET['hora']) && $_GET['hora'] != null &&
        isset($_GET['amPm']) && $_GET['amPm'] != null &&
        isset($_GET['especialidad']) && $_GET['especialidad'] != null &&
        isset($_GET['medico']) && $_GET['medico'] != null &&
        isset($_GET['motivo']) && $_GET['motivo'] != null){
        
        $motivo = utf8_encode($_GET['motivo']);
        $motivo = addslashes($motivo);
        
        $nombre = utf8_encode($_GET['nombre']);
        $nombre = addslashes($nombre);
		$nombreArchivo = '';
		$data = null;
		
		
		try{
        
            if(isset($_FILES['archivo']['name']) && !empty($_FILES['archivo']['name'])){
                $nombreArchivo = basename($_FILES['archivo']['name']);
                $extension = substr(basename($_FILES['archivo']['name']), -3);
                $nombre2 = "../../importados/archivoAdjunto.".$extension;
				if ($_FILES['archivo']['size']> 3000000) {
                	exit("El archivo que intenta subir es demasiado pesado");
                }
                
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $nombre2)) {
                    // Read the file
                    $fp = fopen($nombre2, 'r');
                    $data = fread($fp, filesize($nombre2));
                    $data = addslashes($data);
                    fclose($fp);
                	
                    
                }
            }
            
			if(!tieneCitasPendientes($conexion, $_GET['documento'])){
				pedirCita($conexion, $_GET['documento'], $nombre, $_GET['telefono1'], $_GET['telefono1'], $_GET['fecha'], $_GET['hora'], $_GET['amPm'], $_GET['especialidad'], $_GET['medico'], $motivo, $data);
				echo "su solicitud ha sigo ingresada, pr&oacute;ximamente ser&aacute; contactado v&iacute;a telef&oacute;nica para confirmar fecha y hora";
			}else{
				echo "Usted ya ha solicitado una cita y debe esperar a que esa sea diligenciada";
			}
			
			
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
		
		

    }elseif(isset($_GET['accion']) && $_GET['accion'] == 2 &&
        isset($_GET['documento']) && $_GET['documento'] != null){
        
            $citas = consultarCitas($conexion, $_GET['documento']);
            echo json_encode($citas);

    }elseif(isset($_GET['accion']) && $_GET['accion'] == 3 &&
        isset($_GET['documento']) && $_GET['documento'] != null){
			//echo $_GET['documento']."<br>";
            $cirugias = consultarcirugias($conexion, $_GET['documento']);
            echo json_encode($cirugias);

    }else{
        echo "Debellenar todos los datos";
    }

?>