<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el maximo y el minimo de tres numeros</title>
</head>
<body>
    <h1>Calcular el maximo y el minimo de tres numeros</h1>
    <form method="post" action="">
        <label for="numero1">Introduce un número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Introduce otro número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Introduce otro número:</label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <button type="submit">Calcular</button>    
    </form>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $maximo = max($numero1, $numero2, $numero3);
        $minimo = min($numero1, $numero2, $numero3);
        echo "El numero maximo de los tres es $maximo y el numero minimo de los tres es $minimo";
        }
    ?>
</body>
</html>
