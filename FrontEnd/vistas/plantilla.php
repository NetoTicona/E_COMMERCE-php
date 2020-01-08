<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
     /*===============================
     Ruta fija del proyecto:                              
    ===============================*/
    $Urlruta = Ruta::ctrRuta(); //traemos la clase y solicitamos una respuesta;
    //var_dump($Urlruta);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="tienda Virtual" >
    <title>Document</title>
    <meta  name="description"  content="Este un sitio  decompras por internet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fonts de google -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $Urlruta?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $Urlruta?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $Urlruta?>vistas/css/slide.css"  >
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

    <?php 
    $rpta = ControladorPlantilla::ctrEstiloPlantilla();
    echo '<link rel="icon" href="http://localhost/E-COMMERCE/BackEnd/'.$rpta["icono"].'">';
    ?>
    

    
    
</head>
<body>

<?php 
/*===============================
 Cabecera                              
===============================*/
include "modulos/cabera.php";
/*===============================
 Contenido  dinamico                              
===============================*/
$ArrayRutas = array();
$ruta = null;
if( isset( $_GET["ruta"] ) ){
    
    $ArrayRutas = explode("/",$_GET["ruta"]);
    $item = "ruta";
    $valor = $ArrayRutas[0];
    $rutaBaseDatos = ControladorProductos::ctrMostrarCategorias($item,$valor);
    /*===============================
     URL Amigable de categoria                              
    ===============================*/
     if($valor == $rutaBaseDatos["ruta"]){
        $ruta = $valor;
     }   
        /*===============================
     Url amigable de subcategorias                              
    ===============================*/

    $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
    foreach ($rutaSubCategorias as $key => $value) {
		
		if($ArrayRutas[0] == $value["ruta"]){

			$ruta = $ArrayRutas[0];

		}

	}


     /*===============================
      Lista blanca de url amigables                              
     ===============================*/
    if( $ruta != null ){
        include "modulos/productos.php";
    }else{
        include "modulos/error.php";
    }



}else{
    //no vienen variables get
    include "modulos/slidee.php";
}



?>


<script src="<?php echo $Urlruta?>vistas/js/plugins/jquery-3.4.1.min.js" ></script>
 <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./vistas/js/plantilla.js" ></script>
<script src="./vistas/js/cabezote.js" ></script>
<script src="./vistas/js/slide.js" ></script>


</body>
</html>