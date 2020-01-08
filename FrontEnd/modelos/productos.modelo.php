<?php

require_once "conexion.php";


class ModeloProductos{

    static public function mdlMostrarCategorias($tabla,$item,$valor){
        if( $item != null ){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();

        }else{
            //me hace la
        $stmt = Conexion::conectar()-> prepare("select * from $tabla  ");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
        }

    }

    static public function mdlMostrarSubCategorias($tabla, $item, $valor){
        /* $item = "id_categoria";
            $valor = $value["id"]; 
            $tabla = "subcategorias"; */
            
            $stmt = Conexion::conectar()->prepare("select * from $tabla where $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
    
            $stmt -> execute();
    
            return $stmt -> fetchAll(); //fecth por mas que sea unmo l pne dentro de un artreglo
    
            $stmt -> close();
    
            $stmt = null;
    }
    



}