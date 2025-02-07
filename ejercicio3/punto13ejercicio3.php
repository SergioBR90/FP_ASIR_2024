<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular dolares</title>
</head>
<body>
    <h1>Calcular dolares</h1>
 <form method="post" action="">
        <label for="euros">Introduce cantidad de Euros:</label>
        <input type="number" id="euros" name="euros" required><br><br>

        <button type="submit">Calcular</button>
 </form>
  <?php
        if (isset($_POST['euros'])){
            $euros = $_POST['euros']; 
          $dolares = $euros * 1.03495;
          echo "El resultado del cambio de euro a dolar es: $dolares";
        }           
  ?>
</body>
</html>
