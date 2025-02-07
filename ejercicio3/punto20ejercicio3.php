<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Averiguar el mcd por el algoritmo de euclides</title>
</head>
<body>
    <h1>Averiguar el mcd por el algortimo de euclides</h1>
    
 <form method="post" action="">
        <label for="primer_numero">Introduce un numero</label>
        <input type="number" id="primer_numero" name="primer_numero" required><br><br>
        <br><br>
        <label for="segundo_numero">Introduce un numero</label>
        <input type="number" id="segundo_numero" name="segundo_numero" required><br><br>
        <br><br>
        <button type="submit">Calcular</button>
 </form>

 <?php
    if (isset($_POST['primer_numero']) && isset($_POST['segundo_numero'])) {
    $primer_numero = ($_POST['primer_numero']); 
    $segundo_numero = ($_POST['segundo_numero']); 
      // Algoritmo de Euclides
      function calcular_mcd($a, $b) {
        while ($b != 0) {
            $residuo = $a % $b;
            $a = $b;
            $b = $residuo;
        }
        return $a;
    }

    $mcd = calcular_mcd($primer_numero, $segundo_numero);
    echo "<h2>El MCD de $primer_numero y $segundo_numero es: $mcd</h2>";
}
    ?>
</body>
</html>