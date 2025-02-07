<?php
        for ($numero = 2; $numero <= 100; $numero++) {
            $esPrimo = true; // Suponemos que el número es primo inicialmente

            // Verificamos si el número es divisible por algún número entre 2 y la raíz cuadrada del número
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    $esPrimo = false; // Si es divisible, no es primo
                    break;
                }
            }

            // Si es primo, lo mostramos en la lista
            if ($esPrimo) {
                echo "<li>$numero</li>";
            }
        }
    ?>