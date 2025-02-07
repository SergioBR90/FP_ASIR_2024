<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas finales</title>
</head>
<body>
    <h1>Notas finales</h1>
    <form method="POST" action="punto11ejercicio2.php">
        <label for="primera_nota">Primera nota:</label>
        <input type="number" id="primera_nota" name="primera_nota" required>
        <br><br>
        <label for="segunda_nota">Segunda nota:</label>
        <input type="number" id="segunda_nota" name="segunda_nota" required>
        <br><br>
        <label for="tercera_nota">Tercera nota:</label>
        <input type="number" id="tercera_nota" name="tercera_nota" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $primera_nota = $_POST['primera_nota'];
       $segunda_nota = $_POST['segunda_nota'];
       $tercera_nota = $_POST['tercera_nota'];

       $nota_final = ($primera_nota + $segunda_nota + $tercera_nota) / 3;
       echo "La nota final del primer trimestre es: $primera_nota <br>";
       echo "La nota final del segundo trimestre es: $segunda_nota <br>";
       echo "La nota final del tercer trimestre es: $tercera_nota <br>";
        echo "El resultado de la nota final es: $nota_final";
    }
    ?>
</body>
</html>