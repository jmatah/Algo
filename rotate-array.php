<?php

class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    $k = $k % count($nums);
    echo $k;
    $nums = array_merge( array_slice($nums, -$k), array_slice($nums, 0, -$k) );
}
}

$nums = [1,2,3,4,5,6,7];
$k = 3;

$nums = [1,2,3];
$k = 4;

$sol = new Solution();
$sol->rotate($nums, $k );
print_r($nums);