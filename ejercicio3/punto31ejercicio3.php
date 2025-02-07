<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la nota</title>
</head>
<body>
    <h1>Calcular la nota</h1>
    <form method="post" action="">
        <label for="numero1">Introduce una nota </label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Introduce otro nota </label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Introduce otro nota </label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <label for="numero4">Introduce otro nota </label>
        <input type="number" id="numero4" name="numero4" required>
        <br><br>
        <label for="numero5">Introduce otro nota </label>
        <input type="number" id="numero5" name="numero5" required>
        <br><br>
        <label for="numero6">Introduce otro nota </label>
        <input type="number" id="numero6" name="numero6" required>
        <br><br>
        <label for="numero7">Introduce otro nota </label>
        <input type="number" id="numero7" name="numero7" required>
        <br><br>
        <label for="numero8">Introduce otro nota </label>
        <input type="number" id="numero8" name="numero8" required>
        <br><br>
        <label for="numero9">Introduce otro nota </label>
        <input type="number" id="numero9" name="numero9" required>
        <br><br>
        <label for="numero10">Introduce otro nota </label>
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
    
    if ($numero1 >= 7) {
        echo "la nota del primer alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del primer alumno es menor a 7 <br>";
     }
     if ($numero2 >= 7) {
        echo "la nota del segundo alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del segundo alumno es menor a 7 <br>";
     }
     if ($numero3 >= 7) {
        echo "la nota del tercer alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del tercer alumno es menor a 7 <br>";
     }
     if ($numero4 >= 7) {
        echo "la nota del cuarto alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del cuarto alumno es menor a 7 <br>";
     }
     if ($numero5 >= 7) {
        echo "la nota del quinto alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del quinto alumno es menor a 7 <br>";
     }
     if ($numero6 >= 7) {
        echo "la nota del sexto alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del sexto alumno es menor a 7 <br>";
     }
     if ($numero7 >= 7) {
        echo "la nota del septimo alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del septimo alumno es menor a 7 <br>";
     }
     if ($numero8 >= 7) {
        echo "la nota del octavo alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del octavo alumno es menor a 7 <br>";
     }
     if ($numero9 >= 7) {
        echo "la nota del noveno alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del noveno alumno es menor a 7 <br>";
     }
     if ($numero10 >= 7) {
        echo "la nota del decimo alumno es mayor o igual a 7 <br>";
     }
     else {
        echo "la nota del decimo alumno es menor a 7 <br>";
     }
    }  
    
    ?>
</body>
</html>