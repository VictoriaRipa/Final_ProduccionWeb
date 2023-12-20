<?php
$con = mysqli_connect('localhost', 'root', '', 'alojamientos');

if (!$con) {
    die("<h1>No hay conexión</h1>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAlojamiento = $_POST['idAlojamiento'];
    $nombreAlojamiento = $_POST['nombreAlojamiento'];
    $precioAlojamiento = $_POST['precioAlojamiento'];
    $disponibilidad = $_POST['disponibilidad'];
    $descripcionAlojamiento = $_POST['descripcionAlojamiento'];
    $detallesAlojamiento = $_POST['detallesAlojamiento'];

    $consulta = "UPDATE alojamientos SET
                 nombreAlojamiento=?, precioAlojamiento=?, disponibilidad=?, descripcionAlojamiento=?, detallesAlojamiento=?
                 WHERE idAlojamiento=?";
    $stmt = mysqli_prepare($con, $consulta);

    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Modificar Alojamiento</title>";
    echo "<style>";
    echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; text-align: center; }";
    echo "h1 { color: #4CAF50; }";
    echo "p { color: #007bff; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssi", $nombreAlojamiento, $precioAlojamiento, $disponibilidad, $descripcionAlojamiento, $detallesAlojamiento, $idAlojamiento);
        $resultado = mysqli_stmt_execute($stmt);

        if ($resultado) {
            echo "<h1>Alojamiento modificado correctamente</h1>";
        } else {
            echo "<h1>Error al modificar el alojamiento: " . mysqli_error($con) . "</h1>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<h1>Error en la preparación de la consulta: " . mysqli_error($con) . "</h1>";
    }

    echo "</body>";
    echo "</html>";
} else {
    echo "<h1>No se ha enviado el formulario</h1>";
}

mysqli_close($con);
?>
