<?php
if (mysqli_connect('localhost', 'root', '', 'alojamientos')) {
    // servidor, usuario servidor, contraseña, nombre de la base de datos		
    if (isset($_GET['alojamiento']) && isset($_GET['nombre'])) {
        $codigo = $_GET['alojamiento'];
        $nombreAlojamiento = $_GET['nombre'];
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #333;
                color: white;
                text-align: center;
                padding: 10px;
            }

            .container {
                margin: 20px;
                padding: 20px;
                background-color: white;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            table, th, td {
                border: 1px solid #ccc;
            }

            th, td {
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #333;
                color: white;
            }

            form {
                margin-top: 20px;
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }

            label, input, textarea {
                display: block;
                margin-bottom: 10px;
            }

            textarea {
                width: 100%;
                height: 100px;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>

   <body>
        <header>
            <h1>Listado de <?php echo $nombreAlojamiento; ?> - ABM</h1>
        </header>
        <div class="container">
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'alojamientos');
            $consulta = "SELECT * FROM alojamientos WHERE nombreAlojamiento='$codigo'";
            if ($resultado = mysqli_query($con, $consulta)) {
                echo "<table>";
                echo "
                    <caption>$nombreAlojamiento</caption>
                    <tr>
                        <th>Alojamiento</th>

                    </tr>";

                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$fila[nombreAlojamiento]</td>";
                    echo "<td><a href='modificarAlojamiento.php?alojamiento=" . $fila["nombreAlojamiento"] . "'>MODIFICAR</a></td>";
                    echo "<td><a href='borrar.php?alojamiento=" . $fila["nombreAlojamiento"] . "'>Borrar</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </div>

        <form action="altaalojamiento.php" method="post" enctype="multipart/form-data" class="container">
            <div>
                <label for="nombreAlojamiento">Nombre del Alojamiento</label>
                <input id="nombreAlojamiento" type="text" name="nombreAlojamiento" required>
            </div>
            <div>
                <label for="codigoAlojamiento">Codigo alojamiento</label>
                <input id="codigoAlojamiento" type="text" name="codigoAlojamiento" required>
            </div>
            <div>
                <label for="precio">Precio alojamiento</label>
                <input id="precio" type="number" name="precio" required>
            </div>
            <div>
                <label for="cantidad">Cantidad alojamiento</label>
                <input id="cantidad" type="number" name="cantidad" required>
            </div>
            <div>
                <p><label for="archivo">Agregar Foto:</label></p>
                <input accept="*" type="file" name="foto" id="archivo" required />
            </div>
            <div>
                <p>Descripcion</p>
                <textarea name="descripcion" required></textarea>
            </div>
            <div>
                <p>Detalle</p>
                <textarea name="detalle" required></textarea>
            </div>
            <input type="submit" value="Agregar alojamiento">
        </form>

    </body>

    </html>

<?php
} else {
    echo "<h1>No hay conexion</h1>";
}
?>