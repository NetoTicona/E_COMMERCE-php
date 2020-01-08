<?php 
require_once "conexion.php";

class ModeloPlantilla{
    static public function mdlEstiloPlantilla($tabla){
        //el metod es estatido cuando recibe parametros;
        $stmt = Conexion::conectar()-> prepare("select * from $tabla");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();

    }// fin del metodo
}//fin modelo plntla

?>