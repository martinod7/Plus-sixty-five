
<?php
require_once 'libs/ez_sql_core.php';
require_once 'libs/ez_sql_mysql.php';
require_once 'libs/Zebra_Pagination.php';

$conex = new ezSQL_mysql('root','','plus');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plus sixty five</title>
	<!--///////////////////////////////////////////CSS Juego 1////////////////////////////////////////////////////////-->
	<link href="css/Juego1.css" rel="stylesheet" media="screen">
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--//////////////////////////////////////////CSS Juego 2/////////////////////////////////////////////////////////-->
	<link href="css/Juego2.css" rel="stylesheet" media="screen">
  <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <!--/////////////////////////////////////////CSS Juego 3//////////////////////////////////////////////////////////-->
  <link href="css/Juego 3.css" rel="stylesheet" media="screen">
   <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/2.1.3/normalize.min.css">
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////CSS Historial/////////////////////////////////////////////////////////-->
  <link href="css/Historial.css" rel="stylesheet" media="screen">
  <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--/////////////////////////////////////////CSS BOOTSTRAP////////////////////////////////////////////////////////-->
	<link href="libs/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="libs/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" media="screen">
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--////////////////////////////////////////CSS Menú//////////////////////////////////////////////////////////////-->
  <link rel="stylesheet" href="Pruebas/css3animations/css/normalize.css">
  <link rel="stylesheet" href="Pruebas/css3animations/css/main.css">
  <link rel="stylesheet" href="Pruebas/css3animations/css/demo_styles.css">
  <link rel="stylesheet" href="Pruebas/css3animations/css/demo1.css">      
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--///////////////////////////////////////CSS INPUT FORMULARIO///////////////////////////////////////////////////-->
	<link rel="stylesheet" type="text/css" href="TextInputEffects/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="TextInputEffects/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="TextInputEffects/css/set2.css" />
	<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--/////////////////////////////////////////CSS BOTON/////////////////////////////////////////////////////////-->
	<link rel="stylesheet" href="pointpoint/assets/css/styles.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" />
	<link rel="stylesheet" href="pointpoint/assets/jquery.pointpoint/jquery.pointpoint.css" /> 
	<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <!--///////////////////////////////////CSS ALERT BOX////////////////////////////////////////////////////////////-->
  <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
  <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <!--//////////////////////////////////////////////JS ALERT BOX//////////////////////////////////////////////////-->
  <script src="sweetalert-master/dist/sweetalert.min.js"></script>
  <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--//////////////////////////////////////BOOTBOX FORM ALERT/////////////////////////////////////////////////// -->
  <script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>
  <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</head>
