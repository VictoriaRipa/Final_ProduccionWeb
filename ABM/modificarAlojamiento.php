<?php
$con = mysqli_connect('localhost', 'root', '', 'alojamientos');

if (!$con) {
    die("<h1>No hay conexión</h1>");
}

if (isset($_GET["nombreAlojamiento"])) {
    $nombreAlojamiento = $_GET["nombreAlojamiento"];

    $consulta = "SELECT * FROM alojamientos WHERE nombreAlojamiento=?";
    $stmt = mysqli_prepare($con, $consulta);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $nombreAlojamiento);
        $resultado = mysqli_stmt_execute($stmt);

        if ($resultado) {
            $resultados = mysqli_stmt_get_result($stmt);
            $datosAlojamiento = mysqli_fetch_assoc($resultados);

            echo "<!DOCTYPE html>";
            echo "<html lang='es'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Modificar Alojamiento</title>";
            echo "<style>";
            echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; }";
            echo "h1 { text-align: center; }";
            echo "form { width: 50%; margin: 20px auto; }";
            echo "label { display: block; margin-bottom: 10px; }";
            echo "input[type='text'], input[type='submit'] { width: 100%; padding: 10px; margin-bottom: 10px; }";
            echo "</style>";
            echo "</head>";
            echo "<body>";

            echo "<h1>Modificar Alojamiento</h1>";
            echo "<form action='procesarModificacion.php' method='post' enctype='multipart/form-data'>";
            echo "<input type='hidden' name='idAlojamiento' value='{$datosAlojamiento['idAlojamiento']}'>";
            echo "Nombre: <input type='text' name='nombreAlojamiento' value='{$datosAlojamiento['nombreAlojamiento']}'><br>";
            echo "Precio: <input type='text' name='precioAlojamiento' value='{$datosAlojamiento['precioAlojamiento']}'><br>";
            echo "Disponibilidad: <input type='text' name='disponibilidad' value='{$datosAlojamiento['disponibilidad']}'><br>";
            echo "Descripción: <textarea name='descripcionAlojamiento'>{$datosAlojamiento['descripcionAlojamiento']}</textarea><br>";
            echo "Detalles: <textarea name='detallesAlojamiento'>{$datosAlojamiento['detallesAlojamiento']}</textarea><br>";
            echo "Nueva Foto: <input type='file' name='nuevaFoto'><br>"; 
            echo "<input type='submit' value='Modificar'>";
            echo "</form>";


            echo "</body>";
            echo "</html>";
        } else {
            echo "<h1>Error al ejecutar la consulta</h1>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<h1>Error en la preparación de la consulta</h1>";
    }
} else {
    echo "<h1>No se proporcionó un nombre de alojamiento</h1>";
}

mysqli_close($con);
?>