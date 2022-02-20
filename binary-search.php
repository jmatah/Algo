<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;

        $ret = -1;
        while( $left <= $right ) {
            $mid = $left + intval(( $right - $left )/ 2);

            if( $nums[$mid] == $target ) {
                $ret = $mid;
                break;
            }

            if( $nums[$mid] < $target ) {
                $left = $mid + 1;
            }

            if( $nums[$mid] > $target ){
                $right = $mid - 1;
            }
        }
        return $ret;
    }
}

$arr = [2, 3, 4, 5, 7, 8, 9, 10, 20, 33, 40, 42, 44, 45, 55, 65, 68, 76, 98, 101, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 2111];
$search = 211;

$s = new Solution();
$ret = $s->search( $arr, $search );
if( $ret != -1 )
    print("Element Found at index ".$ret);
else
    print("Element not found");