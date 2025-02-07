<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar de letras a números</title>
</head>
<body>
    <h1>Pasar de letras a números</h1>
    <form method="post" action="">
        <label for="numero1">Introduce un número </label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Introduce otro número </label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Introduce otro número </label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <label for="numero4">Introduce otro número </label>
        <input type="number" id="numero4" name="numero4" required>
        <br><br>
        <label for="numero5">Introduce otro número </label>
        <input type="number" id="numero5" name="numero5" required>
        <br><br>
        <label for="numero6">Introduce otro número </label>
        <input type="number" id="numero6" name="numero6" required>
        <br><br>
        <label for="numero7">Introduce otro número </label>
        <input type="number" id="numero7" name="numero7" required>
        <br><br>
        <label for="numero8">Introduce otro número </label>
        <input type="number" id="numero8" name="numero8" required>
        <br><br>
        <label for="numero9">Introduce otro número </label>
        <input type="number" id="numero9" name="numero9" required>
        <br><br>
        <label for="numero10">Introduce otro número </label>
        <input type="number" id="numero10" name="numero10" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
   if (isset($_POST ['numero1']) && isset($_POST ['numero2']) && isset($_POST ['numero3']) && isset($_POST ['numero4']) && isset($_POST ['numero5']) && isset($_POST ['numero6']) && isset($_POST ['numero7']) && isset($_POST ['numero8']) && isset($_POST ['numero9']) && isset($_POST ['numero10']) ){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    $numero5 = $_POST['numero5'];
    $numero6 = $_POST['numero6'];
    $numero7 = $_POST['numero7'];
    $numero8 = $_POST['numero8'];
    $numero9 = $_POST['numero9'];
    $numero10 = $_POST['numero10'];
    $suma = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5 + $numero6 + $numero7 + $numero8 + $numero9 + $numero10);
    echo "La suma de los diez numero es $suma <br>";
    $promedio = $suma / 10;
    echo "El promedio de los diez numero es $promedio";
   }
    ?>
</body>
</html>