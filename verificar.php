<?php
//Llamada a la libreria
require_once 'libs/ez_sql_core.php';
require_once 'libs/ez_sql_mysql.php';
require_once 'libs/Zebra_Pagination.php';
// Conexion
$conex = new ezSQL_mysql('root','','plus');
if(isset($_POST['login'])){
		$verificar = $conex->get_results('SELECT * FROM supervisores WHERE name="'.$_POST['Username'].'"');
		$valor = count($verificar);
			if($valor == 1){
				header('Location: Plus.php');
			}else{
				header('Location: Index.php');
				
				}
}
?>