<?php
session_start();

if (!isset($_SESSION['NIVEL']) || $_SESSION['NIVEL'] != 'Admin') {
    die('NO TENES PERMISOS');
}

$cnx = mysqli_connect('localhost', 'root', '', 'user', '3306');

$c = "SELECT ID, NIVEL, IFNULL(NOMBRE, '----') AS NOMBRE, ESTADO, IFNULL(APELLIDO, '----') AS APELLIDO, EMAIL, DATE_FORMAT(FECHA_ALTA, '%d/%m/%Y') AS FECHA FROM usuarios ORDER BY FECHA_ALTA DESC";
$r = mysqli_query($cnx, $c);

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #F4F2FC;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #CCC;
        }

        th {
            background-color: #4CAF50;
            color: #FFF;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            display: inline-block;
            margin: 5px;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #FFF;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>USUARIOS</h1>

    <table>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EMAIL</th>
            <th>NIVEL</th>
            <th>FECHA</th>
            <th>ESTADO</th>
            <th>BOTONES</th>
        </tr>
        <?php
        while ($a = mysqli_fetch_assoc($r)) {

            echo '<tr>';
            echo '<td>' . $a['NOMBRE'] . '</td>';
            echo '<td>' . $a['APELLIDO'] . '</td>';
            echo '<td>' . $a['EMAIL'] . '</td>';
            echo '<td>' . $a['NIVEL'] . '</td>';
            echo '<td>' . $a['FECHA'] . '</td>';
            echo '<td>' . $a['ESTADO'] . '</td>';
            echo '<td>';

            if ($a['ESTADO'] == 'activo') {
                echo '<a href="bannear.php?id=' . $a['ID'] . '">BANNEAR</a>';
            } else {
                echo '<a href="no_bannear.php?id=' . $a['ID'] . '">ACTIVAR</a>';
            }
            echo ' | ';

            if ($a['NIVEL'] == 'usuario') {
                echo '<a href="adminizar.php?id=' . $a['ID'] . '">HACER ADMIN</a>';
            } else {
                echo '<a href="no_adminizar.php?id=' . $a['ID'] . '">HACER USUARIO</a>';
            }

            echo '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
