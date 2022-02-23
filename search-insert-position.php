<?php

class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;
    $ans = -1;
    while( $left <= $right )
    {
        $mid = $left + ceil( ($right - $left) / 2);
        //echo "\nLeft: {$left}; Right: {$right}; mid: {$mid}; val: {$nums[$mid]}";

        if( $nums[$mid] == $target ) { 
            $ans = $mid;
            break;
        }

        if( $nums[$mid] < $target ) {
            $left = $mid+1;
            $ans = $mid + 1;
        } else if( $nums[$mid] > $target ) {
            $right = $mid-1;
            $ans = $mid;
        }
    }
    return $ans;
}
}

$nums = [2,4,6,8,9,13,15,19,22];
$target = 21;

$nums = [1,3,5,6];
$target = 7;

$sol = new Solution();

foreach( range(0, 8) as $target) {
    $ret = $sol->searchInsert($nums, $target);
    print("\n{$target} should be placed at {$ret}");
}

