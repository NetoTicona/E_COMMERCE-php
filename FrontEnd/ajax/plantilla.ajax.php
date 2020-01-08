<?php 
require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

    public function ajaxEStiloPlamtilla(){
        $respuesta = ControladorPlantilLa::ctrEstiloPlantilla();
        // $respuesta es un array hay q hacero string
        echo json_encode($respuesta);
    }
}


$objeto = new ajaxPlantilla();
$objeto -> ajaxEStiloPlamtilla();


?>