<body>
	<!-- container-fluid = contenedor completo -->
	<div class="container">
		<div class="dm-demo1">
		 	<nav class="nav clearfix">
            	<button class="nav-el" id="el-topleft" data-id="ov-topleft"><span class="icon-puzzle"></span></button><!-- main.css linia 176 -->
            	<button class="nav-el" id="el-topright" data-id="ov-topright"><span class="icon-cards"></span></button><!-- main.css linia 177 -->
            	<button class="nav-el" id="el-btmleft" data-id="ov-btmleft"><span class="icon-pen"></span></button>
            	<button class="nav-el" id="el-btmright" data-id="ov-btmright"><span class="icon-search"></span></button>
        	</nav>
        </div>
        <section class="overlay" id="ov-topleft">
            <div class="wrap"></div>
            	<div class="Campo">
            		<span class="Level1" id="fittext3">Nivel 1</span>
            		
            	</div> 
            		<div class="ContenedorFlip">
				    </div>
            <button class="close"><a href="Plus.php"><span class="mfg-cancel"></span></a></button>
            <input type="image" class="close1" src="img/information14.svg" alt="Submit button">
        </section>
        <section class="overlay" id="ov-topright">
        	<div class="wrap"></div>
        		<div class="Campo">
            		<span class="Level1" id="fittext3">Nivel 1</span>
              </div>
  					<div id="cardPile"> </div>
  					<div id="cardSlots"> </div>
  					
        	 <button class="close"><a href="Plus.php"><span class="mfg-cancel"></span></a></button>
           <input type="image" class="close1" src="img/information14.svg" alt="Submit button">
        </section>
        <section class="overlay" id="ov-btmleft">
          <div class="wrap"></div>
              <div class="Campo">
              <span class="Level1" id="fittext3">Nivel 1</span>
               </div>
                  <div class="Contenedor3">
                    <div class="panelPunt">
                      <span class="encertada">Encertades 0 </span>
                      <span class="fallada">Fallada 0 </span>
                      <span class="moviment">Moviments 0 </span>
                    </div>
                      <ul class="juego"></ul>
                    <!--<div id="contador">
                     <span class="encertades">Encertades:</span><span class="aciertitos">0</span><span class="errades">Errades:</span><span class="erradetas">0</span><span class="moviments">Moviments:</span><span class="contadorcito">0</span>
                    </div>--> 
                  </div>
             
                <button class="close"><a href="Plus.php"><span class="mfg-cancel"></span></a></button>
        </section>
        <section class="overlay" id="ov-btmright">
          <div class="wrap"></div>
            <div class="Campo">
              <span class="Level1" id="fittext3">Historial</span>
            </div>
              <div class="Historial"></div>
              <div class="MostrarHistorial">
               
              <?php 
                $historial = $conex->get_results('SELECT * FROM usuarios');
              ?>
                <div class='page-header'>
                  <label class="historial">HISTORIAL</label>
                </div>
                  <table class='table table-striped'>
                    <thead>
                      <tr>
                        <th class='letras'>ID</th>
                        <th class='letras'>Usuari</th>
                        <th class='letras'>Edat</th>
                        <th class='letras'>Puntuació Joc 1</th>
                        <th class='letras'>Puntuació Joc 2</th>
                        <th class='letras'>Puntuació Joc 3</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      foreach($historial as $histo): ?>
                        <tr>
                          <td class='letras'><?=$histo->id;?></td>
                          <td class='letras'><?=$histo->usuario;?></td>
                          <td class='letras'><?=$histo->edat;?></td>
                          <td class='letras'><?=$histo->joc1;?></td>
                          <td class='letras'><?=$histo->joc2;?></td>
                          <td class='letras'><?=$histo->joc3;?></td>
                        </tr>
                    <?php endforeach?>
                      </tbody>
                  </table>
              </div>
            <button class="close"><a href="Index.php"><span class="mfg-cancel"></span></a></button>
        </section>
	</div>
	<!-- Librería jQuery requerida por los plugins de JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--//////////////////////////////////Primer Juego////////////////////////////////////////////////-->
	<script type="text/javascript" src="js/Juego1.js"></script>
	<script type="text/javascript" src="js/buzz.js"></script>
	<script type="text/javascript" src="js/buzz.min.js"></script>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--/////////////////////////////////Segundo Juego////////////////////////////////////////////////-->
	<script type="text/javascript" src="js/Juego2.js"></script>
	<script src="pointpoint/assets/jquery.pointpoint/transform.js"></script>
	<script src="pointpoint/assets/jquery.pointpoint/jquery.pointpoint.js"></script>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////Tercer Juego//////////////////////////////////////////////////-->
  <script type="text/javascript" src="js/Juego 3.js"></script>
  <!--//////////////////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////Historial/////////////////////////////////////////////////////-->
  <script type="text/javascript" src="js/historial.js">
   <!--//////////////////////////////////////////////////////////////////////////////////////////////-->
	<!-- <script src="libs/js/bootstrap.min.js"></script> -->
	<!--//////////////////////////////Inicio scripts Menú/////////////////////////////////////////////-->
    <script src="Pruebas/css3animations/js/plugins.js"></script>
    <script src="Pruebas/css3animations/js/demo.js"></script>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
	<!--///////////////////////////////Texto Niveles//////////////////////////////////////////////////-->
 	<script src="js/jquery.fittext.js"></script>
 	<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
	<script type="text/javascript">
		$("#fittext3").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });
	</script>
	<script src="TextInputEffects/js/classie.js"></script>
    <script>
      (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
              return this.replace(rtrim, '');
            };
          })();
        }

        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );

        function onInputFocus( ev ) {
          classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
          if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
          }
        }
      })();
    </script>
</body>
</html>