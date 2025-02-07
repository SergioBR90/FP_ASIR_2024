<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir de entero a binario</title>
</head>
<body>
    <h2>Convertir de entero a binario</h2>
    <form method="post">
        <label for="numero1">Convertir de entero a binario</label>
        <input type="number" name="numero1" required><br>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if (isset($_POST['numero1'])) {
        $numero1 = intval($_POST['numero1']);//Captura el numero entero
        echo decbin($numero1);//Convertir a binario (decbin)
    }
    ?>
</body>
</html>