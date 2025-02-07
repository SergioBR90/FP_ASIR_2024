<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular area rectangulo</title>
</head>
<body>
    <h1>Calcular area rectangulo</h1>

    
 <form method="post" action="">
        <label for="altura">Introduce la altura</label>
        <input type="number" id="altura" name="altura" required><br><br>
        <br><br>
        <label for="anchura">Introduce la anchura</label>
        <input type="number" id="anchura" name="anchura" required><br><br>
        <br><br>

        <button type="submit">Calcular</button>
 </form>

 <?php
        if (isset($_POST['altura']) && isset($_POST['anchura'])){
            $altura = $_POST['altura'];
            $anchura = $_POST['anchura']; 
            $resultado = ($altura * $anchura) / 2;
          echo "El area del rectangulo es $resultado";
        }
                 
?>
</body>
</html>
