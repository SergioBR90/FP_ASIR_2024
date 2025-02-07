<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en HTML y PHP</title>
</head>
<body>
    <h2>Calculadora en HTML y PHP</h2>
    
    <form method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" step="any" name="numero1" required><br><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" step="any" name="numero2" required><br><br>
        
        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
            <option value="potencia">Potencia</option>
        </select>
        <br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
        $a = floatval($_POST['numero1']); 
        $b = floatval($_POST['numero2']);
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case "suma":
                $resultado = $a + $b;
                break;
            case "resta":
                $resultado = $a - $b;
                break;
            case "multiplicacion":
                $resultado = $a * $b;
                break;
            case "division":
                $resultado = $a / $b;
                break;  
            case "potencia":
                $resultado = pow($a, $b);
                break;
            }
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
