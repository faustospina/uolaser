<?php

function getCabezal(){
    ?>
    
        <!DOCTYPE HTML>
            <html>
            <head>
            	<meta http-equiv="content-type" content="text/html" />
            	<meta name="author" content="gencyolcu" />
				
				<meta name="description" content="es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al diagn�stico, tratamiento y cirug�a ocular."/>
                <meta name="keywords" content="uolaser,uo,unidad,oftalmologica,laser,unidad oftalmologica laser,ojos,salud,clinica,oftalmologia"/>
                <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
				
            	<title>UNIDAD OFTALMOLOGICA LASER</title>
                
                <link rel="stylesheet" href="../../css/general.css" />
                <link rel="stylesheet" href="../../css/menuDesplegable.css" />
                
                
                <link id="Link2" rel="icon" href="../../32x32.ico" type="image/ico" />
        		<script type="text/jscript" src="../../js/jquery.js"></script>
        		<link rel="stylesheet" href="../../css/alertify.core.css" />
        		<link rel="stylesheet" href="../../css/alertify.default.css" id="toggleCSS" />
        		<style type="text/css">
        			.alertify-log-custom {
        				background: blue;
        			}
        			.style1 {
        				width: 269px;
        			}
        			.body {
        				margin: 0px;
        				padding: 0px;
        				background-color: #f8f8f8;
        			}
					.tituloEspecialista{
						font-weight: bold;
						color: #878787;
					}
					.nombreEspecialista{
						color: #878787;
					}
					
        		</style>
                
                <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
                <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
                <script src="jquery.ui.datepicker-es.js"></script>
                
                <script>
                    $(function () {
                        $.datepicker.setDefaults($.datepicker.regional["es"]);
                        $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
                    });
                </script>
                
        		<script type="text/jscript" src="../../js/alertify.min.js"></script>
        		<script type="text/jscript">
                    $(document).ready(function() {
                        //alerta("numberFormat");
                    });
                    
                    function reset() {
                        alertify.set({
                        labels: {
                        ok: "OK",
                        cancel: "Cancel"
                        },
                        delay: 5000,
                        buttonReverse: false,
                        buttonFocus: "ok"
                        });
                    }
                    
                    function alerta(mensaje, confirmacion, tipo) {
                        reset();
                        alertify.alert(mensaje);
                        return false;
                    };
                    
                    function confirmar(mensaje){
                        alertify.confirm(mensaje, function (e) {
                            if (e) {
                                return true;
                            } else {
                                return false;
                            }
                        });
                    }
                    function redirMenuCabezal(pagina){
                        location.href=pagina;
                    }
                        
                    
        		</script>
 
            </head>
            
            <body>
            
                <div id="contenedorPrincipal">
                    <div id="header" class="contenedorBloque" style='text-align: center'>
                        <img style="width: 1000px;"src="../../img/HEADER-01.jpg" />
						
						
						<div id='menuCabezal'>
							<div id="contenedorBotonesMenuCabezal">
								<div style='float: right; margin: 5px 15px 0 0'>
									<a href='https://www.facebook.com/UnidadOftalmologicaLaserSA'><img src="../../img/fb.png" title='Vis&iacute;tenos en facebook'/></a>
									<a href='https://twitter.com/UOlaser1'><img src="../../img/TT.png" title='S&iacute;ganos en twitter' /></a>
								</div>
								 <ul class="nav">
									 <li class='botonMenuCabezal' onclick="redirMenuCabezal('home.php')">INICIO</li>
									 <li class='botonMenuCabezal'>
										QUIENES SOMOS
										<ul class='desplegable'>
										  <li><a href="resenia.php">Rese�a</a></li>
										  <li><a href="mision-vision.php">Misi�n y Visi�n</a></li>
										</ul>
									 </li>
									 <li class='botonMenuCabezal'>
										CITAS
										<ul class='desplegable'>
										  <li><a href="pedirCitas.php">Pedir citas</a></li>
										  <li><a href="consultarCitas.php">Consultar citas</a></li>
										</ul>
									 </li>
									 <li class='botonMenuCabezal' onclick="redirMenuCabezal('contactenos.php')">CONTACTENOS</li>
									 <li class='botonMenuCabezal'>
										SERVICIOS
										<ul class='desplegable'>
										  <li><a href="servicios.php?pag=consultas">Consultas</a></li>
										  <li><a href="servicios.php?pag=ap_diag">Apoyo diagn&oacute;stico</a></li>
										  <li><a href="servicios.php?pag=pro_qui">Procedimientos quir&uacute;rgicos</a></li>
										  <li><a href="servicios.php?pag=pro_la">Procedimiento l&aacute;ser</a></li>
										</ul>
									 </li>
								 </ul>
							</div>
							
							
							
						</div>
                    </div>
                    <!--<div id='menuCabezal'>
                        <div id="contenedorBotonesMenuCabezal">
                            <div class='botonMenuCabezal' onclick="redirMenuCabezal('home.php')">INICIO</div>
                            <div class='botonMenuCabezal' onclick="redirMenuCabezal('quienesSomos.php')">QUIENES SOMOS</div>
                            <div class='botonMenuCabezal' onclick="redirMenuCabezal('citas.php')">CITAS</div>
                            <div class='botonMenuCabezal' onclick="redirMenuCabezal('contactenos.php')">CONTACTENOS</div>
                        </div>
                    </div>-->
                       
    
    <?php
}


