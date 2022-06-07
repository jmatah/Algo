<?php
/**
*
* LeetCode 167. Two Sum II - Input Array Is Sorted Python 
*
**/
class Solution {

/**
 * @param Integer[] $numbers
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($numbers, $target) {
    $left = 0;
    $right = 0;
    $ret = [];
    for( $i = 0; $i < count($numbers); $i++ ) {
        for($j = $i+1; $j < count($numbers); $j++){
            if( $numbers[$i] + $numbers[$j] == $target ){
                $ret = [$i+1, $j+1];
                break 2;
            }
        }
    }
    return $ret;
}
}

$numbers = [2,11,15,7];
$target = 9;

$sol = new Solution();
$ret = $sol->twoSum( $numbers, $target );

print_R( $ret );