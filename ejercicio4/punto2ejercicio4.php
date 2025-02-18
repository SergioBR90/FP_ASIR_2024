<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar un numero aleatorio</title>
</head>
<body>
    <h1>Generar un numero aleatorio</h1>

 <form method="post" action="">
        <label for="numero1">Introduce un numero:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>
        <label for="numero2">Introduce otro numero:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>        
        <button type="submit">Calcular</button>
 </form>

 <?php
    
     if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
     $generar_numero = rand($numero1, $numero2);
     echo "Un numero aleatorio entre $numero1 y $numero2 es: $generar_numero";
    }
     ?>
</body>
</html>