<?php

if(mysqli_connect('localhost','root','','alojamientos')){
	
	$con = mysqli_connect('localhost','root','','alojamientos');
	//guardo la conexion en una variable
	
	if(isset($_POST["idAlojamiento"] ) and isset ($_POST["nombreAlojamiento"]) and isset ($_POST["precioAlojamiento"]) and isset ($_POST["disponibilidad"]) and isset ($_POST["fotoAlojamiento"]) and isset ($_POST["descripcionAlojamiento"]) and isset ($_POST["detallesAlojamiento"])){
		$idAlojamiento = $_POST["idAlojamiento"];
		$nombre = $_POST["nombreAlojamiento"];
		$precio = $_POST["precioAlojamiento"];
		$disponibilidad = $_POST["disponibilidad"];
		$foto = $_POST["fotoAlojamiento"];
		$descripcion = $_POST["DescripcionAlojamiento"];
		$detalles = $_POST["detallesAlojamiento"];
		
		
		$consulta = "UPDATE alojamientos SET nombreAlojamiento='$nombre', precioAlojamiento='$precio', disponibilidad='$disponibilidad', descripcion='$descripcionAlojamiento', detalles='$detallesAlojamiento'  WHERE idAlojamiento='$idAlojamiento'";
		
		//guardo la "consulta SQL" en otra variable
		
		if($resultado = mysqli_query($con, $consulta)){
			//guardo el resultado de la "consulta SQL"
			
				echo "<h1>Alojamiento $nombre fue modificado </h1>";
				echo "<p><a href='index.php'>Volver al inicio</a></p>";
			
			
		
		}else{
			
			echo "<h1>La consulta tiene errores</h1>";
		}
		
	}
}	
	
?>