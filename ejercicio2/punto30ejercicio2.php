<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del salario</title>
</head>
<body>
    <h1>Calculo de salario segun las horas</h1>
    <form method="POST" action="punto30ejercicio2.php">
        <label for="horas">Calculo segun las horas de trabajo:</label>
        <input type="number" name="horas" id="horas" placeholder="Introducir las horas trabajadas">
        <br><br>
        <label for="tarifa">Tarifa por hora:</label>
        <input type="number" name="tarifa" id="tarifa" placeholder="Introduce la tarifa por hora" step="0.01" required>
        <br><br>
        <button type ="submit">Calcular</button>
        <br><br>
    </form>

    <?php
    if (isset($_POST['horas']) && isset($_POST['tarifa'])) {
        $horas = $_POST['horas'];
        $tarifa = $_POST['tarifa'];
        $horas_normales = min($horas, 40); 
        $horas_extras = max($horas - 40, 0); 
        $tarifa_especial = $tarifa * 1.50;

        $sueldo = ($horas_normales * $tarifa) + ($horas_extras * $tarifa_especial);

        echo "<h2>Resultados:</h2>";
        echo "<p>Horas normales: $horas_normales</p>";
        echo "<p>Horas extras: $horas_extras</p>";
        echo "<p>Tarifa por hora normal: $tarifa</p>";
        echo "<p>Tarifa por hora extra: $tarifa_especial</p>";
        echo "<p><strong>Salario total: $sueldo</strong></p>";
    }
    ?>
</body>
</html>