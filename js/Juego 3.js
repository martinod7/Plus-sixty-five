$(cargaTablero);
$(moviment);

var si = 0;
var no = 0;
var mov = 0;

var moviment = $(".moviment");
var encertada = $(".encertada");
var fallada = $(".fallada");

function cargaTablero(){

var numerosAloLoco = ["1","✿","✿","✈","✄","1"];
var numerosAloLoco2 = ["✄","☂","✈","☃","☃","☂"];
  respuestas = numerosAloLoco.concat(numerosAloLoco2);
  respuestas.sort( function() { return Math.random() - .6 } );

  for(var i = 0; i <respuestas.length; i++){
    $("<li class='letras'>"+respuestas[i]+"</li>").appendTo(".juego");
  }

}

function moviment(){

	$(".juego li").click(function () {
	
  		$(this).toggleClass("flipped");
  
  			var flipped = $(".flipped");
    
  				if ( flipped.length === 2 ) {
    
    				var pos0 = flipped.first();
    				var pos1 = flipped.last();

    				mov++;
    				moviment.text("Moviments: " + mov);
    
    			if ( pos0.text() === pos1.text() ) {
      				si++;
      				encertada.text("Encertades: " + si);
      				setTimeout(function() {

      					pos0.fadeTo( "fast", 0 );
      					pos1.fadeTo( "fast", 0 );

      				},1000)

      				if(si == 6){
      					mensaje();
      				}
      
    			}else{
    				no++	
    				fallada.text("Fallada: "+ no);
    			}
  
    			setTimeout(function () {
      				$(".flipped").removeClass("flipped");
    			}, 500);
  				}
  
});

}

function mensaje(){
	swal("","","success");
}













