<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $new_arr = [];
        $left = 0;
        $right = count($nums)-1;
        $index = count($nums);
        while( $index > 0 ) {
            if( abs($nums[$left]) > abs($nums[$right]) ) {
                $new_arr[(--$index)] = $nums[$left] * $nums[$left];
                $left++;
            } else {
                $new_arr[(--$index)] = $nums[$right] * $nums[$right];
                $right--;
            }
        }

        $arr = [];
        foreach( range( 0, count($nums)-1) as $k )
            $arr[$k] = $new_arr[$k];

        return $arr;
    }
}

$nums  = [-4,-1,0,3,10];
$sol = new Solution();
$ret = $sol->sortedSquares($nums);
echo "<pre>";
print_r( $ret );
