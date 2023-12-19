<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INMUEBLES RIPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap" rel="stylesheet">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <title>INMUEBLES RIPA</title>
</head>
<body class="fondo">
    <header>
    <nav class="navbar navbar-expand-lg bg-light nav color ar">
        <div class="container-fluid">
            <a class="navbar-brand logo nav" href="">INMUEBLES RP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <?php
                    $menu=array();
                    $menu['Inicio']="index.php";
                    $menu['Habitaciones']="habitaciones.php"; 
                    $menu['Reservas']="reservas.php";
                    $menu['Soporte']="soporte.php"; 
                    $menu['Conocenos']="conocenos.php";
                    foreach ($menu as $botones=>$link){
                        echo "<li><a class='link nav int color listas tit' href=$link > $botones</a></li>";
                    }
                ?>
                </ul>
            </div>
            <div class="d-flex">
            <img src="img/mundo.png" alt="Imagen de usuario" class="rounded-circle mr-2 ic" style="height: 30px; width: 30px;"> 
            <img src="img/mensajes.png" alt="Imagen de usuario" class="rounded-circle mr-2 ic" style="height: 30px; width: 30px;"> 
                <img src="img/notificaciones.png" alt="Imagen de usuario" class="rounded-circle mr-2 ic" style="height: 30px; width: 30px;">
                <img src="img/usuario.png" alt="Imagen de usuario" class="rounded-circle mr-2 ic" style="height: 30px; width: 30px;">
            </div>
        </div>
    </nav>
    </header>
</body>
</html>

