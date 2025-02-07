<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa para saludar</title>
</head>
<body>
    <h1>Programa para saludar</h1>
    <form method="get" action="punto16ejercicio2.php">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <button type="submit">Saludar</button>
    </form>

    <?php

    if (isset($_GET['nombre'])) {
        $nombre =$_GET['nombre']; 
         echo "<h2>Hola, $nombre</h2>";
    }
    ?>
</body>
</html>
