<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el genero de alumnos</title>
</head>
<body>
    <h1>Calcular el genero de alumnos</h1>
    <form method="POST" action="punto24ejercicio2.php">
        <label for="alumnos">alumnos:</label>
        <input type="number" name="alumnos" id="alumnos" placeholder="Introducir el valor de alumnos">
        <br><br>
        <label for="alumnas">alumnas:</label>
        <input type="number" name="alumnas" id="alumnas" placeholder="Introducir el valor de alumnas">
        <br><br>
        <button type ="submit">Calcular el genero</button>
    </form>

    <?php
     if (isset($_POST['alumnos']) && isset($_POST['alumnas']))
    {
        $alumnos = $_POST['alumnos'];
        $alumnas = $_POST['alumnas'];
        $total = $alumnos + $alumnas;

        $porcentajealumnos = ($alumnos*100)/$total; 
        $porcentajealumnas = ($alumnas*100)/$total;

        //redondeamos a dos decimales
        $porcentajealumnos = round($porcentajealumnos,2);
        $porcentajealumnas = round($porcentajealumnas,2);

        echo "El tanto por ciento de chicos es :$porcentajealumnos<br>";
        echo "El tanto por ciento de chicas es :$porcentajealumnas<br>";
    }
    ?>

</body>
</html>
