<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir la longuitud</title>
</head>
<body>
    <h1>Convertir la longuitud</h1>
    <form method="post" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" step="any" required><br><br>
        <button type="submit" name="accion" value="kilometros">kilometros</button>
        <button type="submit" name="accion" value="metros">metros</button>
        <button type="submit" name="accion" value="centimetros">centimetros</button>
        <button type="submit" name="accion" value="milimetros">milimetros</button>
    </form>

    <?php
    if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
        $numero = $_POST ['numero'];
      
        $kilometros = $numero / 1000;
        $metros = $numero;
        $centimetros = $numero * 100;
        $milimetros = $numero * 1000;
        
        if ($_POST['accion'] == "kilometros") {
            echo "El resultado son:kilometros:$kilometros<br>metros:$metros<br>centimetros:$centimetros<br>milimetros:$milimetros";
        }
        if ($_POST['accion'] == "metros") {
            echo "El resultado son:kilometros:$kilometros<br>metros:$metros<br>centimetros:$centimetros<br>milimetros:$milimetros";
        }
         if ($_POST['accion'] == "centimetros") {
            echo "El resultado son:kilometros:$kilometros<br>metros:$metros<br>centimetros:$centimetros<br>milimetros:$milimetros";
        }
         if ($_POST['accion'] == "milimetros") {
            echo "El resultado son:kilometros:$kilometros<br>metros:$metros<br>centimetros:$centimetros<br>milimetros:$milimetros";
        }                
    }
    ?>
</body>
</html>
