var item = 0;
var itemPAginado = $("#paginacion li");
//console.log( itemPAginado.length  );

var interrumpirCiclo = false; 
var imgPRoducto = $('.imgProducto');
var titulos1 = $("#slide h1");
var titulos2 = $("#slide h2");
var titulos3 = $("#slide h3");
var btnVerProducto = $("#slide button");
var toogle = false;




$('#paginacion li').click(function(){
    item = $(this).attr("item")-1;
    movimiento(item); 

});
/* movimiento slide con paginador */
function movimiento(item){

    $('#slide ul').animate({"left": item * -100 + "%" },500);

    $('#paginacion li').css({"opacity":.5});

    $(itemPAginado[item]).css({ "opacity":1 });

    interrumpirCiclo = true;

    $(imgPRoducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
    $(imgPRoducto[item]).animate({"top":30 +"px", "opacity": 1},600)

    $(titulos1[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos1[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos2[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos3[item]).animate({"top":30 +"px", "opacity": 1},600)

$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1},600)

}

/* movmienro de slide con flechas */

function avanzar(){

    if( item ==  itemPAginado.length -1  ){
        item=0
    }else{
        item++
    }

    movimiento(item)
}
$('#slide #avanzar').click(function(){
 avanzar();
})

$('#slide #retroceder').click(function(){
    console.log( 'retroceder');
    
    if( item == 0){
        item=3
    }else{
        item=item-1
    }

    movimiento(item)
})

/* movimieno automatico */
setInterval(function(){
    if(interrumpirCiclo){
        interrumpirCiclo=false;  
    }else{
        avanzar();
    }
    
},4000)


/* efectos imagens partdculares */
$(imgPRoducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(imgPRoducto[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos1[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos1[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos2[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos2[item]).animate({"top":30 +"px", "opacity": 1},600)

$(titulos3[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(titulos3[item]).animate({"top":30 +"px", "opacity": 1},600)

$(btnVerProducto[item]).animate({"top":-10 +"%", "opacity": 0},100)
$(btnVerProducto[item]).animate({"top":30 +"px", "opacity": 1},600)

$("#btnSlide").click(function(){

	if(!toogle){

		toogle = true;

		$("#slide").slideUp("fast");

		$("#btnSlide").html('<i class="fa fa-angle-down"></i>')
	
	}else{

		toogle = false;

		$("#slide").slideDown("fast");

		$("#btnSlide").html('<i class="fa fa-angle-up"></i>')
	}

})
 /* manilpulamnos en css del slide  */
 /* Algunos punto simportantes: */
 /* Slide ul debe aumentar 100 por cada imagen */
 /* slide ul li considera lo anterior como 100%, asi q est se debe dividr 100%/cantidaad de elementos */

 $('#slide ul li').css({"width":itemPAginado.length*100 + "%"});
 $('#slide ul li').css({"width":(100/itemPAginado.length) + "%"});