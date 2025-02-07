<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia Switch</title>
</head>
<body>
    <h1>Sentencia Switch</h1>
    <p>Probamos la sentencia switch con un bucle for</p>
    <?php
        // Bucle que recorre los valores del 1 al 7
        for ($i = 1; $i <= 7; $i++) {
            echo "<p>Valor actual: $i</p>";
            
            // Sentencia switch
            switch ($i) {
                case 1:
                    echo "Hoy es Lunes.<br>";
                    break;
                case 2:
                    echo "Hoy es Martes.<br>";
                    break;
                case 3:
                    echo "Hoy es Miércoles.<br>";
                    break;
                case 4:
                    echo "Hoy es Jueves.<br>";
                    // Break eliminado intencionalmente
                case 5:
                    echo "Hoy es Viernes.<br>";
                    break;
                case 6:
                    echo "Hoy es Sábado.<br>";
                    break;
                case 7:
                    echo "Hoy es Domingo.<br>";
                    break;
                default:
                    echo "Número fuera de rango.<br>";
            }
        }
    ?>
</body>
</html>
