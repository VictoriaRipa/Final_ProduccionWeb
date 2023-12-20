<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($con = mysqli_connect('localhost', 'root', '', 'alojamientos')) {
    if (isset($_GET["nombreAlojamiento"])) {
        $nombre = $_GET["nombreAlojamiento"];

        $consulta = "DELETE FROM alojamientos WHERE nombreAlojamiento='$nombre'";
        $resultado = mysqli_query($con, $consulta);

        echo "<!DOCTYPE html>";
        echo "<html lang='es'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Eliminar Alojamiento</title>";
        echo "<style>";
        echo "body { font-family: Arial, sans-serif; background-color: #f2f2f2; margin: 0; padding: 0; text-align: center; }";
        echo "h1 { color: #4CAF50; }";
        echo "p { color: #007bff; }";
        echo "</style>";
        echo "</head>";
        echo "<body>";

        if ($resultado) {
            echo "<h1>El alojamiento $nombre fue eliminado</h1>";
            echo "<p><a href='index3.php'>Volver al inicio</a></p>";
        } else {
            echo "<h1>Error al eliminar el alojamiento</h1>";
        }

        echo "</body>";
        echo "</html>";
    }

    mysqli_close($con);
}
?>
