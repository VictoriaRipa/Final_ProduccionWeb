<?php
include_once "header.php";
?>
<head>
    <title>Reserva de Alojamiento</title>
</head>
<body>

<h1 class="tit medio">Reserva de Alojamiento</h1>

<?php
// Datos del alojamiento (puedes obtenerlos de una base de datos)
$imagenes = [
    'img/suite.png',
    'img/superior.png',
    'img/premium.png',
    'img/mono.png'
];
$descripcion = [
    'Suite',
    'Habitacion superior',
    'Habitacion premium',
    'Mono habitacion'
];
$montoPagar =  [
    9000,
    7000,
    5000,
    4000
];
// Mostrar las imágenes y la descripción del alojamiento
foreach ($imagenes as $imagen) {
    echo '<img src="' . $imagen . '" alt="Imagen del alojamiento">';
}

// Verificar si se ha enviado el formulario de reserva
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar la reserva (ver como puedo almacenarla en una BDD)
    // Aca sale el mensaje de confirmacion
    echo '<p>¡Reserva realizada con éxito!</p>';
} else {
    // Mostrar el monto a pagar y el botón de reserva
    echo '<p>Monto a pagar: $' . $montoPagar . '</p>';
    echo '<form method="post">';
    echo '<input type="submit" value="Reservar">';
    echo '</form>';
}
?>

</body>

<?php
include_once "footer.php";
?>