function getBotonesEstaticos(){
    ?>
    
        <div style="border-bottom: 8px solid #36A9E1; height: 15px; margin: auto; margin-bottom: 15px; width: 1000px; background: #fff">&nbsp;</div>
            <div style="width: 1000px; margin: auto; ">
                <div style="width: 215px; float: left;">
                    <div>
                        <div class="botonIzquierdaContent degradadoAzul" onclick='cargarEspecialidad(1, $(this))'>Oftalmolog&iacute;a general</div>
                        <div class="botonIzquierdaContent" onclick='cargarEspecialidad(2, $(this))'>Oftalmopediatr&iacute;a</div>
                        <div class="botonIzquierdaContent" onclick='cargarEspecialidad(3, $(this))'>Retina y v&iacute;treo</div>
                        <div class="botonIzquierdaContent" onclick='cargarEspecialidad(4, $(this))'>Glaucoma</div>
                        <div class="botonIzquierdaContent" onclick='cargarEspecialidad(5, $(this))'>Oculoplastica</div>
                        <div class="botonIzquierdaContent" onclick='cargarEspecialidad(6, $(this))'>Cornea</div>
                        <div class="botonIzquierdaContent" onclick='cargarEspecialidad(7, $(this))'>Citas</div>
                    </div>
                </div>
				
				<!--Opciones-->
				
                <div style="width: 750px; overflow: hidden; float: right" id='oftalGaneral' class='contentOfta'>
                    <div style="float: left; width: 330px; padding: 15px; background: #EDEDED;">
                        <img src="../../img/oftal1.jpg" width="100%"/>
                    </div>
                    <div style="float: left; width: 380px; float: right; font-size: 1.2em; color: #878787; text-align: justify;">
                        La Oftalmolog�a es la especialidad m�dica que se encarga del diagn�stico y  tratamiento de las enfermedades de los ojos.
                    </div>
                </div>
				
				<div style="width: 750px; overflow: hidden; float: right; display: none" id='oftalPedia' class='contentOfta'>
                    <div style="float: left; width: 330px; padding: 15px; background: #EDEDED;">
                        <img src="../../img/oftal2.jpg" width="100%"/>
                    </div>
                    <div style="float: left; width: 380px; float: right; font-size: 1.2em; color: #878787; text-align: justify;">
                        La Oftalmopediatr�a se ocupa de las 
enfermedades o anomal�as y del adecuado desarrollo de la visi�n en los ni�os.
                    </div>
                </div>
				
				<div style="width: 750px; overflow: hidden; float: right; display: none" id='retiVitreo' class='contentOfta'>
                    <div style="float: left; width: 330px; padding: 15px; background: #EDEDED;">
                        <img src="../../img/oftal3.JPG" width="100%"/>
                    </div>
                    <div style="float: left; width: 380px; float: right; font-size: 1.2em; color: #878787; text-align: justify;">
                        Unidad de la oftalmolog�a especializada en  
enfermedades como la retinopat�a diab�tica y 
enfermedades vasculares de la retina, 
(desprendimiento de retina), de la m�cula (agujero macular, membrana epirretiniana), hemorragias intraoculares y traumatismos. 
                    </div>
                </div>
				
				<div style="width: 750px; overflow: hidden; float: right; display: none" id='glaucoma' class='contentOfta'>
                    <div style="float: left; width: 330px; padding: 15px; background: #EDEDED;">
                        <img src="../../img/oftal4.jpg" width="100%"/>
                    </div>
                    <div style="float: left; width: 380px; float: right; font-size: 1.2em; color: #878787; text-align: justify;">
                        Glaucoma es una subespecialidad de la 
oftalmolog�a encargada del diagn�stico precoz y seguimiento de los diferentes tipos de glaucoma y de la hipertensi�n ocular. Dispone de un equipo m�dico con gran experiencia en el tratamiento de los diferentes tipos de glaucoma, ya sea a nivel m�dico, asistido mediante diferentes tipos de l�ser, o mediante las t�cnicas quir�rgicas m�s avanzadas.
                    </div>
                </div>
				
				<div style="width: 750px; overflow: hidden; float: right; display: none" id='oculoplastica' class='contentOfta'>
                    <div style="float: left; width: 330px; padding: 15px; background: #EDEDED;">
                        <img src="../../img/oftal5.jpg" width="100%"/>
                    </div>
                    <div style="float: left; width: 380px; float: right; font-size: 1.2em; color: #878787; text-align: justify;">
                        La oculoplastia es una subespecialidad de la 
oftalmolog�a, que es realizada por oftalm�logos especializados en patolog�a palpebral, orbitaria y v�a 
lagrimal.
                    </div>
                </div>
				
				<div style="width: 750px; overflow: hidden; float: right; display: none" id='cornea' class='contentOfta'>
                    <div style="float: left; width: 330px; padding: 15px; background: #EDEDED;">
                        <img src="../../img/oftal6.jpg" width="100%"/>
                    </div>
                    <div style="float: left; width: 380px; float: right; font-size: 1.2em; color: #878787; text-align: justify;">
                        Lorem Ipsum es simplemente el texto de 
                        relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno 
                        est�ndar de las industrias desde el a�o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us� una galer�a de textos y los mezcl� de tal manera que logr� hacer un libro de textos especimen. No s�lo sobrevivi� 500 a�os, sino que
                    </div>
                </div>
				
                
				<!-- fin opciones -->
				
                <br style="clear: both;"/>
                <div style="overflow: hidden;">
                    <!--<div style="width: 215px; float: left; padding-top: 25px; height: 100%;">
                        <div style="background-color: #36A9E1F; ; height: 100%">
                            <div style="width: 85%; text-align: left; margin: auto; padding: 15px 0;">
                                <span style="color: #ffffff; font-weight: bold;">Usuario</span><br />
                                <input type="text" style="width: 100%;"/><br />
                                <span style="color: #ffffff; font-weight: bold;">Contrase&ntilde;a</span><br />
                                <input type="password" style="width: 100%;"/><br />
                            </div>
                            
                        </div>
                    </div>-->
                    <div style="width: 100%; overflow: hidden; float: right;">
                        <div>
                            <a href='especialistas.php'><img src="../../img/PARTE.png" width="100%"/></a>
                        </div>
                    </div>
                </div>
                <h1 style="text-align: center; color: #706F6F;">INFORMACI�N IMPORTANTE</h1>
                
				
				<div style="background-color: #4357FF; float: left; overflow: hidden; padding: 15px 0">
					<div class="textoAbajo" id='textoAbajo1'>
                        Es importante conocer la estructura del ojo y cada una de sus partes, con el fin de dimensionar con mayor facilidad cada uno de los problemas de estos y sus posibles consecuencias.
                    </div>
					<div class="textoAbajo" id='textoAbajo2' style="border-left:3px solid #ffffff;">
						Si tenemos las gafas limpias y bien cuidadas, el mundo se ve de otra manera. Es muy importante limpiarlas con frecuencia del modo correcto, as� como tenerlas bien ajustadas y centradas para mantener siempre la m�xima calidad de visi�n y prolongar la vida �til de las lentes.
					</div>
					<div clear='both'></div>
				</div>
				<div style="background-color: #36A9E1; float: right; overflow: hidden; padding: 15px 0; position: relative">
					<div class="textoAbajo" id='textoAbajo2' style='margin -23px'>
						<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.886899960147!2d-75.6884316060864!3d4.808858583464481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38874764350fed%3A0x73141fa051a677b2!2sHotel+Castilla+Real!5e0!3m2!1sen!2ses!4v1399672545222" width="285" height="148" frameborder="0" style="border:0"></iframe>-->
						<!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d496.971967311883!2d-75.68843831159673!3d4.808526492040643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ses!4v1399673190713" width="285" height="148" frameborder="0" style="border:0"></iframe>-->
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d248.48603222436435!2d-75.68720820718312!3d4.808393363844846!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ses!4v1401199652254" width="285" height="148" frameborder="0" style="border:0"></iframe>
					</div>
					<div style='position: absolute; top: 30px; background-color: #36A9E1; width: 100%; color: #fff; padding: 4px 25px'>
						C&oacute;mo encontrarnos?. <img src='../../img/maps.png'/>
					</div>
				</div>
				
                <div style="clear: both;"></div>
                <div></div>
            </div>
			<script>
				
				var contador = 0;
				
				$(document).ready(function() {
                    //timerInfinito();      
                });
				
				function timerInfinito() {
                    window.setInterval(function () {
                        cambiarTextoAbajo();
                    }, 6000);
                 }
				 
				 
				function cambiarTextoAbajo(){
					if(contador%2==0){
						$('#textoAbajo1').html("Expertos destacan que una iluminaci�n adecuada aumenta hasta un 20% la productividad en el trabajo y reducen las bajas laborales");
						$('#textoAbajo2').html("Fumar aumenta de forma significativa el riesgo de p�rdida de visi�n debido a la aparici�n de cataratas y de degeneraci�n macular asociada con la edad (DMAE).");
						$('#textoAbajo3').html("Entre un 10 y 15 % de los casos de cataratas (opacidad en el ojo) se deben a la exposici�n a los rayos ultravioleta. Es recomendable utilizar lentes de protecci�n solar con tecnolog�a fotosensible que se oscurecen en el sol. Con esto se evitan Lesiones en la retina.");
					}else{
						$('#textoAbajo1').html("Es importante conocer la estructura del ojo y cada una de sus partes, con el fin de dimensionar con mayor facilidad cada uno de los problemas de estos y sus posibles consecuencias.");
						$('#textoAbajo2').html("Si tenemos las gafas limpias y bien cuidadas, el mundo se ve de otra manera. Es muy importante limpiarlas con frecuencia del modo correcto, as� como tenerlas bien ajustadas y centradas para mantener siempre la m�xima calidad de visi�n y prolongar la vida �til de las lentes.");
						$('#textoAbajo3').html("La buena iluminaci�n es fundamental a la hora de leer un �e-book� para no tener problemas con la vista, como cansancio o sequedad ocular.");
					}
					$("#textoAbajo1").fadeIn(500);
					contador++;
				}
				
				function cargarEspecialidad(esp, link){
					//$(".botonIzquierdaContent").css("background", "#4357FF");
					$(".botonIzquierdaContent").removeClass( "degradadoAzul" );
					link.addClass( "degradadoAzul" );
					$(".contentOfta").css("display", "none");
				
					if(esp == 1){
						//link.css("background", "#0A0048");
						
						$("#oftalGaneral").css("display", "inline-block");
					}
					else if(esp == 2){
						//link.css("background", "#0A0048");
						
						$("#oftalPedia").css("display", "inline-block");
					}
					else if(esp == 3){
						//link.css("background", "#0A0048");
						$("#retiVitreo").css("display", "inline-block");
					}
					else if(esp == 4){
						//link.css("background", "#0A0048");
						$("#glaucoma").css("display", "inline-block");
					}
					else if(esp == 5){
						//link.css("background", "#0A0048");
						$("#oculoplastica").css("display", "inline-block");
					}
					else if(esp == 6){
						//link.css("background", "#0A0048");
						$("#cornea").css("display", "inline-block");
					}
					else if(esp == 7){
						location.href="pedirCitas.php";
					}
				}
				
			</script>
    <?php
}


