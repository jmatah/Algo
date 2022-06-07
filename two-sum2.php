<?php
/**
*
* LeetCode 167. Two Sum II - Input Array Is Sorted using Binary Sort PHP 
*
**/

class Solution{
    function twoSum($nums, $target){
        $left = 0;
        $right = count($nums)-1;

        while( $left < $right ){
            if( $target == $nums[$left] + $nums[$right] ){
                return [$left+1, $right +1];
            }

            if( $target > $nums[$left] + $nums[$right]){
                $left++;
            }
            else {
                $right--;
            }
        }
        return [0,0];
    }
}

$numbers = [2,7,11,15];
$target = 9;

// $numbers = [2,3,4];
// $target = 6;

$sol = new Solution();
$ans = $sol->twosum($numbers, $target);
print_r($ans);
