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
        <label for="letra">Introduce un caracter</label>
        <input type="text" id="letra" name="letra">
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['texto']) && isset($_POST['letra'])) {
    $texto = $_POST ['texto'];
    $letra = $_POST ['letra'];
    $pos = strpos($texto, $letra);
    if ($pos === false) {
        echo "La letra '$letra' no fue encontrada en la cadena '$texto'";
    } else {
        echo "La letra '$letra' fue encontrada en la cadena '$texto'";
        echo " y existe en la posición $pos";
    }
    }
    ?>
</body>
</html>
