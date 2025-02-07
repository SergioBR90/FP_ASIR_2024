<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir bytes</title>
</head>
<body>
    <h1>Conversión de Kilobytes a Megabytes y Gigabytes</h1>
    <form method="post" action="punto15ejercicio2.php">
        <label for="kilobytes">Introduce la cantidad de kilobytes:</label>
        <input type="number" id="kilobytes" name="kilobytes" required><br><br>
        <button type="submit">Convertir</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['kilobytes'])) 
    {
        $kilobytes = $_POST['kilobytes']; 
        $megabytes = $kilobytes / 1024; 
        $gigabytes = $megabytes / 1024; 

        echo "<h2>Resultados:</h2>";
        echo "Kilobytes: " . number_format($kilobytes, 2) . " KB<br>";
        echo "Megabytes: " . number_format($megabytes, 2) . " MB<br>";
        echo "Gigabytes: " . number_format($gigabytes, 2) . " GB<br>";
    } 
    ?>
</body>
</html>
