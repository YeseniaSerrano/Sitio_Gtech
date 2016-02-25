<?php 
include 'includes/header.php';
include 'includes/ventana-emergente.php'; 
include 'includes/menu.php';

if($_GET['pagina']=='quines_somos' || $_GET['pagina']=='contactenos' || $_GET['pagina']=='impresion-digital' || $_GET['pagina']=='impresion-formato-ancho' || $_GET['pagina']=='sublimacion' || $_GET['pagina']=='servicios-web' || $_GET['pagina']=='servicios-tecnico' || $_GET['pagina']=='publicidad' || $_GET['pagina']=='accesorios-informaticos'){

	include 'includ_container/'.$_GET['pagina'].'.php';
}else{
	include 'includ_container/inicio.php';
}

include 'includes/footer.php'; ?>
