<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento solo en Octubre</title>
</head>
<body>
    <h1>Calcular el valor de los descuentos dependiento del mes</h1>
    <form method="POST" action="punto29ejercicio2.php">
        <label for="importe">Calculo segun el mes</label>
        <input type="text" name="mes" id="mes" placeholder="Introducir el mes">
        <br><br>
        <label for="importe">Calculo de precio</label>
        <input type="number" name="importe" id="importe" placeholder="Introducir el importe">
        <br><br>
        <button type ="submit">Calcular</button>
        <br><br>
    </form>

    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $importe = $_POST['importe'];
        $mes = strtolower(trim($_POST['mes'])); 

        if ($mes === "octubre") {
            $descuento = $importe * 0.15;
            $total = $importe - $descuento;

            echo "<p>Descuento aplicado, El importe original es $importe €, el descuento es $descuento €, y el total a cobrar es $total €.</p>";
        } else {
            echo "<p>No hay descuento. El importe total a cobrar es $importe €.</p>";
        }
    }
    ?>
</body>
</html>