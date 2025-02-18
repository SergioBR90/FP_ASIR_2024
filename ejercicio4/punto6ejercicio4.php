<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoger si hay datos</title>
</head>
<body>
    <h1>Recoger si hay datos</h1>
    <form method="post" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero"><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['numero']) && !is_null($_POST['numero'])) {
        echo "La variable está definida y no es nula";
    } else {
        echo "La variable no está definida o es nula";
    }
    ?>
</body>
</html>