function getCuerpoHome(){
    
    ?>
    
        <div id="content">
            <div style="text-align: center;">
                <img src="../../img/IMG_0076.1.jpg" style="width: 1000px;"/>
            </div>
			<div style='width: 1000px; margin: auto'>
				<a href='pedirCitas.php'><img src='../../img/pide_cita.png' style='margin: -150px 0 -20px 10px'/></a>
			</div>
            <?php getBotonesEstaticos(); ?>
        </div><br />
    
    <?php
    
}

function getCuerpoServicios($pagina){
	
	if($pagina == "consultas"){
	?>
		<div id="content">
            <div style="background: #E9E9E4; width: 926px; margin: auto; padding: 21px 37px;">
				<div style="display: inline-block;">
					<div class="lis"><img src="../../img/pelotita-01.png"/> Consulta medicina especializada en oftalmolog�a</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Consulta en subespecialidades</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Retina y v�treo</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Glaucoma</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> C�rnea</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Oculopl�stia</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Oftalmopediatr�a</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Consulta de Optometr�a.</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Contactolog�a (Valoraci�n, formulaci�n y adaptaci�n de lentes de contacto)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Suministro de pr�tesis Oculares</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Suministro de Lentes y Monturas</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Evaluaci�n ort�ptica.</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Terapia ort�ptica y ple�ptica</div>
				</div>
				<div style="width: 272px; float: right;">
					<img src="../../img/pic_servicios.png" style="width: 100%" />
				</div>
				<div style="clear: both"></div>
			</div>
            <?php getBotonesEstaticos(); ?>
        </div><br />
	<?php
	}elseif($pagina == "ap_diag"){
	?>
		<div id="content">
            <div style="background: #E9E9E4; width: 926px; margin: auto; padding: 21px 37px;">
				<div style="display: inline-block;">
					<div class="lis"><img src="../../img/pelotita-01.png"/> Angiorretinofluoresceinograf�a (Angiograf�a)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Biometr�a ocular</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Estudio de campo visual central o perif�rico computarizado</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Paquimetr�a</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Topograf�a y paquimetr�a por elevaci�n (Pentacam)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Potenciales evocados visuales</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Tomograf�a �ptica coherente</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Topograf�a corneal computarizada</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Ultrasonograf�a ocular modo a y b, con contenido (Ecograf�a)</div>
					
				</div>
				<div style="width: 272px; float: right;">
					<img src="../../img/pic_servicios.png" style="width: 100%" />
				</div>
				<div style="clear: both"></div>
			</div>
            <?php getBotonesEstaticos(); ?>
        </div><br />
	<?php
	}elseif($pagina == "pro_qui"){
	?>
		<div id="content">
            <div style="background: #E9E9E4; width: 926px; margin: auto; padding: 21px 37px;">
				<div style="display: inline-block; width: 650px">
					<div class="lis"><img src="../../img/pelotita-01.png"/> Aspiraci�n diagn�stica de v�treo con inyecci�n de medicamentos intravitreos: <br>&nbsp;&nbsp;&nbsp;&nbsp;Lucentis o Avastin.</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Conjuntivodacriocistorrinostom�a con intubaci�n de v�a endosc�pica trasnasal</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Correcci�n de entropi�n por t�cnica de sutura</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Correcci�n de ptosis palpebral por resecci�n del elevador v�a conjuntival</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Blefaroplastia superior e inferior</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Queratoplastia penetrante (Trasplante de c�rnea)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Examen y/o valoraci�n bajo anestesia general</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Extracci�n extracapsular de cristalino con implante de lente intraocular suturado <br>&nbsp;&nbsp;&nbsp;&nbsp;convencional (Convencional y por facoemulsificaci�n)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Implante de lente intraocular secundario sod (Lente f�quico y multifocal)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Inserci�n de implante para glaucoma (V�lvula de Ahmed)</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Trabeculectom�a primaria</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Vitrectom�a v�a posterior con retinopexia</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Vitrectom�a v�a posterior con inserci�n de silic�n o gases</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Vitrectom�a v�a posterior con endolaser</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Cirug�a Refractiva con L�ser Resecci�n de Pterigio</div>
				</div>
				<div style="width: 272px; float: right;">
					<img src="../../img/pic_servicios.png" style="width: 100%" />
				</div>
				<div style="clear: both"></div>
			</div>
            <?php getBotonesEstaticos(); ?>
        </div><br />
	<?php
	}elseif($pagina == "pro_la"){
	?>
		<div id="content">
            <div style="background: #E9E9E4; width: 926px; margin: auto; padding: 21px 37px;">
				<div style="display: inline-block;">
					<div class="lis"><img src="../../img/pelotita-01.png"/> Capsulotom�a con laser</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Fotocoagulaci�n por l�ser retinopat�a diab�tica</div>
					<div class="lis"><img src="../../img/pelotita-01.png"/> Iridotom�a con l�ser</div>
				</div>
				<div style="width: 272px; float: right;">
					<img src="../../img/pic_servicios.png" style="width: 100%" />
				</div>
				<div style="clear: both"></div>
			</div>
            <?php getBotonesEstaticos(); ?>
        </div><br />
	<?php
	}
}


