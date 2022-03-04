<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s = explode(' ', $s);
        $ret = [];
        foreach( $s as $a ){
            $a = str_split( $a);
            $a = array_reverse($a);
            $ret[] = implode( '', $a );
        }
        return implode( ' ', $ret );
    }
}

$s = "Let's take LeetCode contest";
$sol = new Solution();
echo $sol->reverseWords($s);