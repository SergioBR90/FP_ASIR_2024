<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Nuevos Sueldos</title>
</head>
<body>
    <h1>Calcular Nuevos Sueldos con Incentivos</h1>
    <form method="POST" action="">
        <label for="sueldo1">Sueldo del empleado 1</label>
        <input type="number" id="sueldo1" name="sueldo1"  placeholder="Ejemplo: 1000" required>
        <br><br>
        <label for="sueldo2">Sueldo del empleado 2</label>
        <input type="number" id="sueldo2" name="sueldo2"  placeholder="Ejemplo: 1000" required>
        <br><br>
        <label for="sueldo3">Sueldo del empleado 3</label>
        <input type="number" id="sueldo3" name="sueldo3" placeholder="Ejemplo: 1000" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $sueldo1 = $_POST['sueldo1'];
        $sueldo2 = $_POST['sueldo2'];
        $sueldo3 = $_POST['sueldo3'];
        $incremento1 = $sueldo1 * 0.13;
        $incremento2 = $sueldo2 * 0.26;
        $incremento3 = $sueldo3 * 0.39;
        $nuevo_sueldo1 = $sueldo1 + $incremento1;
        $nuevo_sueldo2 = $sueldo2 + $incremento2;
        $nuevo_sueldo3 = $sueldo3 + $incremento3;

        echo "<h2>Resultados:</h2>";
        echo "<p>Empleado 1: Sueldo original: $sueldo1, Incremento: $incremento1, Nuevo Sueldo: $nuevo_sueldo1</p>";
        echo "<p>Empleado 2: Sueldo original: $sueldo2, Incremento: $incremento2, Nuevo Sueldo: $nuevo_sueldo2</p>";
        echo "<p>Empleado 3: Sueldo original: $sueldo3, Incremento: $incremento3, Nuevo Sueldo: $nuevo_sueldo3</p>";
    }
    ?>
</body>
</html>
