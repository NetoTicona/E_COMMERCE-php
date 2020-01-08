


<!--=============================
 TOP                              
==============================-->
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
        <!--=============================
         Sociles redes                              
        ==============================-->
        <div class="col-lg-9 col-md-9  col-sm-8  col-xs-12 social" >
            <ul>

			<?php 
			
			
				$social = ControladorPlantilla::ctrEstiloPlantilla();
				//jsonRedes en n string 
				$jSonRedes= json_decode($social["redesSociales"],true);
				//var_dump($jSonRedes);

				foreach( $jSonRedes as $key => $value){

					
					echo '<li>';
					echo '<a href="'.$value["url"].'" target="_blank">';
					echo	'<i class="fa ' .$value["red"] .' redSocial ' .$value["estilo"].' " aria-hidden="true"></i>';
					echo '</a>';
                	echo '</li>';

				}

			
			?>
            <!--     <li>
					<a href="http://facebook.com/" target="_blank">
						<i class="fa fa-facebook redSocial facebookColor" aria-hidden="true"></i>
					</a>
                </li>
                <li>
						<a href="http://youtube.com/" target="_blank">
							<i class="fa fa-youtube redSocial youtubeColor" aria-hidden="true"></i>
						</a>
                </li>
                <li>
					 <a href="http://twitter.com/" target="_blank">
							<i class="fa fa-twitter redSocial twitterColor" aria-hidden="true"></i>
						</a>
				</li>

				<li>
						<a href="http://google.com/" target="_blank">
							<i class="fa fa-google-plus redSocial googleColor" aria-hidden="true"></i>
						</a>
				</li>

				<li>
						<a href="http://instagram.com/" target="_blank">
							<i class="fa fa-instagram redSocial instagramColor" aria-hidden="true"></i>
						</a>
				</li> -->

            </ul>
        </div>
        <!--=============================
         Registro                              
        ==============================-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				
				<ul>
					
					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

				</ul>

			</div>	

        </div>
    </div>

</div>
<!--=============================
 HEADER                              
==============================-->
<header class="container fluid">
    <div class=container>
        <div class="row " id="cabecera">
            <!--=============================
             Logotipo                              
            ==============================-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
                <a href="#">
                    <img src="http://localhost/E-COMMERCE/BackEnd/<?php echo $social["Logo"];?>" width="100%" class="img-responsive">
                    
                </a>

            </div>

            <!--=============================
             botones Categorias y buscador                              
            ==============================-->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 " >
                <!-- boton categorias -->
                <div class="col-lg-4 col-md-4 float-left col-sm-4 col-xs-12 backColor" id="btnCategorias">

                    <p>Categorias<span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span></p>
                </div>
                <!-- buscador -->
                <div class="input-group  col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

					<span class="input-group-btn">
						
						<a href="#">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>

            </div>
            <!--=============================
             Carrito                              
            ==============================-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                <button class="btn btn-default pull-left backColor">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
                </a>

                <p>Tu cesta <span class="cantidadCesta"></span> USD <span class="sumaCEsta">150</span> </p>
                
			 </div>
        </div>
        <!--=====================================
		CATEGORÍAS
		======================================-->



		
			<div class="col-xs-12 backColor " id="categorias"  >
				<div id="centrar">
					<?php 
					$item=null;
					$valor=null;
						$categorias = ControladorProductos::ctrMostrarCategorias($item,$valor);
						
					 
						foreach ($categorias as $key => $value) {

							echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
								<h4>
									<a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
								</h4>
							
							<hr>

							<ul>';

							$item = "id_categoria";

							$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
							
							foreach ($subcategorias as $key => $value) {
									
									echo '<li><a href="'.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a></li>';
								}	
								
							echo '</ul>

						</div>';
						}
					
					?>
				</div>	
					

			</div>
		
		

<!-- 			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div>	

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				
				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>
				
				<hr>

				<ul>
					
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
								
				</ul>

			</div> -->	

		</div>
           

        </div>


   

</header>