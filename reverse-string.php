<?php

class Solution {

/**
 * @param String[] $s
 * @return NULL
 */
function reverseString(&$s) {
    $left = 0;
    $right = count($s) - 1;
    $swap = 0;
    print_r($s);
    while( $left < $right ){
        $swap = $s[$right];
        $s[$right] = $s[$left];
        $s[$left] = $swap;
        $left++;
        $right--;
    }
    print_r($s);
}
}

$s = ["h","e","l","l","o"];
$sol = new Solution();
$sol->reverseString($s);
