/*=============================================
CABEZOTE
=============================================*/
//$('#categorias').css({ 'display':'flex','align-items':'flex-start','justify-content':'space-between' })
$('#btnCategorias').click(function(){
	
	
	gemmeny();

	if(window.matchMedia("(max-width:767px)").matches ){
		//si estoy en na pantalla de maximo 767 ;
		
		$('#btnCategorias').after( $('#categorias').slideToggle("fast") );
		//$('#categorias').css({ 'display':'flex','align-items':'flex-start','justify-content':'space-between' })
	}else{
		
		$('#cabecera').after( $('#categorias').slideToggle("fast") );
		
	}
	
	
})
/* 
display:flex;
	align-items:flex-start;
	justify-content: space-between; */

	function gemmeny(){
		
	}
	