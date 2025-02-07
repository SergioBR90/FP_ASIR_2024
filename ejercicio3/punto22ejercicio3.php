<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular el factorial de n</title>
</head>
<body>
    <h1>Calcular el factorial de n</h1>
    <form method="post" action="">
        <label for="n">Factorial de n</label>
        <input type="number" id="n" name="n" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
      if (isset($_POST['n'])) {
        $n = intval($_POST['n']); // Convertir el valor ingresado a un entero
        $factorial = 1; // Inicializar el factorial

        // Calcular el factorial usando un bucle
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i; // Multiplicar cada numero hasta n
        }
        echo "<h2>El factorial de $n es: $factorial</h2>";
    }
    ?>
</body>
</html>
