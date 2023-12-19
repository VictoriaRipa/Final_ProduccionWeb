<?php

if(mysqli_connect('localhost','root','','alojamientos')){
	
	$con = mysqli_connect('localhost','root','','alojamientos');
	//guardo la conexion en una variable
	
	if(isset($_GET["nombreAlojamiento"])){
		$nombre = $_GET["nombreAlojamiento"];
		
		$consulta = "DELETE FROM alojamientos WHERE nombreAlojamiento='$nombre'";
		//guardo la "consulta SQL" en otra variable
		
		$resultado = mysqli_query($con, $consulta);
			//guardo el resultado de la "consulta SQL"
			
				echo "<h1>El alojamiento $nombre fue eliminado </h1>";
					echo "<p><a href='index.php'>Volver al inicio</a></p>";
			
			
		
		
	}
}	
	
?>