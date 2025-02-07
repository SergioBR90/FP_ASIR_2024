<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rango numeros primos</title>
</head>
<body>
    <h2>Rango numeros primos</h2>
    <form method="post">
        <label for="numero1">Ingresa el límite inferior:</label>
        <input type="number" name="numero1" required><br>
        <label for="numero2">Ingresa el límite superior:</label>
        <input type="number" name="numero2" required><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Función para verificar si un número es primo
        function esPrimo($numero) {
            if ($numero < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        // Mostrar los números primos en el rango dado
        echo "<h3>Números primos entre $numero1 y $numero2:</h3>";
        for ($i = $numero1; $i <= $numero2; $i++) {
            if (esPrimo($i)) {
                echo "$i";
                if ($i < $numero2) {
                    echo " - ";
                }
            }
        }
    }
    ?>
</body>
</html>