<?php
session_start();

if (!isset($_SESSION['ID'])) {
    header("Location: index.php?forbidden=1");
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #F4F2FC;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
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
    <h1>¡Bienvenido!</h1>

    <a href="admin/index.php">Administrador</a>
    <a href="logout.php">SALIR</a>
</body>
</html>