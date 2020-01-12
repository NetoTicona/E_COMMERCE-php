<?php 

//aqui en index juntamos lo necesitraremos
require_once "modelos/rutas.php";

require_once "controladores/plantilla.controlador.php";
require_once "modelos/plantilla.modelo.php";

require_once "controladores/productos.controlador.php";
require_once "modelos/productos.modelo.php";

require_once "controladores/slide.controlador.php";
require_once "modelos/slide.modelo.php";


//vicnular la plantilla bajo elmodelo vista controlador:
//pOO:
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();


?>