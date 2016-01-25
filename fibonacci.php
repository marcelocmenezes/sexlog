<?php

/**
 *
 * @Author: Marcelo C Menezes
 * https://github.com/marcelocmenezes
 * 
 * Etapa 2
 *
 */

function fib($n) {
    $i = 1;
    $j = 0;
    $soma = 0;

    for($k = 1; $k <= $n; $k++) {
        $t = $i + $j;
        $i = $j;
        $j = $t;
        $soma += $j;

        if($k == $n) return $soma . "\n";
    }
}

echo fib(49);

?>
