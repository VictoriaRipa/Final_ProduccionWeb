<?php
include_once "header.php";
?>

<head>
    <title>Reserva de Alojamiento</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        header, footer {
            width: 100%;
            padding: 0px;
            box-sizing: border-box;
        }

        footer {
            margin-top: auto; 
        }

        .content-container {
            text-align: center;
            margin: 20px;
        }

        .alojamiento-container {
            margin-bottom: 20px;
        }

       
    </style>
</head>

<body>

<h1 class="tit medio">Reserva de Alojamiento</h1>

<div class="content-container">

    <?php
   
    $alojamientos = [
        ['imagen' => 'img/suite.png', 'descripcion' => 'Suite', 'montoPagar' => 9000],
        ['imagen' => 'img/superior.png', 'descripcion' => 'Habitacion superior', 'montoPagar' => 7000],
        ['imagen' => 'img/premium.png', 'descripcion' => 'Habitacion premium', 'montoPagar' => 5000],
        ['imagen' => 'img/mono.png', 'descripcion' => 'Mono habitacion', 'montoPagar' => 4000]
    ];

    // Mostrar las imágenes y la descripción del alojamiento
    foreach ($alojamientos as $alojamiento) {
        echo '<div class="alojamiento-container">';
        echo '<img src="' . $alojamiento['imagen'] . '" alt="Imagen del alojamiento">';
        echo '<p>' . $alojamiento['descripcion'] . '</p>';
        echo '<p>Monto a pagar: $' . $alojamiento['montoPagar'] . '</p>';

        // Verificar si se ha enviado el formulario de reserva para este alojamiento
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservar']) && $_POST['reservar'] === $alojamiento['descripcion']) {
            // procesar la reserva (ver cómo puedo almacenarla en una BDD)
            // sale el mensaje de confirmación
            echo '<p>¡Reserva realizada con éxito para ' . $alojamiento['descripcion'] . '!</p>';
        } else {
            // mostrar el botón de reserva
            echo '<form method="post">';
            echo '<input type="submit" name="reservar" value="' . $alojamiento['descripcion'] . '">';
            echo '</form>';
        }
        echo '</div>';
    }
    ?>

</div>

</body>

<?php
include_once "footer.php";
?>
