<?php
$con = mysqli_connect('localhost', 'root', '', 'alojamientos');

if (!$con) {
    die("<h1>No hay conexión</h1>");
}

$consulta = "SELECT idAlojamiento, nombreAlojamiento FROM alojamientos";

if ($resultado = mysqli_query($con, $consulta)) {
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Listado de Alojamientos - ABM</title>";
    echo "<style>";
    echo "body { font-family: 'Arial', sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; }";
    echo "h1 { text-align: center; color: #333; }";
    echo "table { width: 80%; margin: 20px auto; border-collapse: collapse; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }";
    echo "th, td { border: 1px solid #ccc; padding: 15px; text-align: left; }";
    echo "th { background-color: #333; color: white; }";
    echo "a { text-decoration: none; color: #007bff; }";
    echo "a:hover { text-decoration: underline; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h1>Listado de Alojamientos - ABM</h1>";
    echo "<table>";
    echo "<tr><th>Alojamiento</th><th>Modificar</th><th>Borrar</th></tr>";

    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td><a href='alojamiento.php?alojamiento={$fila['idAlojamiento']}&nombre={$fila['nombreAlojamiento']}'>{$fila['nombreAlojamiento']}</a></td>";
        echo "<td><a href='modificarAlojamiento.php?nombreAlojamiento={$fila['nombreAlojamiento']}'>MODIFICAR</a></td>";
        echo "<td><a href='borrar.php?nombreAlojamiento={$fila['nombreAlojamiento']}'>Borrar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</body>";
    echo "</html>";
} else {
    echo "<h1>Error en la consulta: " . mysqli_error($con) . "</h1>";
}

mysqli_close($con);
?>
