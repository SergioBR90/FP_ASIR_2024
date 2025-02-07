<?php
//Escribir un programa que sume
// los cuadrados de los cien primeros números naturales, 
//mostrando el resultado en pantalla.
$suma = 0;
for ($i = 1; $i <=100; $i++) {
    $suma += $i * $i;    
}
echo "La suma de los cien primeros numeros naturales es $suma";
?>

