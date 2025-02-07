<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Hipotenusa</title>
</head>
<body>
    <h1>Calcular la Hipotenusa de un Triángulo</h1>
    <form method="POST" action="">
        <label for="cateto1">Cateto 1:</label>
        <input type="number" id="cateto1" name="cateto1" required>
        <br><br>
        <label for="cateto2">Cateto 2:</label>
        <input type="number" id="cateto2" name="cateto2" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cateto1 = $_POST['cateto1'];
        $cateto2 = $_POST['cateto2'];

        $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));

        echo "<h2>Resultados:</h2>";
        echo "<p>Cateto 1: $cateto1</p>";
        echo "<p>Cateto 2: $cateto2</p>";
        echo "<p>Hipotenusa: $hipotenusa</p>";
    }
    ?>
</body>
</html>
