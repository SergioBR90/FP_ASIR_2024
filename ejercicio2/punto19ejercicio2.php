<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del Área del Cuadrado</title>
</head>
<body>
    <h1>Calcular el Área de un Cuadrado</h1>
    <form method="POST" action="punto19ejercicio2.php">
        <label for="lado">Lado del cuadrado:</label>
        <input type="number" id="lado" name="lado" required step="any" placeholder="Introduce el valor del lado">
        <br><br>
        <button type="submit">Calcular Área</button>
    </form>
    
</body>
</html>

<?php
if (isset($_POST['lado']))
 {
    $lado = $_POST['lado'];

    $area = $lado * $lado;

    $resultado = "<h3>Calculo del Área del Cuadrado:</h3>";
    $resultado .= "<p>Lado del cuadrado: $lado unidades</p>";
    $resultado .= "<p>Área del cuadrado: $area unidades cuadradas</p>";
    echo $resultado;
} 
?>
