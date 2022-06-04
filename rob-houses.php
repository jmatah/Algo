<?php
/*
 * LeetCode : 198. House Robber PHP
 * 
 */

class Solution {
    function rob($nums)
    {
        $rob1 = 0;
        $rob2 = 0;

        // $nums = [$rob1, $rob2, $n, $n+1, ...]
        foreach( $nums as $n ){
            $temp = max( $n + $rob1, $rob2 );
            $rob1 = $rob2;
            $rob2 = $temp;
        }
        return $rob2;
     }
 }

$nums = [1,2,3,1];
//$nums = [2,7,9,3,1];
$sol = new Solution();
$ans = $sol->rob($nums);
echo $ans;
    