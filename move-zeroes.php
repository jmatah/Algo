<?php

/** 
 * LeetCode 283. Move Zeroes PHP
 *
 *
 **/

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $zero = array_count_values($nums);
        if( $zero[0] > 0 ){
        foreach( range(1, $zero[0]) as $r ) {
            array_splice( $nums, array_search( 0, $nums ), 1 );
            array_push( $nums, 0 );
        }}
    }
}


$nums = [0,1,0,3,12];
$nums = [0, 0,0,0,0,120,0,34,45,56,67];
print_r( $nums);

$sol = new Solution();
$sol->MoveZeroes($nums);
print_r( $nums);