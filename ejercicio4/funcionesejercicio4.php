<?php
     function procedemiento()//Cabecera
      //entre llaves cuerpo
     {
        echo "existen dos tipos de métodos: procedmientos y funciones";
        echo "existen dos tipos de métodos: procedmientos y funciones";
        echo "existen dos tipos de métodos: procedmientos y funciones";
        echo "existen dos tipos de métodos: procedmientos y funciones";
        echo "existen dos tipos de métodos: procedmientos y funciones";
        echo "existen dos tipos de métodos: procedmientos y funciones";
    }
    procedemiento();//Invocación
    function funcion()
    {
        return 13;
    }
    $resultado = funcion();//devuelve le 13 por lo tanto resultado vale 13;
    echo $resultado;

     //se les llamaan parámetros formales
    function ejemploParametros($parametro1,$parametro2)//un parametro es una variable que SOLO existe denrto de ese método
    {
        echo "Mostramos los valores de los parámetros: $parametro1 y $parametro2";
    }

    $valor1 = 14;
    $valor2 = 2;

    ejemploParametros($valor1,$valor2);//Parametros reales
    ejemploParametros(3,13);
        ?>
    <br>

<?php
//ejercicio1
//Crea una función que reciba dos números reales y devuelva su suma.
    function sumar($numero1, $numero2) 
    {           //  3           13
        return $numero1 + $numero2;
    }
    echo "sumar";
    ?>
<br>

<?php
    //ejercicio2
    //Escribe una función que devuelva el área de un círculo dado su radio. Recuerda que, para calcular el área, la fórmula es Π * r2.
    function multiplicar($pi,$R) {
        return $pi * pow($R,2);
    }
    echo multiplicar(3,14);
?>

<br>
 <?php
        //ejercicio3
        // Función que eleva un número a un exponente dado
        function elevadounexponente($base, $exponente) {
            return pow($base, $exponente);
        }
        
        // Definir los valores
        $numero1 = 5;
        $numero2 = 3;
        
        // Llamar a la función con los valores correctos
        $resultado = elevadounexponente($numero1, $numero2);
        
        // Mostrar el resultado
        echo "El resultado de $numero1 elevado a la $numero2 es: $resultado";
 ?>
  <br>  
    
<?php
//ejercicio4 
//Crea un programa que reciba dos números y un código de operación y permita calcular las operaciones básicas (suma, resta, multiplicación y división) entre estos dos números.
function codigoperacion ($a, $b) {
   echo "Suma: " . ($a + $b) . "\n";
   echo "Multiplica: " . ($a * $b) . "\n";
   echo "Resta: " . ($a - $b) . "\n";

   if ($b != 0) {
    echo "Division: " . ($a / $b) . "\n";
    } else {
    echo "Error: No se puede dividir por cero \n";
    }
}

$a = 10;
$b = 15;
codigoperacion($a, $b);
?>

<br>

<?php
//ejercicio5
//Escribe una función llamada conversionMoneda (…) que permita convertir una cantidad de dinero dada en dólares, libras o yenes a euros.
function conversionMoneda($libra, $dolar, $yen) {
    echo "Euros (desde libras): " . ($libra * 1.22) . "\n";
    echo "Euros (desde dólares): " . ($dolar * 0.75) . "\n";
    echo "Euros (desde yenes): " . ($yen * 0.009) . "\n";
}

// Llamada a la función con valores de ejemplo
conversionMoneda(10, 20, 3000);
?>

<br>

<?php
//ejercicio6
//Los empleados de una fábrica trabajan en dos turnos, Diurno y Nocturno. Se desea calcular el jornal diario de acuerdo a con las siguientes reglas:
    function calculosalario ($horasdiurnas, $horasnocturnas) {
     $salariodiurno = $horasdiurnas * 10;
     $salarionocturno = $horasnocturnas * 13.5;
     $salariototal = $salariodiurno * $salarionocturno;
     echo "Salario Diurno:" . $salariodiurno . "\n";
     echo "Salario Nocturno:" . $salarionocturno . "\n";
     echo "Salario Total:" . $salariototal . "\n";   
    }  
    //calculo del salario con 8 horas diurnas y 8 horas nocturnas
    calculosalario(8, 8); 
