<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la suma, resta, producto y division</title>
</head>
<body>
    <h1>Calcular la suma, resta, producto y division</h1>
    <form method="POST" action="punto27ejercicio2.php">
        <label for="calculos">Calculos:</label>
        <input type="number" name="calculo1" id="calculo1" placeholder="Introducir el valor del calculo">
        <br><br>
        <label for="calculos">Calculos:</label>
        <input type="number" name="calculo2" id="calculo2" placeholder="Introducir el valor del calculo">
        
        <button type ="submit">Calcular</button>
        <br><br>
    </form>

    <?php
   if (isset($_POST ['calculo1']) && isset ($_POST['calculo2']))
    {
        $calculo1 = $_POST ['calculo1'];
        $calculo2 = $_POST ['calculo2'];

        $resultado1 = $calculo1 + $calculo2;
        $resultado2 = $calculo1 - $calculo2;
        $resultado3 = $calculo1 * $calculo2;
        $resultado4 = $calculo1 / $calculo2;

        echo "El resultado de la primera operacion suma es: $resultado1 <br>";
        echo "El resultado de la segunda operacion resta es: $resultado2 <br>" ;
        echo "El resultado de la tercera operacion multiplicar es: $resultado3 <br>";
        echo "El resultado de la cuarta operacion dividir es: $resultado4 <br>";

    }
    ?>
</body>
</html>