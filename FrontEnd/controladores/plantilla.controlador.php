<?php 

class ControladorPlantilla{

    /*===============================
     llamamos plantilla                              
    ===============================*/
    public function plantilla(){
        include "vistas/plantilla.php"; //se requerra de 
    }

    /*===============================
     traemos estilos de la base de datos face.. color                              
    ===============================*/
    public function ctrEstiloPlantilla(){
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla ::mdlEstiloPlantilla($tabla);
        return $respuesta;
    }
   
}

?>