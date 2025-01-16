<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Tiempo</title>
</head>
<body>
    <h1>Conversión de Segundos a Minutos y Horas</h1>

    
 <form method="get" action="punto14ejercicio2.php">
        <label for="segundos">Introduce la cantidad de segundos:</label>
        <input type="text" id="segundos" name="segundos" required><br><br>

        <button type="submit">Convertir</button>
 </form>

 <?php
    
       if (isset($_GET['segundos'])) {
        $segundos =$_GET['segundos']; 

        $minutos = $segundos / 60;
        $horas = $minutos / 60;

        echo "<h2>Resultados:</h2>";
        echo "Segundos: " . $segundos . " segundos<br>";
        echo "Minutos: " . number_format($minutos, 2) . " minutos<br>";
        echo "Horas: " . number_format($horas, 2) . " horas<br>";
    } else {
        echo "<h2>Por favor, introduce una cantidad de segundos en el formulario.</h2>";
    }
?>
</body>
</html>
