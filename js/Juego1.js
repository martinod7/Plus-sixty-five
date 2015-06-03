
var correctas = 0;
$(loadFirstTemplate);

function loadFirstTemplate() {
  $(".close1").click(function(){
    swal({
    title:"Nivell 1",
    text:"Tens que ordenar numericament del 1 al 10"
    });
  });

  var numbers = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  numbers.sort( function() { return Math.random() - .5 } );

  for ( var i=0; i<10; i++ ) {
    $('<div>' + numbers[i] + '</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i] ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }

  var words = [ 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten' ];
  for ( var i=1; i<=10; i++ ) {
    $('<div>' + words[i-1] + '</div>').data( 'number', i ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: Comprovacion
    });
  }
}
//////////////////////////////////////////////////LEVEL 2///////////////////////////////////////////////////////////////////////
function loadSecondTemplate(){
  $(".close1").click(function(){
    swal({
    title:"Nivell 2",
    text:"Tens que ordenar numericament de 10 en 10"
    });
  });

  correctas = 0;
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );
 

  var numbers = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 ];
  numbers.sort( function() { return Math.random() - .5 } );
 
  for ( var i=0; i<10; i++ ) {
    $('<div>' + numbers[i] + '</div>').data( 'decenas', numbers[i] ).attr( 'id', 'card'+numbers[i] ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }
 

  var words = [ '10', '20', '30', '40', '50', '60', '70', '80', '90', '100' ];
  for ( var i=0; i<words.length; i++ ) {
    $('<div>' + words[i] + '</div>').data( 'decenas1', words[i] ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: Comprovacion1
    } );
  }
}

function loadThirdTemplate(){
  $(".close1").click(function(){
    swal({
    title:"Nivell 3",
    text:"Tens que ordenar numericament del 1 al 10 i alfabeticament"
    });
  });

  correctas = 0;
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );
 

  var letras = [ "10", "20", "30", "40", "50", "a", "b", "c", "d", "e" ];
  letras.sort( function() { return Math.random() - .5 } );
 
  for ( var i=0; i<10; i++ ) {
    $('<div>' + letras[i] + '</div>').data( 'letra', letras[i] ).attr( 'id', 'card'+letras[i] ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }

  var respuestas = [ '10', '20', '30', '40', '50', 'a', 'b', 'c', 'd', 'e' ];
  for ( var i=0; i<respuestas.length; i++ ) {
    $('<div>' + respuestas[i] + '</div>').data( 'letra1', respuestas[i] ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: Comprovacion2
    } );
  }
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Comprovacion( event, ui ) {
  var slotNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
 
  if ( slotNumber == cardNumber ) {
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
      $(this).droppable( 'disable' );
        ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
        ui.draggable.draggable( 'option', 'revert', false );
        correctas++;
      } 
 
  if ( correctas == 10 ) {
    swal("","","success")
      setTimeout(function() {
        $( ".Level1" ).html( "Nivel 2" );
          loadSecondTemplate();
      }, 2000);
  }
 
}
/*------------------------------------------------------------------------*/
function Comprovacion1( event, ui ) {
  var slotNumber = $(this).data( 'decenas1' );
  var cardNumber = ui.draggable.data( 'decenas' );
 
  if ( slotNumber == cardNumber ) {

    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctas++;
  } 
 
  if ( correctas == 10 ) {

   swal("","","success")
   setTimeout(function() {
    $( ".Level1" ).html( "Nivel 3" );
     loadThirdTemplate();
     HELP();
    }, 2000);
  }
 
}
/*--------------------------------------------------------------------*/

/*-------------------------------------------------------------------*/
function Comprovacion2( event, ui ) {
  var slotNumber = $(this).data( 'letra1' );
  var cardNumber = ui.draggable.data( 'letra' );
 
  if ( slotNumber == cardNumber ) {
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctas++;
  } 
   
 
  if ( correctas == 10 ) {

   swal("","","success")
    setTimeout(function() {
      $( ".Level1" ).html( "FINAL!!!!!!");
    }, 2000);
    
  var mySound = new buzz.sound("js/final",{
    formats : ["mp3"],
    preload: true,
    autoplay: true,
    loop: false
  });
  mySound.play();
  }
 
}
