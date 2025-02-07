<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Basicas</title>
</head>
<body>
    <h1>Operaciones Basicas</h1>
    <form method="post" action="">
        <label for="numero1">Introduce un numero</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        
        <label for="numero2">Introduce un numero</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        
        <label for="numero3">Introduce un numero</label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        
        <label for="numero4">Introduce un numero</label>
        <input type="number" id="numero4" name="numero4" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
      if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];

        $suma = $numero1 + $numero2 + $numero3 + $numero4;
        $resta = $numero1 - $numero2 - $numero3 - $numero4;
        $multiplicacion = $numero1 * $numero2 * $numero3 * $numero4;
        $division = ($numero1 + $numero2 + $numero3 + $numero4) / 4;
        echo "El resultado de las operaciones para la suma es :$suma <br>";        
        echo "El resultado de las operaciones para la resta es :$resta <br>";
        echo "El resultado de las operaciones para la multiplicacion es :$multiplicacion <br>";
        echo "El resultado de las operaciones para la division es :$division <br>";
    }
    ?>
</body>
</html>
