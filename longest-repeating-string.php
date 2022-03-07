<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $hash = [];
        $len = 0;
        $left = 0;

        for( $right = 0; $right < strlen( $s ); $right++) {
            $hash[$s[$right]] = ($hash[$s[$right]]? $hash[$s[$right]]+1: 1);

            while( $hash[$s[$right]] > 1 ) {
                $hash[$s[$left]]--;
                $left++;
            }
            $len = max( $len, ($right - $left + 1 ));
        }
        return $len;
    }
}

$s = "abcabcbb";
//$s = "bbbb";
//$s = "pwwkew";
$sol = new Solution();
echo $sol->lengthOfLongestSubstring($s);