<?php

/**
 * @author Andrew S Erwin
 * @link https://andrewthecoder.com
 **/

/**
 * @param int $num?
 * @return bool 
**/

function isPalindrome($num) {
    $num = strval($num);
    $length = strlen($num);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($num[$i] !== $num[$length - $i - 1]) {
            return false;
        }
    }

    return true;
}

$largestPalindrome = 0;
for ($i = 999; $i >= 100; $i--) {
    for ($j = $i; $j >= 100; $j--) {
        $product = $i * $j;
        if (isPalindrome($product) && $product > $largestPalindrome) {
            $largestPalindrome = $product;
        }
    }
}

print $largestPalindrome;
