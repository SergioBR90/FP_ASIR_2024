

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Celsius a Fahrenheit</title>
</head>
<body>
    <h1><p>Por favor, introduce un valor de grados Celsius en el formulario.</p></h1>
    <form method="GET" action="punto17ejercicio2.php">
        <label for="celsius">Grados Celsius:</label>
        <input type="number" id="celsius" name="celsius" required step="any" placeholder="Introduce grados Celsius">
        <br><br>
        <button type="submit">Convertir</button>
    </form>
    <div>
        <?php
        
        if (isset($_GET['celsius'])) {
           
            $celsius = $_GET['celsius'];
        
            $fahrenheit = ($celsius * 1.8) + 32;
        
            $resultado = "<h3>Conversión de grados Celsius a Fahrenheit:</h3>";
            $resultado .= "<p>Grados Celsius: $celsius ºC</p>";
            $resultado .= "<p>Grados Fahrenheit: $fahrenheit °F</p>";
            echo $resultado;
        }
       
        ?>
    </div>
</body>
</html>
