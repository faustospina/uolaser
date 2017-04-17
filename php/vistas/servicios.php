<?php

    include "html.php";
	
	$pagina = $_GET["pag"];
	
    getCabezal();
    getCuerpoServicios($pagina);
    getPie();

?>