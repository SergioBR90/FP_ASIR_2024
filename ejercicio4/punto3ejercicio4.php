<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir de decimal a entero</title>
</head>
<body>
    <h1>Convertir de decimal a entero</h1>
 <form method="post" action="">
        <label for="numero1">Introduce un numero decimal:</label>
        <input type="number" id="numero1" name="numero1" step="any" required ><br><br>
        <button type="submit">Calcular</button>
 </form>
 <?php
     if (isset($_POST['numero1'])) {
        $numero1 = filter_input(INPUT_POST, 'numero1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $entero = intval($numero1);
        echo "El $numero1 convertido a entero es $entero";
     }
     ?>
</body>
</html>