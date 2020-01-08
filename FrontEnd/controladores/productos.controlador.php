<?php 
    class ControladorProductos{

        static public function ctrMostrarCategorias($item , $valor){
            $tabla = "categorias";
            $respuesta = ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);
            return $respuesta;
        }

        static public function  ctrMostrarSubcategorias($item, $valor){
            /* $item = "id_categoria";
            $valor = $value["id"]; */
            $tabla = "subcategorias";
         
            $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla,$item,$valor);
            return $respuesta;
        }
        

    }



?>