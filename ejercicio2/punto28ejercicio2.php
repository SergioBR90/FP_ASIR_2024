<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el valor de las variables</title>
</head>
<body>
    <h1>Calcular el valor de las variables A y B</h1>
    <form method="POST" action="punto28ejercicio2.php">
        <label for="calculos">Calculo para A:</label>
        <input type="text" name="calculo1" id="calculo1" placeholder="Introducir la letra A">
        <br><br>
        <label for="calculos">Calculo para B:</label>
        <input type="text" name="calculo2" id="calculo2" placeholder="Introducir la letra A">
        <button type ="submit">Calcular</button>
        <br><br>
    </form>

    <?php
   if (isset($_POST ['calculo1']) && isset ($_POST['calculo2']))
    {
        $calculo1 = $_POST ['calculo1'] = 34.24354345;
        $calculo2 = $_POST ['calculo2'] = 24.78656767;

        $resultado1 = $calculo1;
        $resultado2 = $calculo2;

        echo "El resultado de la letra A es: $resultado2 <br>";
        echo "El resultado de la letra B es: $resultado1 <br>";

    }
    ?>
</body>
</html>