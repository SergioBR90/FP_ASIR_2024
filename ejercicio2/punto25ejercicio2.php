<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el interes</title>
</head>
<body>
    <h1>Calcular el 20% interes</h1>
    <form method="POST" action="punto25ejercicio2.php">
        <label for="intereses">Precio:</label>
        <input type="number" name="intereses" id="intereses" placeholder="Introducir el valor del interes">
        <br><br>
        <button type ="submit">Calcular el interes</button>
        <br><br>
    </form>

    <?php
   if (isset($_POST ['intereses']))
        {
            $intereses = ($_POST['intereses']);
            $resultado = $intereses * 0.20;
            $cantidad_final = $intereses + $resultado;
            echo "El resultado total es: $cantidad_final €";
        }
    ?>

</body>
</html>
