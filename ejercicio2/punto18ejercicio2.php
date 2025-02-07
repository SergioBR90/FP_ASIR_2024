<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del Salario</title>
</head>
<body>
    <h1>Calcular Salario</h1>
    <form method="GET" action="punto18ejercicio2.php">
        <label for="horasTrabajadas">Horas trabajadas:</label>
        <input type="number" id="horasTrabajadas" name="horasTrabajadas" required step="any" placeholder="Introduce horas trabajadas">
        <br><br>
        <label for="sueldoPorHora">Sueldo por hora:</label>
        <input type="number" id="sueldoPorHora" name="sueldoPorHora" required step="any" placeholder="Introduce sueldo por hora">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    
    
    <div>
    <?php
        if (isset($_GET['horasTrabajadas']) && isset($_GET['sueldoPorHora'])) {
            
            $horasTrabajadas = $_GET['horasTrabajadas'];
            $sueldoPorHora = $_GET['sueldoPorHora'];
           
            $salario = $horasTrabajadas * $sueldoPorHora;

            $resultado = "<h3>Calculo del Salario:</h3>";
            $resultado .= "<p>Horas trabajadas: $horasTrabajadas </p>";
            $resultado .= "<p>Sueldo por hora: $sueldoPorHora</p>";
            $resultado .= "<p>Salario total: $salario $ </p>";
            echo $resultado;
        } 
        
        ?>
    </div>
</body>
</html>
