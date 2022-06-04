<?php

/*
 * LeetCode 784. Letter Case Permutation PHP
 */

class Solution {

    /**
     * @param String $s
     * @return String[]
     */
    function letterCasePermutation($s) {
        $this->lens = strlen($s);
        $this->res = [];

        $this->dfs($s, $i);
        return $this->res;
    }

    function dfs($s, $i, $res='')
    {
        if( $i < $this->lens){
            if( is_numeric($s[$i])) {
                $this->dfs( $s, $i+1, $res.$s[$i]);
            }
            else {
                $this->dfs($s, $i+1, $res.strtoupper($s[$i]));
                $this->dfs($s, $i+1, $res.strtolower($s[$i]));
            }
        }
        else {
            $this->res[] = $res;
        }
    }
}

$s = "a1b2";
$sol = new Solution();
$ans = $sol->letterCasePermutation($s);
print_r($ans);
