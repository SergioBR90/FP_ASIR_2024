<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Velocidad (km/h a m/s)</title>
</head>
<body>
    <h1>Convertir Velocidad de km/h a m/s</h1>
    <form method="POST" action="punto34ejercicio2.php">
        <label for="velocidad_kmh">Velocidad (km/h):</label>
        <input type="number" id="velocidad_kmh" name="velocidad_kmh" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $velocidad_kmh = $_POST['velocidad_kmh'];
        
        $velocidad_ms = $velocidad_kmh * 1000 / 3600;

        echo "<h2>Resultados:</h2>";
        echo "<p>Velocidad en km/h: $velocidad_kmh km/h</p>";
        echo "<p>Velocidad en m/s: " . number_format($velocidad_ms, 2) . " m/s</p>";
    }
    ?>
</body>
</html>
