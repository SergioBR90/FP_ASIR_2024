<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificacion segun edad</title>
</head>
<body>
    <h1>Clasificacion segun edad</h1>   
 <form method="post" action="">
        <label for="edad">Introduce tu edad</label>
        <input type="number" id="edad" name="edad" required><br><br>
        <br><br>
        <button type="submit">Calcular</button>
 </form>
 <?php
    if (isset($_POST['edad'])) {
        $edad = intval($_POST['edad']); // Convertimos la entrada a un número entero
        // Clasificamos según las etapas
        if ($edad < 14) {
            echo "Esta persona está en la infancia.";
        } elseif ($edad >= 14 && $edad <= 26) {
            echo "Esta persona está en la juventud.";
        } elseif ($edad >= 27 && $edad <= 59) {
            echo "Esta persona está en la adultez.";
        } elseif ($edad >= 60) {
            echo "Esta persona ya es mayor.";
        }
    }
    ?>
</body>
</html>
