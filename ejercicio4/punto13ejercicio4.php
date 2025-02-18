<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar el numero de palabras</title>
</head>
<body>
    <h1>Contar el numero de palabras</h1>
    <form method="post" action="">
        <label for="texto">Introduce una cadena</label>
        <input type="text" id="texto" name="texto">
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['texto'])) {
    $texto = trim($_POST ['texto']);
    $num_palabras = str_word_count($texto);
    echo "La cadena ingresada tiene $num_palabras palabras";
    }
    ?>
</body>
</html>
