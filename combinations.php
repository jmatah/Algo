<?php
/**
 * LeetCode 77. Combinations PHP DFS
*/
class Solution {
    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $this->ans = [];
        $this->count = 0;
        $this->n = $n;
        $this->k = $k;

        $this->dfs(1, []);

        return $this->ans;
    }

    function dfs($start, $comb)
    {
        if($this->count == $this->k ){
            $this->ans[] = $comb;
            return;
        }

        if( $start > $this->n ) return;
        foreach( range( $start, $this->n ) as $i ){
            $this->count++;
            $this->dfs($i+1, array_merge($comb, [$i]));
            $this->count--;
        }
    }
}

$n = 4;
$k = 2;

$sol = new Solution();
$ans = $sol->combine($n, $k );
print_r($ans);
        