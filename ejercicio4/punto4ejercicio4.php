<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular raiz cuadrada</title>
</head>
<body>
    <h1>Calcular raiz cuadrada</h1>
 <form method="post" action="">
        <label for="numero">Introduce un numero:</label>
        <input type="number" id="numero" name="numero" required><br><br>
        <button type="submit">Calcular</button>
 </form>
 <?php
     if (isset($_POST['numero'])) {
        $numero1 = $_POST ['numero'];
        $calculo = sqrt($numero1);
        echo "La raiz cuadrada del $numero1 es $calculo";
    }
     ?>
</body>
</html>