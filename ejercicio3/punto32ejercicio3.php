<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplos</title>
</head>
<body>
    <h2>Ingrese 10 valores</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="valor">Valores:</label>
            <input type="number" name="valores" required><br>
        <?php endfor; ?>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = $_POST["valores"];
        $multiplos_3 = 0;
        $multiplos_5 = 0;
        {
            if ($valor % 3 == 0) 
            {
                $multiplos_3++;
            } 
            if ($valor % 5 == 0) 
            {
                $multiplos_5++;
            }
            if($multiplos_3 && $multiplos5)
            { 
                $ambos_a_la_vez;
            }
        }
        
        echo "<h3>Resultados</h3>";
        echo "Los numero multiplos de 3 son: $multiplos_3 <br>";
        echo "Los numeros multiplos de 5 son: $multiplos_5";
        echo "Son multipos de ambos a la vez: $ambos_a_la_vez";
    }
    ?>
</body>
</html>
