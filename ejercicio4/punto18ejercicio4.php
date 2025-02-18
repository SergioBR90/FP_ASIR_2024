<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redondear un número con decimales</title>
</head>
<body>
    <h1>Redondear un número con decimales</h1>
    <form method="post" action="">
        <label for="numero1">Introduce un número:</label>
        <input type="number" id="numero1" name="numero1" step="any" required>
        <br><br>
        <button type="submit">Calcular</button>    
    </form>

    <?php
     if (isset($_POST['numero1'])) {
        $numero1 = $_POST['numero1'];
        $numero1 = floatval($numero1);
        $redondeado = round($numero1);
        echo "<p>El número ingresado fue: $numero1</p>";
        echo "<p>Redondeado es: $redondeado </p>";
    }
    ?>
</body>
</html>

