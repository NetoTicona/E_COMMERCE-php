

<div class="container-fluid" id="slide">

    
    <!--=============================
     diapositivas                              
    ==============================-->
    <ul>
    <?php 
        $servidor = Ruta::CtrRutaServidor();
        $slide = ControladorSlide::ctrMostrarSlide();
        //var_dump($slide);

        foreach($slide as $key => $value){
            
					$estiloImgProducto = json_decode($value["estiloImgProducto"], true);
					$estiloTextoSlide = json_decode($value["estiloTextoSlide"], true);
					$titulo1 = json_decode($value["titulo1"], true);
					$titulo2 = json_decode($value["titulo2"], true);
                    $titulo3 = json_decode($value["titulo3"], true);
                    
                  echo  '<li>
                    <img src="'.$servidor.$value["img_fomdo"].'">
            
                      <div class="slideOpciones '.$value["tipoSlide"].'">';
                        
                        if($value["imgProducto"] != "" ){
                          echo  '<img class="imgProducto" src="'.$servidor.$value["imgProducto"].'" style="top:'.$estiloImgProducto["top"].'; left:'.$estiloImgProducto["left"].'; width:'.$estiloImgProducto["width"].'; right:'.$estiloImgProducto["right"].'; ">';
                        }                      
                        
            
                           echo '<div class="textosSlide" style="top:'.$estiloTextoSlide["top"].'; left:'.$estiloTextoSlide["left"].'; width:'.$estiloTextoSlide["width"].'; right:'.$estiloTextoSlide["right"].'">
                                    
                                <h1 style="color:'.$titulo1["color"].'"> '.$titulo1["texto"].' </h1>
            
                                <h2 style="color:'.$titulo2["color"].'">'.$titulo2["texto"].'</h2>
            
                                <h3 style="color:'.$titulo3["color"].'"> '.$titulo3["texto"].' </h3>
            
                                <a href="#">
                                        
                                 '.$value["botonVerProducto"].'
            
                                </a>
            
                            </div>	
            
                        </div>
            
                </li>';
                   

        }
    
    ?>



    </ul>
    		<!--=====================================
		PAGINACIÓN
		======================================-->

	<!-- 	<ol id="paginacion">

            <li item="1"><span class="fa fa-circle"></span></li>
            <li item="2"><span class="fa fa-circle"></span></li>
            <li item="3"><span class="fa fa-circle"></span></li>
            <li item="4"><span class="fa fa-circle"></span></li>

        </ol> -->
        		<!--=====================================
		PAGINACIÓN
		======================================-->

		<ol id="paginacion">

                <?php

                    for($i = 1; $i <= count($slide); $i++){

                        echo '<li item="'.$i.'"><span class="fa fa-circle"></span></li>';

                    }		

                ?>

        </ol>



    <!--=====================================
		FLECHAS
		======================================-->	

		<div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
	    <div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>
</div>

<center>
	
	<button id="btnSlide" class="backColor">
		
			<i class="fa fa-angle-up"></i>

	</button>

</center>

