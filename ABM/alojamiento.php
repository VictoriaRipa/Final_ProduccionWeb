<?php
if (mysqli_connect('localhost', 'root', '', 'alojamientos')) {
    // Servidor, usuario servidor, contraseña, nombre de la base de datos
    if (isset($_GET['alojamientos']) && isset($_GET['nombre'])) {
        $codigo = $_GET['alojamientos'];
        $nombreAlojamiento = $_GET['nombreAlojamiento'];
    }

    echo "<html>";
    echo "<head>";
    echo "<title>Listado de $nombreAlojamiento - ABM</title>";
    echo "<style>
            body {
                font-family: Arial, sans-serif;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
            h1 {
                color: #333;
            }
            form {
                max-width: 600px;
                margin: 20px auto;
            }
            label, input, textarea {
                display: block;
                margin-bottom: 10px;
            }
        </style>";
    echo "</head>";
    echo "<body>";

    echo "<h1>Listado de $nombreAlojamiento - ABM</h1>";

    $con = mysqli_connect('localhost', 'root', '', 'alojamientos');

    $consulta = "SELECT * FROM alojamientos WHERE nombreAlojamiento='$codigo'";

    if ($resultado = mysqli_query($con, $consulta)) {
        echo "<table border=1>";
        echo "<caption>$nombreAlojamiento</caption>";
        echo "<tr>
                <th>Alojamiento</th>
                <th>Modificar Alojamiento</th>
                <th>Borrar</th>
              </tr>";

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>
                    <td>$fila[nombreProducto]</td>
                    <td><a href='modificar.php?alojamiento=".$fila["nombreAlojamiento"]."'>MODIFICAR</a></td>
                    <td><a href='borrar.php?alojamiento=".$fila["nombreAlojamiento"]."'>Borrar</a></td>
                  </tr>";
        }
        echo "</table>";
    }

    echo "</body>";
    echo "</html>";
} else {
    echo "<h1>No hay conexión</h1>";
}
?>

<html>

<head>
    <title>Agregar Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
        }

        label,
        input,
        textarea {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h2></h2>

    <form action="altaAlojamiento.php" method="post" enctype="multipart/form-data">
        <div>
            <input id="catategoria" type="hidden" name="catategoria" <?php echo "value='$codigo'"; ?> />
        </div>
        <div>
            <label for="codigoProd">Coxdigo Producto</label>
            <input id="codigoProd" type="text" name="codigoProd">
        </div>
        <div>
            <label for="nombreProd">Nombre Producto</label>
            <input id="nombreProd" type="text" name="nombreProd">
        </div>
        <div>
            <label for="precio">Precio Producto</label>
            <input id="precio" type="number" name="precio">
        </div>
        <div>
            <label for="cantidad">Cantidad Producto</label>
            <input id="cantidad" type="number" name="cantidad">
        </div>
        <div>
            <p><label for="archivo">Agregar Foto:</label></p>
            <input accept="*" type="file" name="foto" id="archivo" required />
        </div>
        <div>
            <p>Descripcion</p>
            <textarea name="descripcion"></textarea>
        </div>
        <div>
            <p>Detalle</p>
            <textarea name="detalle"></textarea>
        </div>
        <input type="submit" value="Agregar alojamiento">
    </form>
</body>

</html>
