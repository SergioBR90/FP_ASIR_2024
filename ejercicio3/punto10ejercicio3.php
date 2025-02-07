<?php
//Escribir un programa que multiplique
// los 20 primeros números naturales (1*2*3*4*5…) y muestre el resultado.
$multiplicacion = 1;
$i=1;
$cadena = "";
while ($i <= 20) {
    $multiplicacion *= $i;
    $cadena .= ($i == 1) ? "$i" : " * $i";
    $i++;
}
echo "$cadena = $multiplicacion";
?>

