$(FirstLvl);

function FirstLvl(){
    $(".close1").click(function(){
swal({
title:"Nivell 1",
text:"Realitza la paraula a través de les síl·labes que se't donen, a mesura que augmenti el nivell hi apareixeran més cartes"
});
});
 
  $(document).ready(function () {
    $('.flipWrapper').click(function () {
      $(this).find('.card').toggleClass('flipped');
        //$("div").remove('#'+i);//Borra todas las cartas por el hecho de estar dentro de card, se utilizara para borrar una vez sean correctas las cartas
        //Asignandole un valor estatico no hay problemas porque lo borrar al clickar , pero con un valor que proviene de un array falla
          return false;
    });
  });

	var letras = ["X","A","S","S","Í","S"];
	letras.sort( function() { return Math.random() - .6 } );
	for(var i = 0; i <letras.length ; i++){
		$("<div class='flipWrapper'><div class='card'><div class='face front'>Dr Rius</div><div class='face back'>"+letras[i]+"</div></div></div>").appendTo(".ContenedorFlip");
	 }
	$(".ContenedorFlip").append("<section class='content bgcolor-1'><span class='input input--nao'><input class='input__field input__field--nao' type='text' id='input-1' /><label class='input__label input__label--nao' for='input-1'><span class='input__label-content input__label-content--nao'>Respuesta</span></label><svg class='graphic graphic--nao' width='300%' height='100%' viewBox='0 0 1200 60' preserveAspectRatio='none'><path d='M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0'/></svg></span><a href='#' class='redButton' id='push'>Click!</a></section>");
	 $('#push').click(function(){
  		if($('#input-1').val() == 'xassís'){
  			swal("","","success")
          setTimeout(function() {
 $( ".Level1" ).html( "Nivel 2" );
 $(".ContenedorFlip").empty();
 $(SecondLvl);
}, 2000);
  		}else{
  			sweetAlert("", "", "error");
  		}
	 });
}


function SecondLvl(){
  $(".close1").click(function(){
    swal({
    title:"Nivell 2",
    text:"Realitza la paraula a través de les síl·labes que se't donen, a mesura que augmenti el nivell hi apareixeran més cartes"
    });
  });
  $(document).ready(function () {
    $('.flipWrapper2').click(function () {
      $(this).find('.card2').toggleClass('flipped');
        //$("div").remove('#'+i);//Borra todas las cartas por el hecho de estar dentro de card, se utilizara para borrar una vez sean correctas las cartas
        //Asignandole un valor estatico no hay problemas porque lo borrar al clickar , pero con un valor que proviene de un array falla
          return false;
    });
  });
  var letras = ["E","X","A","S","P","E","R","A","R"];
  letras.sort( function() { return Math.random() - .6 } );
  for(var i = 0; i <letras.length ; i++){
    $("<div class='flipWrapper2'><div class='card2'><div class='face2 front2'>Dr Rius</div><div class='face2 back2'>"+letras[i]+"</div></div></div>").appendTo(".ContenedorFlip");
   }
  $(".ContenedorFlip").append("<section class='content bgcolor-1'><span class='input input--nao'><input class='input__field input__field--nao' type='text' id='input-2' /><label class='input__label input__label--nao' for='input-2'><span class='input__label-content input__label-content--nao'>Respuesta</span></label><svg class='graphic graphic--nao' width='300%' height='100%' viewBox='0 0 1200 60' preserveAspectRatio='none'><path d='M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0'/></svg></span><a href='#' class='redButton' id='push2'>Click!</a></section>");
   $('#push2').click(function(){
      if($('#input-2').val() == 'exasperar'){
        swal("","","success")
          setTimeout(function() {
 $( ".Level1" ).html( "Nivel 3" );
  $(".ContenedorFlip").empty();
 $(ThirdLvl);
}, 2000);
      }else{
       sweetAlert("", "", "error");
      }
   });
}

function ThirdLvl(){
      $(".close1").click(function(){
swal({
title:"Nivell 3",
text:"Realitza la paraula a través de les síl·labes que se't donen, a mesura que augmenti el nivell hi apareixeran més cartes"
});
});
    $(document).ready(function () {
    $('.flipWrapper3').click(function () {
      $(this).find('.card3').toggleClass('flipped');
        //$("div").remove('#'+i);//Borra todas las cartas por el hecho de estar dentro de card, se utilizara para borrar una vez sean correctas las cartas
        //Asignandole un valor estatico no hay problemas porque lo borrar al clickar , pero con un valor que proviene de un array falla
          return false;
    });
  });
  var letras = ["C","O","N","C","R","E","T","A","M","E","N","T"];
  letras.sort( function() { return Math.random() - .6 } );
  for(var i = 0; i <letras.length ; i++){
    $("<div class='flipWrapper3'><div class='card3'><div class='face3 front3'>Dr Rius</div><div class='face3 back3'>"+letras[i]+"</div></div></div>").appendTo(".ContenedorFlip");
   }
  $(".ContenedorFlip").append("<section class='content bgcolor-1'><span class='input input--nao'><input class='input__field input__field--nao' type='text' id='input-3' /><label class='input__label input__label--nao' for='input-1'><span class='input__label-content input__label-content--nao'>Respuesta</span></label><svg class='graphic graphic--nao' width='300%' height='100%' viewBox='0 0 1200 60' preserveAspectRatio='none'><path d='M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0'/></svg></span><a href='#' class='redButton' id='push3'>Click!</a></section>");
   $('#push3').click(function(){
      if($('#input-3').val() == 'concretament'){
       swal("","","success")
          setTimeout(function() {
 $( ".Level1" ).html( "FINAL!!!" );
}, 2000);
      }else{
       sweetAlert("", "", "error");
      }
   });

}

