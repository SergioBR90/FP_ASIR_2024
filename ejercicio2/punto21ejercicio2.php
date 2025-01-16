<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area del triangulo</title>
</head>
<body>
    <h1>Calcular el Area del triangulo</h1>
    <form method="POST" action="punto21ejercicio2.php">
        <label for="area">Area:</label>
        <input type="number" name="lado" id="lado" placeholder="Introducir el valor del lado">
        <button type ="submit">Calcular el area</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['lado']))
{
    $lado1 = $_POST ['lado'] * $_POST ['lado'] * $_POST ['lado'];

    $area = $lado1 * 3;

    echo "El area del triangulo es :$area" . "<br>";
}

?>