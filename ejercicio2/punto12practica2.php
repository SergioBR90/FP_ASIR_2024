<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Valores</title>
</head>
<body>
    <h1>Suma de dos valores reales, uno real y otro cadena</h1>

    <form method="post" action="punto12ejercicio2.php">
        <label for="real">Introduce el primer valor:</label>
        <input type="text" id="real" name="real" required><br><br>

        <label for="valor2">Introduce el segundo valor:</label>
        <input type="text" id="cadena" name="cadena" required><br><br>

        <button type="submit">Ver resultados</button>
        <h2>Resultado:</h2>
    </form>
    </body>
    <?php
    if (isset($_POST['real']) && isset($_POST['cadena'])) 
    {
        $real = $_POST['real'];
        $cadena = $_POST['cadena']; 
       
        echo "El valor real es $real<br>";
        echo "El valor cadena es $cadena";
    }
    
    ?>
</html>