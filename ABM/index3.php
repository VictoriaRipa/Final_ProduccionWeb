<?php

if(mysqli_connect('localhost','root','','alojamientos')){
				//servidor, usuario servidor, contraseña, nombre de la base de datos		
	
	echo "<h1>Listado de alojamientos - ABM</h1>";
	
	$con = mysqli_connect('localhost','root','','alojamientos');
	//guardo la conexion en una variable
	
	$consulta = "SELECT idAlojamiento, alojamientos FROM alojamientos";
	//guardo la "consulta SQL" en otra variable
	
	
	if($resultado = mysqli_query($con, $consulta)){
		//guardo el resultado de la "consulta SQL"
		echo "<table border=1>";
		echo"
			<caption>Alojamientos</caption>
			<tr>
				<th>Alojamientos</th>
				<th>Modificar</th>
				<th>Borrar</th>
			</tr>
		
		
		
		";
		while($fila = mysqli_fetch_array($resultado)){
			//guardo cada fila de la "consulta SQL"
			echo "<tr>";
				echo "<td><a href='alojamiento.php?alojamiento=".$fila["idAlojamiento"]."&nombre=$fila[alojamientos]'>$fila[alojamientos]</a></td>";
				echo "<td><a href='modificarAloj2.php?alojamiento=".$fila["idAlojamiento"]."'>MODIFICAR</a></td>";
				echo "<td><a href='borrar.php?alojamientos=".$fila["idAlojamientos"]."'>Borrar</a></td>";
			echo "</tr>";
			
			/*$dato = array("hola","chau");
			
			echo $dato;*/
			
			
		}
		echo "</table>";
		
	}
	
	
}else{
	echo "<h1>No hay conexion</h1>";
}




?>


<form action="altaCategoria.php" method="post">
	<label for="categoria">Agregar categoria<label>
	<input id="categoria" type="texto" name="categoria">
	
	<input type="submit" value="Agregar categoria">
</form>

