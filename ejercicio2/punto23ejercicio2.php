<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el descuento</title>
</head>
<body>
    <h1>Calcular el 10% descuento</h1>
    <form method="POST" action="punto23ejercicio2.php">
        <label for="descuento">Precio:</label>
        <input type="number" name="descuento" id="descuento" placeholder="Introducir el valor del radio">
        <button type ="submit">Calcular el descuento</button>
    </form>

    <?php
    if (isset($_POST['descuento']))
    {
        $precio = $_POST['descuento'];
        $descuento = $precio * 0.1; 
        $precio_final = $precio - $descuento; 

        echo "El descuento aplicado es: $descuento<br>";
        echo "El precio final con descuento es: $precio_final<br>";
    }
    ?>

</body>
</html>