function getCuerpoPedirCitas($especialidades, $medicos){
    ?>
    
        <div id="content">
            <br />
           
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                <span style="color: #36A9E1F; font-size: 1.1em; font-weight: bold;">CITAS</span>
                <img style="margin-right: 100px; height: 13px;" src="../../img/cuadros.png"/>
                <p style="text-align: justify; color: #878787;">
                    La <span style="color: #4357FF;">UNIDAD OFTALMOLOGICA LASER S.A.</span>; es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta 
                    servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso 
                    tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al 
                    diagn�stico, tratamiento y cirug�a ocular, brindando excelente servicios a los usuarios.
                    es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al diagn�stico, tratamiento y cirug�a ocular, brindando 
                    excelente servicios a los usuarios.
                </p><br /><br />
            </div>
            
            <div style="border-bottom: 8px solid #36A9E1; height: 15px; margin: auto; margin-bottom: 15px; width: 1000px;">&nbsp;</div>
            
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">

                <div style="width: 610px; margin: auto; color: #706F6F;">
                    <form style="width: 100%;">
                        <div style="text-align: center;">DOCUMENTO</div>
                        <input type="text" style="width: 590px;" id="documento" class="inputStandard"/><br /><br />
                        <div style="text-align: center;">NOMBRE Y APELLIDO</div>
                        <input type="text" style="width: 590px" id="nombre" class="inputStandard"/><br /><br />
						
                        <input type="text" style="width: 590px; width: 275px;" id="telefono1" class="inputStandard" value='Tel&eacute;fono 1'  onfocus="if(this.value=='Tel&eacute;fono 1') this.value=''" onblur="if(this.value=='') this.value='Tel&eacute;fono 1'"/>
						<input type="text" style="width: 590px; width: 275px; float: right" id="telefono2" class="inputStandard"  value='Tel&eacute;fono 2'  onfocus="if(this.value=='Tel&eacute;fono 2') this.value=''" onblur="if(this.value=='') this.value='Tel&eacute;fono 2'"/>
						<br /><br />
                        <div style="text-align: center; width: 100%;">
                            <input type="text" style="width: 146px;" class="inputStandard" id="datepicker"/><span>&nbsp;&nbsp;&nbsp;A LAS&nbsp;&nbsp;&nbsp;</span>
                            <select style="width: 105px;" class="inputStandard" id="hora">
                                <?php 
                                    for($i=1; $i<=12; $i++){
                                        echo "<option value='$i'>$i</option>";
                                    }
                                ?>
                            </select>
                            <span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</span>
                            <select style="width: 105px;" class="inputStandard" id="minuto">
                                <?php 
                                    for($i=0; $i<=59; $i+=15){
                                        echo "<option value='$i'>$i</option>";
                                    }
                                ?>
                            </select>&nbsp;&nbsp;&nbsp;
                            <select style="width: 105px;" class="inputStandard" id="amPm">
                                <option value="AM">AM</option>
                                <option value="M">M</option>
                                <option value="PM">PM</option>
                            </select>
                            <br /><br />
                            <select style="width: 292px;" class="inputStandard" id="especialidad" onchange="seleccionarEspecialidad()">
                                <option value="-1" selected>TODAS LAS ESPECIALIDADES</option>
                                <?php 
                                    for($i=0; $i<=sizeof($especialidades); $i++){
                                        echo "<option value='".$especialidades[$i]['codigo']."'>".$especialidades[$i]['nombre']."</option>";
                                    }
                                ?>
                            </select>&nbsp;&nbsp;&nbsp;&nbsp;
                            <select style="width: 292px;" class="inputStandard" id="medico" onchange="seleccionarMedico()">
                                <option value="-1" selected>SELECCIONE MEDICO</option>
                                <?php 
                                    for($i=0; $i<=sizeof($medicos); $i++){
                                        echo "<option value='".$medicos[$i]['nombre']."'>".$medicos[$i]['nombre']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <br /><br />
                        <textarea rows="4" style="width: 590px;" id="motivo" class="inputStandard" onfocus="if(this.value=='Motivo') this.value=''" onblur="if(this.value=='') this.value='Motivo'">Motivo</textarea><br/><br/>
                        <input type='file' id='fileUpload'/>
						<div style="text-align: right; padding: 10px 0;">
                            <input style="padding: 8px 50px; border:  0; margin: 0 -10px 0 0; cursor: pointer;" class="degradadoAzul" type="button" onclick="pedirCita()" value="ENVIAR"/>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div><br />
        <script type="text/javascript">
            
            function pedirCita(){
                documento = $('#documento').val();
                nombre = $('#nombre').val();
				telefono1 = $('#telefono1').val();
				telefono2 = $('#telefono2').val();
                fecha = $('#datepicker').val();
                hora = $('#hora').val()+$("#minuto").val();
                amPm = $('#amPm').val();
                especialidad = $('#especialidad').val();
                medico = $('#medico').val();
                motivo = $('#motivo').val();
                
                if(medico != -1 && especialidad != -1){
                    if(motivo != ""){
                        motivo = motivo.replace(/\n/g, "<br />");
                    }
                    
					ruta = "../logica/ajaxCitas.php?documento="+documento+"&nombre="+nombre+"&telefono1="+telefono1+"&telefono2="+telefono2+"&fecha="+fecha+"&hora="+hora+"&amPm="+amPm+"&especialidad="+especialidad+"&medico="+medico+"&motivo="+motivo+"&accion=1";
					var inputFileImage = 0;
					inputFileImage = document.getElementById("fileUpload");
					var file = inputFileImage.files[0];
					var data = new FormData();
					data.append('archivo',file);
					//alert("Data: "+data);
					$.ajax({
						url:ruta,
						type:'POST',
						contentType:false,
						data:data,
						processData:false,  
						cache:false
					}).done(function( data ) {
						alerta(data);
                        $('#documento').val("");
                        $('#nombre').val("");
						$('#telefono').val("");
                        $('#fecha').val("");
                        $('#hora').val("");
                        $("#minuto").val("")
                        $('#amPm').val("");
                        $('#especialidad').val("");
                        $('#medico').val("");
                        $('#motivo').val("");
					});

                }else{
                    alerta("El m&eacute;dico y la especialidad son datos obligatorios");
                }
                
                
            }
            
            function seleccionarEspecialidad(){
                especialidad = $("#especialidad :selected").text();
                cargarMedicos(especialidad);
            }
            
            function seleccionarMedico(){
                medico = $("#medico :selected").text();
                cargarEspecialidades(medico);
                
            }
            
            function cargarMedicos(especialidad){
                ruta = "../logica/ajaxMedicos.php?especialidad="+especialidad+"&accion=1";
                //alerta(ruta);
                    $.get(ruta, function(data){
                        data = JSON.parse(data);
                        htmlText = "<option value='-1' selected>SELECCIONE MEDICO</option>";
                        for(i=0; i<data.length; i++){
                            htmlText += "<option value='"+data[i]['nombre']+"'>"+data[i]['nombre']+"</option>";
                        }
                        $('#medico').html(htmlText);
                        
                    });
            }
            
            function cargarEspecialidades(medico){
                ruta = "../logica/ajaxEspecialidades.php?medico="+medico+"&accion=1";
                //alerta(ruta);
                    $.get(ruta, function(data){
                        //alerta(data);
                        $("#especialidad option[value="+ data +"]").attr("selected",true);
                        //$('#especialidad').text(data);
                        
                    });
            }
            
        </script>
    
    <?php
}

function getCuerpoConsultarCitas(){
    ?>
    
        <div id="content">
            <br />
           
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                <span style="color: #36A9E1F; font-size: 1.1em; font-weight: bold;">CITAS</span>
                <img style="margin-right: 100px; height: 13px;" src="../../img/cuadros.png"/>
                <p style="text-align: justify; color: #878787;">
                    La <span style="color: #4357FF;">UNIDAD OFTALMOLOGICA LASER S.A.</span>; es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta 
                    servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso 
                    tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al 
                    diagn�stico, tratamiento y cirug�a ocular, brindando excelente servicios a los usuarios.
                    es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al diagn�stico, tratamiento y cirug�a ocular, brindando 
                    excelente servicios a los usuarios.
                </p><br /><br />
            </div>
            
            <div style="border-bottom: 8px solid #36A9E1; height: 15px; margin: auto; margin-bottom: 15px; width: 1000px;">&nbsp;</div>
            
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                
                <div style="width: 610px; margin: auto; color: #706F6F;">
					<h2 style='text-align: center'>Consultar cita</h2><br>
                    <form style="width: 100%;">
                        <div style="text-align: center;">DOCUMENTO</div>
                        <input type="text" style="width: 590px;" id="documento" class="inputStandard"/><br /><br />
                        <div style="text-align: right; padding: 10px 0;">
                            <input style="padding: 8px 50px; border:  0; margin: 0 -10px 0 0; cursor: pointer;" class="degradadoAzul" onclick="consultarCita()" type="button" value="CONSULTAR"/>
                        </div>
                    </form>
                    <br /><br />
                </div>
				
				<div style="width: 610px; margin: auto; color: #706F6F;">
				<h2 style='text-align: center'>Consultar cirug&iacute;as</h2><br>
                    <form style="width: 100%;">
                        <div style="text-align: center;">DOCUMENTO</div>
                        <input type="text" style="width: 590px;" id="documento2" class="inputStandard"/><br /><br />
                        <div style="text-align: right; padding: 10px 0;">
                            <input style="padding: 8px 50px; border:  0; margin: 0 -10px 0 0; cursor: pointer;" class="degradadoAzul" onclick="consultarCirugia()" type="button" value="CONSULTAR"/>
                        </div>
                    </form>
                </div>
				<br><br>
                <div id="contenedorTablaConsultas"><br /><br /></div>
                <br /><br /><br />
            </div>
            
        </div><br />
        <script type="text/javascript">
            
            function consultarCita(){
                documento = $('#documento').val();
                
                if(documento != ""){
                    
                    ruta = "../logica/ajaxCitas.php?documento="+documento+"&accion=2";
					//alerta(ruta);
                    $.get(ruta, function(data){
                        data = JSON.parse(data);
                        
                        if(data.length>0){
                            htmlText = "<table border='1' class='tablaResult'><tr><td>Documento</td><td>Nombre</td><td>Tel&eacute;fono</td><td>Fecha</td><td>Hora</td><td>Especialidad</td><td>M&eacute;dico</td><td>Estado</td></tr>";
                        
                            for(i=0; i<data.length; i++){
                                htmlText += "<tr><td>"+data[i]['documento']+"</td><td>"+data[i]['nombre']+"</td><td>"+data[i]['telefono']+"</td><td>"+data[i]['fecha']+"</td><td>"+data[i]['hora']+" "+data[i]['AMPM']+"</td><td>"+data[i]['especialidad']+"</td><td>"+data[i]['nombre_medico']+"</td><td>"+data[i]['estado']+"</td></tr>";
                            }
                            
                            htmlText += "</table>";
                            $("#contenedorTablaConsultas").html(htmlText);
                            $('#documento').val("");
                        }else{
                            alerta("No se han encontrado resultados para el documento ingresado<br>");
                        }
                        
                        
                    });
                }else{
                    alerta("Ingrese un documento para consultar");
                }
                
            }
			
			function consultarCirugia(){
                documento = $('#documento2').val();
                
                if(documento != ""){
                    
                    ruta = "../logica/ajaxCitas.php?documento="+documento+"&accion=3";
					//alerta(ruta);
                    $.get(ruta, function(data){
						//alerta(data);
                        data = JSON.parse(data);
                        
                        if(data.length>0){
                            htmlText = "<table border='1' class='tablaResult'><tr><td>Documento</td><td>Nombre</td><td>Fecha</td><td>Hora</td><td>Especialidad</td><td>M&eacute;dico</td><td>Estado</td></tr>";
                        
                            for(i=0; i<data.length; i++){
                                htmlText += "<tr><td>"+data[i]['documento']+"</td><td>"+data[i]['nombre']+"</td><td>"+data[i]['fecha']+"</td><td>"+data[i]['hora']+" "+data[i]['AMPM']+"</td><td>"+data[i]['especialidad']+"</td><td>"+data[i]['nombre_medico']+"</td><td>"+data[i]['estado']+"</td></tr>";
                            }
                            
                            htmlText += "</table>";
                            $("#contenedorTablaConsultas").html(htmlText);
                            $('#documento').val("");
                        }else{
                            alerta("No se han encontrado resultados para el documento ingresado<br>");
                        }
                        
                        
                    });
                }else{
                    alerta("Ingrese un documento para consultar");
                }
                
            }
            
            
        </script>
    
    <?php
}

function getCuerpoContactenos(){
    ?>
    
        <div id="content">
            <br />
           
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                <span style="color: #36A9E1F; font-size: 1.1em; font-weight: bold;">CITAS</span>
                <img style="margin-right: 100px; height: 13px;" src="../../img/cuadros.png"/>
                <p style="text-align: justify; color: #878787;">
                    La <span style="color: #4357FF;">UNIDAD OFTALMOLOGICA LASER S.A.</span>; es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta 
                    servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso 
                    tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al 
                    diagn�stico, tratamiento y cirug�a ocular, brindando excelente servicios a los usuarios.
                    es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al diagn�stico, tratamiento y cirug�a ocular, brindando 
                    excelente servicios a los usuarios.
                </p><br /><br />
            </div>
            
            <div style="border-bottom: 8px solid #36A9E1; height: 15px; margin: auto; margin-bottom: 15px; width: 1000px;">&nbsp;</div>
            
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                
                <div style="width: 610px; margin: auto; color: #706F6F;">
                    <form style="width: 100%;">
                        <input type="text" style="width: 590px;" id="nombre" class="inputStandard" onfocus="if(this.value=='NOMBRE Y APELLIDO') this.value=''" onblur="if(this.value=='') this.value='NOMBRE Y APELLIDO'" value="NOMBRE Y APELLIDO"/><br /><br />
                        <input type="text" style="width: 590px;" id="documento" class="inputStandard" onfocus="if(this.value=='DOCUMENTO') this.value=''" onblur="if(this.value=='') this.value='DOCUMENTO'" value="DOCUMENTO"/><br /><br />
                        <input type="text" style="width: 590px;" id="telefono" class="inputStandard" onfocus="if(this.value=='TELEFONO') this.value=''" onblur="if(this.value=='') this.value='TELEFONO'" value="TELEFONO"/><br /><br />
                        <input type="text" style="width: 590px;" id="email" class="inputStandard" onfocus="if(this.value=='CORREO ELECTRONICO') this.value=''" onblur="if(this.value=='') this.value='CORREO ELECTRONICO'" value="CORREO ELECTRONICO"/><br /><br />

                        <textarea rows="4" style="width: 590px;" class="inputStandard" id="mensaje" onfocus="if(this.value=='MENSAJE') this.value=''" onblur="if(this.value=='') this.value='MENSAJE'">MENSAJE</textarea>
                        <div style="text-align: right; padding: 10px 0;">
                            <input style="padding: 8px 50px; border:  0; margin: 0 -10px 0 0; cursor: pointer;" class="degradadoAzul" onclick="enviarContacto()" type="button" value="ENVIAR"/>
                        </div>
                    </form>
                </div>
                
                
            </div>
            
        </div><br />
        <script type="text/javascript">
            
            function enviarContacto(){
                nombre = $('#nombre').val();
                documento = $('#documento').val();
                telefono = $('#telefono').val();
                email = $('#email').val();
                mensaje = $('#mensaje').val();
                mensaje = mensaje.replace(/\n/g, "<br />");
                
                if(documento != "" && nombre != "" && telefono != "" && email != "" && mensaje != ""){
                    
                    ruta = "../logica/ajaxContactenos.php?documento="+documento+"&nombre="+nombre+"&telefono="+telefono+"&email="+email+"&mensaje="+mensaje;
    
                    $.get(ruta, function(data){
                            alerta(data);
                            $('#nombre').val("NOMBRE Y APELLIDO");
                            $('#documento').val("DOCUMENTO");
                            $('#telefono').val("TELEFONO");
                            $('#email').val("CORREO ELECTRONICO");
                            $('#mensaje').val("MENSAJE");
                        
                    });
                }else{
                    alerta("Ingrese un documento para consultar");
                }
            }
            
        </script>
    
    <?php
}

function getCuerpoResenia(){
    ?>
    
        <div id="content">
            <br />
            
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                <span style="color: #36A9E1F; font-size: 1.1em; font-weight: bold;">RESE�A</span>
                <img style="margin-right: 100px; height: 13px;" src="../../img/cuadros.png"/>
                <p style="text-align: justify; color: #878787;">
                    La <span style="color: #312783;">UNIDAD OFTALMOLOGICA LASER S.A.</span>; es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta 
                    servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso 
                    tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al 
                    diagn�stico, tratamiento y cirug�a ocular, brindando excelente servicios a los usuarios.
                    es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al diagn�stico, tratamiento y cirug�a ocular, brindando 
                    excelente servicios a los usuarios.
                </p><br /><br /><br />
            </div>
            
            
            <?php getBotonesEstaticos(); ?>
        </div><br />
    
    <?php
}

function getCuerpoMisionVision(){
    ?>
        
        <div id="content">
            <br />
            <div style="width: 960px; margin: auto; background-color: #EDEDED; padding: 23px;">
                <span style="color: #36A9E1F; font-size: 1.1em; font-weight: bold;">MISI&Oacute;N</span>
                <img style="margin-right: 100px; height: 13px;" src="../../img/cuadros.png"/>
                <p style="text-align: justify; color: #878787;">
                    La <span style="color: #4357FF;">UNIDAD OFTALMOLOGICA LASER S.A.</span>; es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta 
                    servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso 
                    tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al 
                    diagn�stico, tratamiento y cirug�a ocular, brindando excelente servicios a los usuarios.
                    es una Sociedad An�nima y la primera I.P.S. de car�cter privado que presta servicios a nivel local y regional, con un recurso humano altamente calificado y comprometido, cuenta con un recurso tecnol�gico de la m�s alta calidad en los procesos de tecnolog�a de punta en el campo medico cient�fico dedicada al diagn�stico, tratamiento y cirug�a ocular, brindando 
                    excelente servicios a los usuarios.
                </p><br />
                <span style="color: #36A9E1F; font-size: 1.1em; font-weight: bold;">VISI&Oacute;N</span>
                <img style="margin-right: 100px; height: 13px;" src="../../img/cuadros.png"/>
                <p style="text-align: justify; color: #878787;">
                    Ser en el 2015, una instituci�n l�der en oftalmolog�a con una excelente calidad y calidez humana, medica cient�fica, moral y �tica debidamente acreditada por la normatividad legal de acuerdo a los est�ndares de calidad, que complementada con una alta tecnolog�a nos permite brindar un �ptimo servicio a nuestros usuarios soportados  en la eficiencia, la 
                    competitividad y el compromiso.
                </p>
                <br />
            </div>
            
            <?php getBotonesEstaticos(); ?>
        </div><br />
    
    <?php
}

function getCuerpoEspecialistas(){
	?>
    
        <div id="content">
            <div style="text-align: center;">
                <img src="../../img/IMG_0076.1.jpg" style="width: 1000px;"/>
            </div>
            <div style="border-bottom: 8px solid #36A9E1; height: 15px; margin: auto; margin-bottom: 15px; width: 1000px;">&nbsp;</div>
			
			
			<div style='width: 1000px; margin: auto;'>
				<h2 style='text-align: center'>MEDICOS OFTALMOLOGOS SUBESPECIALISTAS</h2><br><br><br>
				<div style='width: 45%; float: left; text-align: right; margin: 0 3% 0 0'>
					<div class='tituloEspecialista'>Dr. GERMAN HENRY MONTOYA ORJUELA</div>
					<p>
						Universidad Libre seccional Cali (1981)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Fundaci�n Oftalmol�gica de Argentina Jorge Malbran<br>

						Patolog�a Vitreo-Retinal (1994)<br>

						Subespecialidad en Retina y V�treo<br>

						Tarjeta Profesional: 90490<br>

						Inscripci�n Departamental: 00904-90 del 27 de Octubre de 2009
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. JOSE FERNANDO TRUJILLO ROBLEDO</span>
					<p>
						Universidad de Antioquia (1989)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Hospital San Vicente de Pa�l, Medell�n (1989)<br>

						Subespecialidad en Cornea<br>

						Tarjeta Profesional: 149537/85<br>

						Inscripci�n Departamental: 14953-85 del 22 de Julio de 2002<br>
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. EDUARDO NARANJO MEJIA</span>
					<p>
						Pontificia Universidad Javeriana (1992)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Subespecialidad en Oculoplastica<br>

						Tarjeta Profesional: 15350788<br>

						Inscripci�n Departamental: 15350-88 Del 27 de octubre de 2009<br>
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. RICARDO DE LIMA MORALES</span>
					<p>
						Pontificia Universidad Javeriana (1992)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Subespecialidad en Oculoplastica<br>

						Tarjeta Profesional: 15350788<br>

						Inscripci�n Departamental: 15350-88 Del 27 de octubre de 2009<br>
					</p><br><br>
					
				</div>

				<div style='width: 45%; float: left; text-align: left; margin: 0 0 0 3%'>
				
					<span class='tituloEspecialista'>Dra. NATALIA ANDREA GUZMAN TAMAYO</span>
					<p>
						Universidad Militar Nueva Granada<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Subespecialidad en Glaucoma<br>

						Tarjeta Profesional: 0124-09<br>

						Inscripci�n Departamental: 0124-09 de 20 de febrero de 2014<br>
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. JORGE ALBERTO ARCILA</span>
					<p>
						Universidad Nacional Aut�noma de M�xico (2002)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Subespecialidad en Oftalmolog�a Pedi�trica<br>

						Inscripci�n Departamental: 3771-92  de 26 de Agosto de 2002<br>
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. RICARDO VALDES</span>
					<p>
						Universidad Pierre Et Merie Curie<br>

						M�dico Especialista-Cirujano Retin�logo<br>

						Tarjeta Profesional: 357-94<br>

						Inscripci�n Departamental: 357 de Julio 14 de 1994<br>
					</p><br><br>


				</div><br style='clear: both'/>
				
				<br><br><h2 style='text-align: center'>MEDICOS ESPECIALISTAS EN OFTALMOLOGIA</h2><br><br><br>
				<div style='width: 45%; float: left; text-align: right; margin: 0 3% 0 0'>
					<span class='tituloEspecialista'>Dr. VICTOR CONRADO VELEZ RAMIREZ</span>
					<p>
						Universidad de Antioquia (1986)

						M�dico Especialista- cirujano en OFTALMOLOGIA

						Tarjeta Profesional: 4364 /81

						Inscripci�n Departamental: 1259 MD de Octubre 14 de 1997
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. LUIS HUMBERTO GARCIA OCAMPO</span>
					<p>
						Universidad Nacional Aut�noma de M�xico (2001)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Tarjeta Profesional: 536/ 94<br>

						Inscripci�n Departamental: 536-94 del 8 de Junio de 2001<br>
					</p><br><br>
					
				</div>

				<div style='width: 45%; float: left; text-align: left; margin: 0 0 0 3%'>
				
					<span class='tituloEspecialista'>Dra. MONICA VARGAS BARRIOS</span>
					<p>
						Fundaci�n Universitaria S�nitas (2013)<br>

						M�dico Especialista- cirujano en OFTALMOLOGIA<br>

						Tarjeta Profesional : 2100/08<br>

						Inscripci�n Departamental: 2100-08 de 27 de agosto de 2013<br>
					</p><br><br>
					
				</div>
				
				<div style='width: 45%; float: left; text-align: left; margin: 0 0 0 3%'>
				
					<span class='tituloEspecialista'>Dr. MARCO EMILIO MARTINEZ ROJAS</span>
					<p>
						Universidad del Valle(1994)<br>
						M�dico Especialista- cirujano en OFTALMOLOGIA<br>
						Subespecialidad en C�rnea<br>
						Tarjeta Profesional: 3194/94<br>
						Inscripci�n Departamental: 3194-94 del 13 de mayo de 2014
					</p><br><br>
					
				</div><br style='clear: both'/>
				
				<br><br><h2 style='text-align: center'>OPTOMETRAS</h2><br><br><br>
				<div style='width: 45%; float: left; text-align: right; margin: 0 3% 0 0'>
					<span class='tituloEspecialista'>Dra. LINA MARIA JARAMILLO TREJOS</span>
					<p>
						Fundaci�n Universitaria del �rea Andina (2007)-OPTOMETRA<br>

						Tarjeta Profesional : 2548 CTNPO<br>

						Inscripci�n Departamental: 1627-07 de 17 de Sept de 2007<br>
					</p><br><br>
					
					<span class='tituloEspecialista'>Dr. FREDY  HERNAN MORENO CAVIEDES</span>
					<p>
						Universidad, LA SALLE (2003) -   OPTOMETRA<br>

						Tarjeta Profesional: 1340CNTPO<br>

						Inscripci�n Departamental: 252404 de 4 de Nov de 2008<br>
					</p><br><br>
					
				</div>

				<div style='width: 49%; float: left; text-align: left; margin: 0 0 0 3%'>
				
					<span class='tituloEspecialista'>Dr. BERNARDO BETANCURT</span>
					<p>
						Universidad, LA SALLE (2003) -   OPTOMETRA<br>

						Tarjeta Profesional: 0074<br>

						Inscripci�n Departamental: 014 del 10 de Junio de 1988<br>
					</p><br><br>
					
					
					<span class='tituloEspecialista'>Dr. MIGUEL ANGEL NOCUA</span>
					<p>
						Universidad, LA SALLE (2003) -   OPTOMETRA<br>

						Tarjeta Profesional: 0469<br>

						Inscripci�n Departamental: 0671 del 22 de mayo de 2000<br>
					</p><br><br>
					
				</div><br style='clear: both'/>
				
				<br><br><h2 style='text-align: center'>MEDICO ANESTESIOLOGO</h2><br><br><br>
				<div style='text-align: center'>
					<span class='tituloEspecialista'>Dr. JOSE DIEGO ROLDAN HOYOS</span>
					<p>
						Universidad del Valle<br>

						M�dico Especialista- Anestesiolog�a y Reanimaci�n<br>

						Inscripci�n Departamental: 3076-91<br>

						Inscripci�n Departamental: 3076-91 de 28 de Febrero de 2001<br>
					</p><br><br>
				</div>
				
			</div>
        </div><br />
    
    <?php
}

function getPie(){
    ?>
				<div style='text-align: center; font-weight: bold;'>
					<a style="color: #fff" href="../../importados/BALANCES_OFICIALES.pdf" target="_blank"><img src='../../img/BALANCES_OFICIALES-01.png'/></a>
					<a href='#header' style='color: #27348B'><img src='../../img/IR_ARRIBA-01.png'/></a>
					<a href='https://www.facebook.com/UnidadOftalmologicaLaserSA'><img src='../../img/facebook-01.png'/></a>
					<a href='https://twitter.com/UOlaser1'><img src='../../img/TWITTER-01.png'/></a>
				</div><br>
                <div id="footer" style="width: 1000px; font-size: 10pt">
                        <div>Pereira | Risaralda | Colombia</div>
                        <div>Unidad Oftalmol�gica L�ser S.A. | gerencia.uolaser@gmail.com | TODOS LOS DERECHOS RESEVADOS 2014 | Designed By Catavento. | <a style='color: #ffffff' href='http://www.catavento.co/'>www.catavento.co/</a></div>
					</div>
                </div>
            
            </body>
            </html>
    <?php
}

?>