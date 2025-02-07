<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadradado de los 9 primero numero naturales</title>
</head>
<body>
    <h1>Cuadrado de los 9 primeros numeros naturales</h1>
    <?php
    echo "<ul>";
    for ($i = 1; $i <= 9; $i++) {
        $cuadrado = $i * $i;
        echo "<ul>El cuadrado de $i es $cuadrado </ul>";
    }
    echo "<ul>";
    ?>
</body>
</html>
