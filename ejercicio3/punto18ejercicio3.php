<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime numeros impares menores</title>
</head>
<body>
    <h1>Imprime numeros impares menores</h1>

    
 <form method="post" action="">
        <label for="primer_numero">Escribe un numero</label>
        <input type="number" id="primer_numero" name="primer_numero" required><br><br>
        <br><br>
        <button type="submit">Calcular</button>
 </form>

 <?php
          if (isset($_POST['primer_numero'])) {
            $primer_numero = intval($_POST['primer_numero']); // Aseguramos que sea un número entero
    
            echo "<h2>Números impares menores que $primer_numero:</h2>";
    
            for ($i = $primer_numero - 1; $i > 0; $i--) { // Iteramos desde el número ingresado hacia abajo
                if ($i % 2 != 0) { // Si el número es impar
                    echo "$i<br>"; // Imprimimos el número impar
                }
            }
        }               
?>
</body>
</html>
