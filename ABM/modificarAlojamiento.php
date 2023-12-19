<?php

if(mysqli_connect('localhost','root','','alojamientos')){
	
	$con = mysqli_connect('localhost','root','','alojamientos');
	//guardo la conexion en una variable
	
	if(isset($_GET["alojamiento"])){
		$codigo = $_GET["alojamiento"];
		
		$consulta = "SELECT * FROM alojamiento WHERE idAlojamiento='$codigo'";
		//guardo la "consulta SQL" en otra variable
		
		if($resultado = mysqli_query($con, $consulta)){
			//guardo el resultado de la "consulta SQL"
			$fila= mysqli_fetch_array($resultado);
			
			
				echo "<h1>Modificar Alojamiento</h1>";
				echo "<form action='modificarAloj2.php' method='post'>";
				echo "<p>$fila[idAlojamiento]</p>";
				
				echo "<input type='hidden' name='idAlojamiento' value=$fila[idAlojamiento]>";
				
				echo "<p>Nombe:</p><input type='text' name='nombreAloj' value=$fila[nombreAlojamiento]>";
				echo "<br/>";
				echo "<p>Pecio:</p><input type='text' name='precio' value=$fila[precioAlojamiento]>";
				echo "<br/>";
				echo "<p>Disponibilidad</p><input type='number' name='cantidad' value=$fila[disponibilidad]>";
				echo "<br/>";
				echo "
					<p>Descripcion:</p>
					<textarea name='descripcion'>
							$fila[descripcionAlojamiento]
					</textarea>
				";
				echo "<br/>";
				echo "
					<p>Detalles:</p>
					<textarea name='detalle'>
							$fila[detallesAlojamiento]
					</textarea>";
				echo "<br/>";
				
				
				echo "<input type='submit' value='Modificar'>";
				echo "</form>";
				
			
			
		
		}else{
			
			echo "<h1>La consulta tiene errores</h1>";
		}
		
	}
}	
	
?>