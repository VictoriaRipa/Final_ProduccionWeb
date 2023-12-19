<?php
include_once("header.php");
?>


<img src="img/gracias.png" alt="Imagen de agradecimiento" width="300" height="300">
<h2 class="tit">Tus datos fueron enviados con exito.</h2>

<ul>
<?php
if(isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
	print "<li>Nombre y apellido: $nombre</li>";
	

}
if(isset($_POST['email'])){
	$email=$_POST['email'];
	print "<li>Email: $email</li>";
	

}

move_uploaded_file ($_FILES ["arch"] ["tmp_name"], "comprobantes/" .$_FILES ["arch"] ["name"]);

if(isset($_POST['consulta'])){
	$texto=$_POST['consulta'];
	print "<li>Consulta: $texto</li>";

}
if(isset($_POST['tyc'])){
	$tyc=$_POST['tyc'];
	print "<li>Acepto terminos y condiciones: $tyc</li>";

}

?>

<?php
include_once("footer.php");
?>