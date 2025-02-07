<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Fahrenheit a Celsius</title>
</head>
<body>
    <h1>Convertir Fahrenheit a Celsius</h1>
    <form method="post" action="">
        <label for="valor">Introduce una temperatura en Fahrenheit:</label>
        <input type="number" id="valor" name="valor" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['valor'])) {
        $fahrenheit = $_POST['valor'];

        // Verificar si el valor es 999 para finalizar
        if ($fahrenheit == 999) {
            echo "<p>La conversión ha finalizado. La temperatura introducida es 999.</p>";
        } else {
            // Calcular la temperatura en Celsius
            $celsius = (5 / 9) * ($fahrenheit - 32);
            echo "<p>$fahrenheit °F equivalen a " . number_format($celsius, 2) . " °C.</p>";
        }
    }
    ?>
</body>
</html>