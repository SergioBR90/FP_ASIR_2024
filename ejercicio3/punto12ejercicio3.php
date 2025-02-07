<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular suma</title>
</head>
<body>
    <h1>Calcular suma</h1> 
 <form method="post" action="">
        <label for="numero">Introduce un numero:</label>
        <input type="number" id="numero" name="numero" required><br><br>

        <button type="submit">Calcular</button>
 </form>
<?php
////Escribir un programa que lea un número entero y realiza la suma de
 //los 100 números siguientes, mostrando el resultado.
          if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $calculo = 0;
            for ($i = 1; $i <=100; $i++) {
                $calculo += $numero + $i;
            }
            echo "La suma de los cien numero siguientes a $numero es: $calculo";
          }
              ?>
</body>
</html>