?>

<br>

<?php
//ejercicio9
//En caso de ser festivo, la tarifa se incrementa en un 10% en caso de turno diurno y en un 15% para el nocturno.
function calculoFestivo($horasDiurnas, $horasNocturnas, $esFestivo = false) {
    // Calcular salario base
    $salarioDiurno = $horasDiurnas * 10; // Tarifa diurna base
    $salarioNocturno = $horasNocturnas * 13.5; // Tarifa nocturna base
    
    // Si es festivo, incrementar según la tarifa correspondiente
    if ($esFestivo) {
        $salarioDiurno += $salarioDiurno * 0.10; // 10% extra en diurno
        $salarioNocturno += $salarioNocturno * 0.15; // 15% extra en nocturno
    }
    
    // Calcular el salario total
    $salarioTotal = $salarioDiurno + $salarioNocturno;

    // Imprimir los resultados
    echo "Salario Diurno: " . $salarioDiurno . "€\n";
    echo "Salario Nocturno: " . $salarioNocturno . "€\n";
    echo "Salario Total: " . $salarioTotal . "€\n";
}

// Ejemplo de uso: calcular el salario festivo con 8 horas diurnas y 8 horas nocturnas
calculoFestivo(8, 8, true); // Llamar con el parámetro 'true' para indicar que es festivo
?>

<br>

<?php
//ejercicio10
//Crea una aplicación que nos pida un número y, mediante un procedimiento, nos indique si es este es primo o no.
function calcularPrimo($numero) {
    if ($numero <= 1) {
        return "El número $numero no es primo.";
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return "El número $numero no es primo.";
        }
    }

    return "El número $numero es primo.";
}

// Comprobar si se ha enviado el formulario
$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST["numero"]) ? (int)$_POST["numero"] : 0;
    $resultado = calcularPrimo($numero);
}
//Faltaria el html
?>

<br>

<?php
//ejercicio11
//Crea un procedimiento que nos de un número N, nos devuelva los primos anteriores a este.
if (isset($_POST['numero'])) {
    $numero = (int) $_POST['numero']; // Convertir a entero
    primosAnteriores($numero);
}
// Procedimiento para mostrar los números primos anteriores a un número dado
function primosAnteriores($numero) {
    echo "Los números primos menores que $numero son: ";
    for ($n = 2; $n < $numero; $n++) { // Recorre los números menores a N
        if (esPrimo($n)) {
            echo $n . " "; // Imprime directamente el número primo
        }
    }
}
// Función para verificar si un número es primo
function esPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
?>

<br>

<?php
//ejercicio12
//Escribe una función que devuelva el factorial de un número N (siendo N un número entero positivo). El factorial de 5 es el resultado de 5*4*3*2*1.
function factorial($n) {
    $resultado = 1;
    for ($i = $n; $i > 1; $i++) {
        $resultado *= $i;
    }
        return $resultado;
    echo factorial(5);
}
?>

<br>

<?php
//ejercicio14
//Crea un procedimiento que indique la posición de la primera ocurrencia de un dígito dentro de un número (se le pasan ambos por parámetros). Si no se encuentra, devuelve -1.
function posicionDigito($numero, $digito) {
    $numeroStr = (string)$numero; //convertimos el numero a cadena
    $digitoStr = (string)$digito; //convertimos el numero a digito

    $posicion = strpos($numeroStr, $digitoStr);// Buscamos la posición
    if ($posicion !== false) {
        echo "El digio $digito aparace por primera vez en la posicio " . ($posicion + 1) . ".\n";
    } else {
        echo "-1\n"; // No encontrado
    }
}

posicionDigito(123456789, 5); // Salida: El dígito 5 aparece por primera vez en la posición 5.
posicionDigito(987654321, 0); // Salida: -1
?>

<br>

<?php
//ejercicio15
//Crea una función que le de la vuelta a un número
function invertirnumero ($numero) {
    return strrev($numero);
}
$numero = 12345;
echo "Número original: $numero\n";
echo "Número invertido: " . invertirNumero($numero) . "\n";
?>





























































