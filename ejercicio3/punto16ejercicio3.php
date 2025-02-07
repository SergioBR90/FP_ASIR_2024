<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular que numero es mayor</title>
</head>
<body>
    <h1>Calcular que numero es mayor</h1>

    
 <form method="post" action="">
        <label for="primer_numero">Primer numero</label>
        <input type="number" id="primer_numero" name="primer_numero" required><br><br>
        <br><br>
        <label for="segundo_numero">Segundo numero</label>
        <input type="number" id="segundo_numero" name="segundo_numero" required><br><br>
        <br><br>
        <label for="tercer_numero">Tercer numero</label>
        <input type="number" id="tercer_numero" name="tercer_numero" required><br><br>
        <br><br>
        <button type="submit">Calcular</button>
 </form>

 <?php
        if (isset($_POST['primer_numero']) && isset($_POST['segundo_numero']) && isset($_POST['tercer_numero'])){
            $primer_numero = $_POST['primer_numero'];
            $segundo_numero = $_POST['segundo_numero']; 
            $tercer_numero = $_POST['tercer_numero']; 

           $menor = min($primer_numero, $segundo_numero, $tercer_numero);
           $mayor = max($primer_numero, $segundo_numero, $tercer_numero);
           echo "El menor numero de todos es $menor <br>";
           echo "El mayor numero de todos es $mayor";
        }                
?>
</body>
</html>
