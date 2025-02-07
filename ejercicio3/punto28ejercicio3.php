<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular el mayor area</title>
</head>
<body>
    <h1>Calcular el mayor area</h1>
    <form method="post" action="">
        <label for="base1">Base primer triangulo</label>
        <input type="number" id="base1" name="base1" required>
        <br><br>
        <label for="altura1">Altura primer triangulo</label>
        <input type="number" id="altura1" name="altura1" required>
        <br><br>
        <label for="base12">Base segundo triangulo</label>
        <input type="number" id="base2" name="base2" required>
        <br><br>
        <label for="altura2">Altura segundo triangulo</label>
        <input type="number" id="altura2" name="altura2" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
      if (isset($_POST['base1']) && isset($_POST['altura1']) && isset($_POST['base2']) && isset($_POST['altura2'])) {
        $base1 = $_POST ['base1'];
        $altura1 = $_POST ['altura1'];
        $base2 = $_POST ['base2'];
        $altura2 = $_POST ['altura2'];
        $area1 = $base1 * $altura1;
        $area2 = $base2 * $altura2;
        if ($area1 > $area2) {
            echo "el primer triangulo tiene un area $area1 por tanto es mayor";
        }
        else {
            echo "el segundo triangulo tiene un area de $area2 por tanto es mayor";
        }
    }
    ?>
</body>
</html>
