<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la potencia de un número</title>
</head>
<body>
    <h1>Calcular la potencia de un número</h1>
    <form method="post" action="">
        <label for="base">Introduce un número (base):</label>
        <input type="number" id="base" name="base" required>

        <label for="exp">Introduce el exponente:</label>
        <input type="number" id="exp" name="exp" required>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['base']) && isset($_POST['exp'])) {
        $base = $_POST['base'];
        $exp = $_POST['exp'];
        $resultado = pow($base, $exp); 
        
        echo "<p>La base $base elevada al exponente $exp es: $resultado</strong></p>";
    }
    ?>
</body>
</html>
