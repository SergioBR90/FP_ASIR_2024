<?php 
    # Variables
    $texto = "Hola, ya se imprimir frases";
    $numeroentero = "597";
    $numerodecimal = "5,3";

    $num1 = 1234;
    $num2 = 532;
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;

    $num3 = 5;
    $num4 = 6;
    $suma2 = $num3 + $num4;

    echo $texto . "<br>";

    echo $numeroentero . "<br>";

    echo $numerodecimal . "<br>";

    echo "La suma de $num1 y $num2 es: $suma" . "<br>";

    echo "La suma de $num3 y $num4 es: $suma2" . "<br>";
    
    echo "La resta de $num1 y $num2 es: $resta" . "<br>";

    echo "La multiplicacion de $num1 y $num2 es: $multi" . "<br>";

    echo "La division de $num1 / $num2 = $div" . "<br>";
    

     //ejemplo de cadena de caracteres y numero 
     $cadena = "Hola, este ejemplo para una cadena de texto" ;
     $numero = 18 ;
     echo $cadena . "<br>";
     echo "Este es un ejemplo para numero = $numero" . "<br>" ;

     //(voy por el punto 10)
     $cadena = "Hola, este ejemplo para una cadena de texto y numero". 18;
     echo $cadena;
    
 
?>