/*  */


$.ajax({
	url:"ajax/plantilla.ajax.php",
	success:function(respuesta){
		//console.log( JSON.parse(respuesta) );
		var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;

		$(".backColor, .backColor a").css({"background": colorFondo,
		"color": colorTexto });

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, 
		"color": textoSuperior})
	}
})

/* cuadricula o lista */
/* vamoa contar cuantas veces esta en nestro documento */

var btnList = $('.btnList');
/* for( var i = 0 ; i< btnList.length;i++ ){
	
}
 */
$("#btnGrid0").click(function(){
	$(".list0").hide();
	$(".grid0").show();
	$('#btnGrid0').addClass("backColor");
	$('#btnList0').removeClass("backColor");
})


$("#btnList0").click(function(){
	$(".list0").show();
	$(".grid0").hide();
	$('#btnGrid0').removeClass("backColor");
	$('#btnList0').addClass("backColor");
})

/* -------------------------------------------- */
$("#btnGrid1").click(function(){
	$(".list1").hide();
	$(".grid1").show();
	$('#btnGrid1').addClass("backColor");
	$('#btnList1').removeClass("backColor");
})


$("#btnList1").click(function(){
	$(".list1").show();
	$(".grid1").hide();
	$('#btnGrid1').removeClass("backColor");
	$('#btnList1').addClass("backColor");
})

/* ................................................ */

$("#btnGrid").click(function(){
	$(".list2").hide();
	$(".grid2").show();
	$('#btnGrid2').addClass("backColor");
	$('#btnList2').removeClass("backColor");
})


$("#btnList").click(function(){
	$(".list2").show();
	$(".grid2").hide();
	$('#btnGrid2').removeClass("backColor");
	$('#btnList2').addClass("backColor");
})