    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoger si hay datos</title>
</head>
<body>
    <h1>Recoger si hay datos</h1>
 <form method="post" action="">
        <label for="numero">Introduce un numero:</label>
        <input type="number" id="numero" name="numero"><br><br>
        <button type="submit">Calcular</button>
 </form>
    <?php
    if (isset($_POST['numero'])) {
        $numero1 = $_POST ['numero'];
        echo "el dato tiene valor";
    }
    else
    {
        echo "dato vacio porque no lo has enviado por el formulario";
    }
    ?>
</body>
</html>