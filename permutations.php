<?php
/**
 * 
 * LeetCode 46. Permutations PHP
 * 
 **/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $result = [];
        if( count($nums) == 1 )
            return [$nums];

        foreach( range(0, count($nums)-1) as $pos ){
            $n = array_shift($nums);
            $perms = $this->permute($nums);

            foreach( $perms as $k => $perm ){
                $perms[$k] = array_merge( $perm, [$n]);
            }
            $result = array_merge( $result, $perms );
            $nums = array_merge( $nums, [$n] );
        }

        return $result;
    }
}

$nums = [1,2,3];
$sol = new Solution();
$ans = $sol->permute($nums);
print_r($ans);

