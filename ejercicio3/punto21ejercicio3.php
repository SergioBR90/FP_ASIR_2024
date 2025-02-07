<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolver Ecuación de Segundo Grado</title>
</head>
<body>
    <h1>Resolver Ecuación de Segundo Grado</h1>
    <form method="post" action="">
        <label for="a">Coeficiente a:</label>
        <input type="number" id="a" name="a" step="any" required><br><br>
        
        <label for="b">Coeficiente b:</label>
        <input type="number" id="b" name="b" step="any" required><br><br>
        
        <label for="c">Coeficiente c:</label>
        <input type="number" id="c" name="c" step="any" required><br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($a == 0) {
            echo "El coeficiente 'a' no puede ser 0 en una ecuación de segundo grado.";
        } else {
            $discriminante = ($b * $b) - (4 * $a * $c);
            
            if ($discriminante > 0) {
                $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
                echo "Las soluciones son x1 = $x1 y x2 = $x2";
            } elseif ($discriminante == 0) {
                $x = -$b / (2 * $a);
                echo "La ecuación tiene una única solución: x = $x";
            } else {
                echo "La ecuación no tiene soluciones reales.";
            }
        }
    }
    ?>
</body>
</html>
