<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la longitud y el area de un circulo</title>
</head>
<body>
    <h1>Calcular la longitud y el area de un circulo</h1>
    <form method="POST" action="punto22ejercicio2.php">
        <label for="radio">Radio:</label>
        <input type="number" name="radio" id="radio" placeholder="Introducir el valor del radio">
        <button type ="submit">Calcular la longitud y el area</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['radio']))
{
    $PI = 3.1415;
    $radio = $_POST['radio'];
    $longitud = 2 * $PI * $radio ;

    $area = $PI * pow($radio, 2);

    echo "La longitud del circulo es: $longitud<br>";
    echo "El area del circulo es :$area<br>";
}

?>