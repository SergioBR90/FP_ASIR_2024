<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir a la inversa</title>
</head>
<body>
    <h2>Imprimir a la inversa</h2>
    <form method="post">
        <label for="numero1">Ingresa el numero 1:</label>
        <input type="number" name="numero1" required><br>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if (isset($_POST['numero1'])) {
        $numero1 = $_POST['numero1'];
        echo strrev("$numero1");//Invertir el numero(strrev)
    }
    ?>
</body>
</html>