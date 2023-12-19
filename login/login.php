<?php
session_start( );

$cnx = mysqli_connect('localhost','root','','user', '3306');

$email = $_POST['email'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];




$c = "SELECT NOMBRE, APELLIDO, EMAIL, ID, NIVEL FROM usuarios WHERE EMAIL='$email' AND CLAVE=MD5('$clave') LIMIT 1";

$f = mysqli_query($cnx, $c);
$a = mysqli_fetch_assoc($f);

if( $a == NULL ){
	header("Location: index.php?login=error");
}else{

	$_SESSION = $a;
	

	header("Location: logueado.php");
}


?>