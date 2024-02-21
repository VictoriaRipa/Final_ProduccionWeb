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

    // Manejo de la imagen
    if ($_FILES['nuevaFoto']['size'] > 0) {
        $nombreFoto = $_FILES['nuevaFoto']['name'];
        $rutaFoto = $nombreFoto; // Si quiero que almacene desde la ruta le pongo  $rutaFoto = 'fotos/' . $nombreFoto;
        move_uploaded_file($_FILES['nuevaFoto']['tmp_name'], $rutaFoto);
    } else {
        // Si no se carga una nueva foto, conserva la foto actual en la base de datos
        $consultaFoto = "SELECT fotoAlojamiento FROM alojamientos WHERE idAlojamiento=?";
        $stmtFoto = mysqli_prepare($con, $consultaFoto);
        mysqli_stmt_bind_param($stmtFoto, "i", $idAlojamiento);
        mysqli_stmt_execute($stmtFoto);
        mysqli_stmt_bind_result($stmtFoto, $fotoAntigua);
        mysqli_stmt_fetch($stmtFoto);
        $rutaFoto = $fotoAntigua;
        mysqli_stmt_close($stmtFoto);
    }

    $consulta = "UPDATE alojamientos SET
                 nombreAlojamiento=?, precioAlojamiento=?, disponibilidad=?, fotoAlojamiento=?, descripcionAlojamiento=?, detallesAlojamiento=?
                 WHERE idAlojamiento=?";
    $stmt = mysqli_prepare($con, $consulta);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssisssi", $nombreAlojamiento, $precioAlojamiento, $disponibilidad, $rutaFoto, $descripcionAlojamiento, $detallesAlojamiento, $idAlojamiento);
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
