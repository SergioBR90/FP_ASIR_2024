<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular tabla multiplicar</title>
</head>
<body>
    <h1>Calcular tabla multiplicar</h1>

    
 <form method="post" action="">
        <label for="numero">Introduce un numero:</label>
        <input type="number" id="numero" name="numero" required><br><br>

        <button type="submit">Calcular</button>
 </form>

 <?php
    
     if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        for ($i = 1; $i <= 10; $i++){
            $multiplicacion = $numero * $i;
            echo "La multiplicacion del numero $numero es: $numero * $i= $multiplicacion <br>";
        }
    }
     ?>
</body>
</html>