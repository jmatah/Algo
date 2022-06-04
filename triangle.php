<?php

/*
 * LeetCode 120. Triangle; dp
 * 
 */

class Solution {

    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    function minimumTotal($triangle) {
        $dp = [];
        $triangle = array_reverse($triangle);

        foreach( $triangle as $row ){
            foreach( $row as $i => $n ) {
                $dp[$i] = $n + min($dp[$i], $dp[$i+1]);
            }
        }
        return $dp[0];
    }
}

$triangle = [[2],[3,4],[6,5,7],[4,1,8,3]];
//$triangle = [[-10]];
$sol = new Solution();
$ans = $sol->minimumTotal($triangle);
print_r($ans);
