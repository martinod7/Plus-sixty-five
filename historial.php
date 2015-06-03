<?php

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="plus";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error) {
	die("Conection failed:".$conn->connect_error);
}


if(isset($_GET['registrar'])){
$insertar = "INSERT INTO usuarios(usuario,edat,joc1,joc2,joc3)"."VALUES('".$_GET['usuario']."','".$_GET['edat']."','".$_GET['joc1']."','".$_GET['joc2']."','".$_GET['joc3']."')";
if(mysqli_query($conn, $insertar)){
	header("Location:Index.php");
	echo "okas";
}else{
	echo "no añadido";
}
}
?>