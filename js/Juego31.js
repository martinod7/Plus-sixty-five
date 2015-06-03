/**
 CONSULTA
 -------------

 - Realizando un do/while
 - Contador correctas 2 movimientos equivalen a 1 , con lo cual si hay 8 cartas, seria un maximo de 4 movimientos
 - Mientras el contador de correctas no sea igual a 4 realizara ese bucle

 - Verificar que la funcion resetear esta correcta
 */

var pos0 = '';
var pos1 = '';
var coño = false;
var contador = 1;
var aciertos = 1;
var erradas = 1;
var target = 0;
var respuestas = 0;

$(carregarEscenari);

$(moviments);

function carregarEscenari(){

  var numerosAloLoco = ["1","2","3","4","5","6"];
  var numerosAloLoco2 = ["1","2","3","4","5","6"];
  respuestas = numerosAloLoco.concat(numerosAloLoco2);
  respuestas.sort( function() { return Math.random() - .6 } );

  for(var i = 0; i <respuestas.length; i++){
    $("<div class='flipWrapperGir' id='"+respuestas[i]+"'><div class='cardGir'><div class='faceGir frontGir'>Dr Rius</div><div class='faceGir backGir'>"+respuestas[i]+"</div></div></div>").appendTo(".Contenedor3");
  }

}

function moviments(){

  $('.flipWrapperGir').click(function (event) {
      
    $(this).find('.cardGir').addClass('flipped');
      
      $('.contadorcito').html(contador++);
 
        if(!coño) {
          pos0 = $(this).attr('id');
          coño= true;

          
        }else{

          pos1 = $(this).attr('id');

        }
      if(contador % 2 == 1){ // És par?

          if(pos0 != pos1){            
            
            setTimeout(function() {
              $('.erradetas').html(erradas++);
              $(esborra);
              $(reset);
              },500);
          }else{
            $('.aciertitos').html(aciertos++);
          }
      }
  });
}

function esborra(){

    $('#'+pos0).find('.cardGir').removeClass('flipped');
    $('#'+pos1).find('.cardGir').removeClass('flipped');//

}

function reset(){
  coño = false;
  pos0 = '';
  pos1 = '';
  //alert("Pos 0: "+pos0+" : Pos 1: "+pos1);
}