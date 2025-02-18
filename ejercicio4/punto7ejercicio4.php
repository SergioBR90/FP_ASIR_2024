<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a mayúsculas o minúsculas</title>
</head>
<body>
    <h1>Convertir a mayúsculas o minúsculas</h1>
    <form method="post" action="">
        <label for="texto">Introduce un texto:</label>
        <input type="text" id="texto" name="texto"><br><br>
        <button type="submit" name="accion" value="minuscula">Convertir a minúsculas</button>
        <button type="submit" name="accion" value="mayuscula">Convertir a mayúsculas</button>
    </form>

    <?php
    if (isset($_POST['texto']) && !empty(trim($_POST['texto']))) {
        $texto = $_POST['texto'];

        if ($_POST['accion'] == "minuscula") {
            $resultado = strtolower($texto);
        } else {
            $resultado = strtoupper($texto);
        }

        echo "<p>Texto convertido: <strong>$resultado</strong></p>";
    }
    ?>
</body>
</html>
