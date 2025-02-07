<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar de letras a números</title>
</head>
<body>
    <h1>Pasar de letras a números</h1>
    <form method="post" action="">
        <label for="numero">Introduce un número (1-10):</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <label for="letra">Introduce una letra romana:</label>
        <input type="text" id="letra" name="letra" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Convertir número a letra
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);
            switch ($numero) {
                case 1: echo "<p>El número $numero corresponde a la letra: A</p>"; break;
                case 2: echo "<p>El número $numero corresponde a la letra: B</p>"; break;
                case 3: echo "<p>El número $numero corresponde a la letra: C</p>"; break;
                case 4: echo "<p>El número $numero corresponde a la letra: D</p>"; break;
                case 5: echo "<p>El número $numero corresponde a la letra: E</p>"; break;
                case 6: echo "<p>El número $numero corresponde a la letra: F</p>"; break;
                case 7: echo "<p>El número $numero corresponde a la letra: G</p>"; break;
                case 8: echo "<p>El número $numero corresponde a la letra: H</p>"; break;
                case 9: echo "<p>El número $numero corresponde a la letra: I</p>"; break;
                case 10: echo "<p>El número $numero corresponde a la letra: J</p>"; break;
                default: echo "<p>El numero no es valido, ntroduce un número del 1 al 10.</p>"; break;
            }
        }

        // Convertir letra romana a número
        if (isset($_POST['letra'])) {
            $letra = strtoupper($_POST['letra']); // Convertir a mayúscula para evitar errores
            switch ($letra) {
                case 'I': echo "<p>La letra romana $letra corresponde al número: 1</p>"; break;
                case 'V': echo "<p>La letra romana $letra corresponde al número: 5</p>"; break;
                case 'X': echo "<p>La letra romana $letra corresponde al número: 10</p>"; break;
                case 'L': echo "<p>La letra romana $letra corresponde al número: 50</p>"; break;
                case 'C': echo "<p>La letra romana $letra corresponde al número: 100</p>"; break;
                case 'D': echo "<p>La letra romana $letra corresponde al número: 500</p>"; break;
                case 'M': echo "<p>La letra romana $letra corresponde al número: 1000</p>"; break;
                default: echo "<p>La letra $letra no es una letra romana.</p>"; break;
            }
        }
    }
    ?>
</body>
</html>