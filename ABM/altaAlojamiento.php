<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar a la base de datos
    $con = mysqli_connect('localhost', 'root', '', 'alojamientos');

    // Manejar posibles errores de conexión
    if (!$con) {
        die("La conexión falló: " . mysqli_connect_error());
    }

    // Obtener y limpiar los datos del formulario
    $nombre = isset($_POST["nombreAlojamiento"]) ? mysqli_real_escape_string($con, $_POST["nombreAlojamiento"]) : null;
    $precio = isset($_POST["precio"]) ? (float)$_POST["precio"] : null;
    $disponibilidad = isset($_POST["cantidad"]) ? (int)$_POST["cantidad"] : null;
    $descripcion = isset($_POST["descripcion"]) ? mysqli_real_escape_string($con, $_POST["descripcion"]) : null;
    $detalles = isset($_POST["detalle"]) ? mysqli_real_escape_string($con, $_POST["detalle"]) : null;

    // Procesar la subida de archivos
    $foto = isset($_FILES["foto"]["name"]) ? $_FILES["foto"]["name"] : null;
    $hora = time();
    $rutaFoto = "fotos/" . $hora . '.jpg';

    if (!empty($nombre)) { // Verificar que el nombre no sea nulo
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $rutaFoto)) {
            // Consulta SQL para insertar el alojamiento en la base de datos
            $consulta = "INSERT INTO alojamientos (nombreAlojamiento, precioAlojamiento, disponibilidad, fotoAlojamiento, descripcionAlojamiento, detallesAlojamiento) 
                         VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($con, $consulta);
            mysqli_stmt_bind_param($stmt, "sdssss", $nombre, $precio, $disponibilidad, $rutaFoto, $descripcion, $detalles);

            if (mysqli_stmt_execute($stmt)) {
                // Éxito
                echo "<!DOCTYPE html>";
                echo "<html lang='es'>";
                echo "<head>";
                echo "<meta charset='UTF-8'>";
                echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
                echo "<title>Éxito</title>";
                echo "<style>";
                echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; text-align: center; }";
                echo "h1 { color: #4CAF50; }";
                echo "p { color: #007bff; }";
                echo "</style>";
                echo "</head>";
                echo "<body>";

                echo "<h1>¡El alojamiento $nombre fue creado!</h1>";
                echo "<p><a href='index3.php'>Volver al inicio</a></p>";

                echo "</body>";
                echo "</html>";
            } else {
                // Error al ejecutar la consulta
                echo "<!DOCTYPE html>";
                echo "<html lang='es'>";
                echo "<head>";
                echo "<meta charset='UTF-8'>";
                echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
                echo "<title>Error</title>";
                echo "<style>";
                echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; text-align: center; }";
                echo "h1 { color: #FF0000; }";
                echo "p { color: #007bff; }";
                echo "</style>";
                echo "</head>";
                echo "<body>";

                echo "<h1>Error al ejecutar la consulta: " . mysqli_stmt_error($stmt) . "</h1>";
                echo "<p><a href='index3.php'>Volver al inicio</a></p>";

                echo "</body>";
                echo "</html>";
            }

            mysqli_stmt_close($stmt);
        } else {
            // Manejar error al subir el archivo
            echo "<!DOCTYPE html>";
            echo "<html lang='es'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Error</title>";
            echo "<style>";
            echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; text-align: center; }";
            echo "h1 { color: #FF0000; }";
            echo "p { color: #007bff; }";
            echo "</style>";
            echo "</head>";
            echo "<body>";

            echo "<h1>Error al subir el archivo.</h1>";
            echo "<p><a href='index3.php'>Volver al inicio</a></p>";

            echo "</body>";
            echo "</html>";
        }
    } else {
        echo "<!DOCTYPE html>";
        echo "<html lang='es'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Error</title>";
        echo "<style>";
        echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; text-align: center; }";
        echo "h1 { color: #FF0000; }";
        echo "p { color: #007bff; }";
        echo "</style>";
        echo "</head>";
        echo "<body>";

        echo "<h1>Error: El nombre del alojamiento no puede ser nulo.</h1>";
        echo "<p><a href='index3.php'>Volver al inicio</a></p>";

        echo "</body>";
        echo "</html>";
    }

    // Cerrar la conexión
    mysqli_close($con);
}
?>
