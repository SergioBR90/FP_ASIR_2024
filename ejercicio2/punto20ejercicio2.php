<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del Rectángulo</title>
</head>
<body>
    <h1>Calcular el Área de un Rectángulo</h1>
    <form method="POST" action="punto20ejercicio2.php">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required step="any">
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required step="any">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['base']) && isset($_POST['altura'])) {
    $area = $_POST['base'] * $_POST['altura'];
    $resultado = "El área del rectángulo es: $area unidades cuadradas.";
    echo $resultado;

}

?>