<?php

/**
 *  The prime factors of 13195 are 5, 7, 13 and 29.
 *
 *  What is the largest prime factor of the number 600851475143 ?*
 *
 * @author Andrew S Erwin
 * @link https://andrewthecoder.com
 **/

/**
 * @param int $num?
 * @return int 
**/

function lpf($num) {
    $factor = 2;
    while ($factor <= $num) {
        if ($num % $factor == 0) {
            $num /= $factor;
        } else {
            $factor++;
        }
    }

    return $factor;
}

print lpf(600851475143);


