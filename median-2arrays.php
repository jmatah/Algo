<?php
/**
 * 
 * LeetCode: 4. Median of Two Sorted Arrays in PHP
 * 
 */
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        list($A, $B) = [$nums1, $nums2];
        $total = count($A) + count($B);
        $half = intval($total / 2);

        if( count($A) > count($B) )
            list($B, $A) = [$A, $B];

        $left = 0;
        $right = count($A) - 1;
        while( true ) {
            $mid = $left + round(($right - $left)/ 2);
            $mid2 = $half - $mid - 2;
            $Aleft =  ($mid >= 0?           $A[$mid]    : PHP_INT_MIN);
            $Aright = ($mid+1 < count($A) ? $A[$mid+1]  : PHP_INT_MAX);
            $Bleft =  ($mid2 >= 0?          $B[$mid2]   : PHP_INT_MIN);
            $Bright = ($mid2+1 < count($B)? $B[$mid2+1] : PHP_INT_MAX);
            if( $Aleft <= $Bright && $Bleft <= $Aright ){
                if( $total % 2 == 0 ){
                    return (max( $Aleft, $Bleft) + min( $Aright, $Bright))/ 2;
                }
                else {
                    return min( $Aright, $Bright);
                }
            }
            else if( $Aleft > $Bright ){
                $right = $mid - 1;
            }
            else{
                $left = $mid + 1;
            }
        }
    }
}

$nums1 = [1,3]; 
$nums2 = [2];
$nums1 = [1,2];
$nums2 = [3,4];
$sol = new Solution();
$ans = $sol->findMedianSortedArrays($nums1, $nums2);
print("\nAns: ");
print($ans);