<?php
/*
 * LeetCode 70. Climbing Stairs - PHP
 * 
 */ 

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $i = 1; $j = 1;
        if($n <=2)
            return $n;

        foreach( range(0, $n-2) as $a ){
            $tmp = $i;
            $i += $j;
            $j = $tmp; 
        }
        return $i;
    }
}

$n = 3;
$sol = new Solution();
$ans = $sol->climbStairs($n);
print_r($ans);
