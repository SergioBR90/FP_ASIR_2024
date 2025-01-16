<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas finales</title>
</head>
<body>
    <h1>Notas finales</h1>
    <form method="POST" action="punto35ejercicio2.php">
        <label for="nota_primer_trimestre">Nota primer trimestre 20%:</label>
        <input type="number" id="nota_primer_trimestre" name="nota_primer_trimestre" required>
        <br><br>
        <label for="nota_segundo_trimestre">Nota segundo trimestre 50%:</label>
        <input type="number" id="nota_segundo_trimestre" name="nota_segundo_trimestre" required>
        <br><br>
        <label for="nota_tercer_trimestre">Nota tercer trimestre trimestre 30%:</label>
        <input type="number" id="nota_tercer_trimestre" name="nota_tercer_trimestre" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $nota_primer_trimestre = $_POST['nota_primer_trimestre'];
       $nota_segundo_trimestre = $_POST['nota_segundo_trimestre'];
       $nota_tercer_trimestre = $_POST['nota_tercer_trimestre'];

       $nota_final = ($nota_primer_trimestre * 0.2) + ($nota_segundo_trimestre * 0.5) + ($nota_tercer_trimestre * 0.30);
       echo "La nota final del primer trimestre es $nota_primer_trimestre <br>";
       echo "La nota final del segundo trimestre es $nota_segundo_trimestre <br>";
       echo "La nota final del tercer trimestre es $nota_tercer_trimestre <br>";
       echo "Nota final:$nota_final</p>";
    }
    ?>
</body>
</html>