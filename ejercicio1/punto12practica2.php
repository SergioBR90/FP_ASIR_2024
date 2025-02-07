<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Valores</title>
</head>
<body>
    <?php
    // Verifica si los parámetros 'real' y 'cadena' están presentes en la URL
    if (isset($_GET['real']) && isset($_GET['cadena'])) {
        $valorReal = (float) $_GET['real']; // Convertir el valor a tipo real
        $valorCadena = htmlspecialchars($_GET['cadena']); // Capturar y proteger la cadena

        // Mostrar los valores
        echo "<h2>Resultados:</h2>";
        echo "El contenido de la variable real es: " . $valorReal . "<br>";
        echo "El contenido de la variable cadena es: " . $valorCadena . "<br>";
    } else {
        echo "<h2>Error:</h2>";
        echo "Por favor, proporciona los parámetros 'real' y 'cadena' en la URL.";
    }
    ?>
</body>
</html>
