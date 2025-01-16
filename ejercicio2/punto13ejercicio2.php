<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Valores</title>
</head>
<body>
    <h1>Suma de dos valores reales</h1>

    <form method="post" action="punto13ejercicio2.php">
        <label for="valor1">Introduce el primer valor:</label>
        <input type="text" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Introduce el segundo valor:</label>
        <input type="text" id="valor2" name="valor2" required><br><br>

        <button type="submit">Calcular Suma</button>
    </form>

    <?php
        if (isset($_POST['valor1']) &&isset($_POST['valor2']))
        {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $suma = $valor1 + $valor2;

            echo "<h2>Resultado:</h2>";
            echo "La suma de $valor1 y $valor2 es: $suma";
        }
        else
        {
            echo "No se han introducido valores en el formulario.";
        }
        
    ?>
</body>
</html>
