<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de areas</title>
</head>
<body>
    <h1>Calculadora de areas</h1>
    <form method="post" action="">
        <label>Seleciona una figura geometrica</label>
        <select name="figura" required>
            <option value="trapecio">Trapecio</option>
            <option value="triangulo">Triángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="circulo">Círculo</option>
        </select>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
        if (isset($_POST['figura']) ) //vemos si se ha introducido un valor en el formulario anterior y se le ha dado a enviar
        {
            $tipoFigura = $_POST["figura"];//Leemos ese valor del formulario, es decir, el name del select -> figura
            //y almacenará el valor que tenemos en los options
            //Vamos a mostrar la formula segun el tipo de figura
            if ($tipoFigura == "Trapecio") 
            {
                echo  "area = (base * altura) / 2";
            }
            elseif ($tipoFigura == "Triangulo") {
                echo  "(base + base) * altura) / 2";
            }
            elseif ($tipoFigura == "Cuadrado") {
                echo  "area = base * altura";
            }
            elseif ($tipoFigura == "Rectangulo") {
                echo "area = base * altura";
            }
            elseif ($tipoFigura == "Circulo") {
                echo "pi * (radio * radio)";
            }
            else {
                echo "Ingrese una figura geometrica valida";
            }
        }
    ?>
</body>
</html>
