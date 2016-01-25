<?php

/**
 *
 * @Author: Marcelo C Menezes
 * https://github.com/marcelocmenezes
 *
 */

$contador = 0;

for ($i = 2; $i <= 1000000; $i++ ) {

    if(gmp_prob_prime($i) == 2 ) {

        $contador++;
        if($contador == 10001){
            echo $i;
        }

    }
}

?>
