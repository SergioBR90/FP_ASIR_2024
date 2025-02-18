<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar si la cadena tiene el caracter indicado</title>
</head>
<body>
    <h1>Comprobar si tiene el caracter indicado</h1>
    <form method="post" action="">
        <label for="texto">Introduce una cadena</label>
        <input type="text" id="texto" name="texto">
        <button type="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['texto'])) {
    $texto = $_POST ['texto'];
    $texto_sin_espacios = str_replace(' ', '', $texto);
    echo "<p>Texto sin espacios: <strong>$texto_sin_espacios</strong></p>";
}
    ?>
</body>
</html>
