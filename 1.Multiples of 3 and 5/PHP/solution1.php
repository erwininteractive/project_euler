<?php

/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 * Answer = 233168
 *
 * @author Andrew S Erwin
 * @link https://andrewthecoder.com
 **/

/**
 * @param int $range how far to check?
 * @return int 
 */
function sum(int $range): int {
    $sum = 0;

    foreach (range(1, $range) as $i) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }

    return $sum;
}

print sum(999);
